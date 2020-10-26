<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Transaksi extends CI_Controller {

	/**
	 * Index Page for this controller.
	 *
	 * Maps to the following URL
	 * 		http://example.com/index.php/welcome
	 *	- or -
	 * 		http://example.com/index.php/welcome/index
	 *	- or -
	 * Since this controller is set as the default controller in
	 * config/routes.php, it's displayed at http://example.com/
	 *
	 * So any other public methods not prefixed with an underscore will
	 * map to /index.php/welcome/<method_name>
	 * @see https://codeigniter.com/user_guide/general/urls.html
	 */
    public function __construct()
    {
        parent::__construct();
        $this->load->model('TransaksiM');
        $this->load->helper('form');
        $this->load->library('session');
    }

	public function index()
	{
        $data['data'] = $this->TransaksiM->getTransaksi();
        $data['dataproyek'] = $this->TransaksiM->getProyek();
        $data['datapelaksana'] = $this->TransaksiM->getPelaksana();
        $data['datasandi'] = $this->TransaksiM->getSandi();
        $data['dataitem'] = $this->TransaksiM->getItem();
		$userlvl = $this->session->userdata('level');
		if ($userlvl){
			$this->load->view('partials/head');
			$this->load->view('partials/navbar');
			if ($userlvl == "Administrator"){
				$this->load->view('partials/sidebar0');
				$this->load->view('ad/page_transaksi', $data);
			} elseif ($userlvl == "Operator"){
				$this->load->view('partials/sidebar1');
				$this->load->view('op/page_transaksi', $data);
			} else {
				$this->load->view('partials/sidebar2');
				$this->load->view('sk/page_transaksi', $data);
			}
				$this->load->view('partials/foot');
		} else {
			$this->session->set_flashdata('message', 
			'<div class="alert alert-warning alert-dismissible fade show" role="alert">
			Anda harus login!
			<button type="button" class="close" data-dismiss="alert" aria-label="Close">
			  <span aria-hidden="true">&times;</span>
			</button>
			</div>');
			redirect('login');
		}
	}

	public function add(){
		$now = date("Y-m-d H:i:s");
		$date = date("dmyHis");
		$user = $this->session->userdata('usercode');

        $proyek = $this->input->post('proyekid');
        $pelaksana = $this->input->post('pelaksanaid');
        $sandi = $this->input->post('sandiid');
        $tanggal = $this->input->post('tanggal');
        $jenis = $this->input->post('jenis');
        $keterangan = $this->input->post('kett');
        $sebesar = $this->input->post('sebesar');

		$dt = $this->TransaksiM->selectMutasi($sandi);
		if($dt->num_rows() > 0){
			foreach($dt->result() as $row){
				$mutasi = $row->mutasi;
			}
		}

		$saldo = $this->TransaksiM->getSaldo();
		$saldo = $saldo->saldokas;
		
		$lt = $this->TransaksiM->lastTransaksi();
		$lt = substr($lt->no_bukti,2,5);
		$lt++;
		$lt = sprintf("%05d", $lt);
		
		$ls = substr($sandi,2,2);

		$id = strtoupper($ls.$lt.$date);
		
		$this->TransaksiM->insertTransaksi($id,$proyek,$pelaksana,$sandi,$tanggal,$jenis,$keterangan,$sebesar,$mutasi,$saldo,$lt,$user,$now);
		$this->session->set_flashdata('message', 
		'<div class="alert bg-success" role="alert" id="alert">
			<svg class="glyph stroked checkmark"><use xlink:href="#stroked-checkmark"></use></svg> Transaksi berhasil ditambahkan <a href="" onclick="return closealert(this)" class="pull-right"><span class="glyphicon glyphicon-remove"></span></a>
		</div>');
		redirect('transaksi');
	}

	public function delete(){
        $id = $this->input->post('deltid');
		$lt = substr($id,2,5);

		$s = $this->TransaksiM->getSaldo();
		$saldo = $s->saldokas;

		$at = $this->TransaksiM->getAt($id);
		if($at->num_rows() > 0){
			foreach($at->result() as $row){
				$pid = $row->kode_project;
				$sid = $row->kode_sandi;
				$jumlah = $row->jumlah;
			}
		}

		$m = $this->TransaksiM->selectMutasi($sid);
		if($m->num_rows() > 0){
			foreach($m->result() as $row){
				$mutasi = $row->mutasi;
			}
		}

		$this->TransaksiM->deleteTransaksi($id,$lt,$saldo,$pid,$sid,$jumlah,$mutasi);
		$this->session->set_flashdata('message', 
		'<div class="alert bg-success" role="alert" id="alert">
			<svg class="glyph stroked checkmark"><use xlink:href="#stroked-checkmark"></use></svg> Transaksi berhasil dihapus <a href="" onclick="return closealert(this)" class="pull-right"><span class="glyphicon glyphicon-remove"></span></a>
		</div>');
		redirect('transaksi');
	}

	public function addItem(){
		$user = $this->session->userdata('usercode');

		$tid = $this->input->post('tid');
		$pid = $this->input->post('pid');

		$dat = $this->TransaksiM->getTotal($tid);
		if($dat->num_rows() > 0){
			foreach($dat->result() as $row){
				$total = $row->total;
			}
		}
		
        $nota = $this->input->post('nota');
        $pilih = $this->input->post('pilihitem');
        $id = $this->input->post('itemid');
        $nama = $this->input->post('itemnama');
        $jenis = $this->input->post('itemjenis');
        $satuan = $this->input->post('itemsatuan');
        $qty = $this->input->post('qty');
        $harga = $this->input->post('harga');
        $keterangan = $this->input->post('ketitem');
		$jumlah = $qty*$harga;

		$total = $total+$jumlah;
		
		if ($nota == null){
			$nota = '-';
		}
		if ($keterangan == null){
			$keterangan = '-';
		}
		
		$last = $this->TransaksiM->lastItem();
		$last = substr($last->kode_item,0,2);
		$last++;
		$last = sprintf("%02d", $last);

		$newid = substr($nama,0,2);
		$newid = strtoupper($last.$newid);
		
		$this->TransaksiM->insertDetil($tid,$pid,$nota,$pilih,$id,$nama,$jenis,$satuan,$qty,$harga,$jumlah,$keterangan,$newid,$total,$user);
		$this->session->set_flashdata('message', 
		'<div class="alert bg-success" role="alert" id="alert">
			<svg class="glyph stroked checkmark"><use xlink:href="#stroked-checkmark"></use></svg> Item Transaksi berhasil ditambahkan <a href="" onclick="return closealert(this)" class="pull-right"><span class="glyphicon glyphicon-remove"></span></a>
		</div>');
		redirect('transaksi');
	}

	public function deleteItem(){
		$tid = $this->input->post('deldtid');
		$iid = $this->input->post('deldiid');

		$dt = $this->TransaksiM->getDt($tid);
		if($dt->num_rows() > 0){
			foreach($dt->result() as $row){
				$pid = $row->kode_project;
				$total = $row->total;
			}
		}
		$it = $this->TransaksiM->getIt($tid,$iid);
		if($it->num_rows() > 0){
			foreach($it->result() as $row){
				$jumlah = $row->jumlah;
			}
		}
		
		$this->TransaksiM->deleteItem($tid,$iid,$pid,$total,$jumlah);
		$this->session->set_flashdata('message', 
		'<div class="alert bg-success" role="alert" id="alert">
			<svg class="glyph stroked checkmark"><use xlink:href="#stroked-checkmark"></use></svg> Item berhasil dihapus dari transaksi <a href="" onclick="return closealert(this)" class="pull-right"><span class="glyphicon glyphicon-remove"></span></a>
		</div>');
		redirect('transaksi');
	}

	public function selectProyek(){
		$output = '';
		$q = $this->input->post('query');
		$data = $this->TransaksiM->searchProyek($q);
		if($data->num_rows() > 0)
		{
			$output .= '
						<option value="'.$data->result()->kode_project.'">'.$data->result()->nama_project.'</option>
				';
			foreach($data->result() as $row)
			{
				$output .= '
						<option value="'.$row->kode_project.'">'.$row->nama_project.'</option>
				';
			}
		}
		else
		{
			$output = '
						<option value="" disabled>Tidak ada proyek</option>
			';
		}
		echo $output;
	}

	public function selectJenis(){
		$output = '';
		$q = $this->input->post('query');
		$data = $this->TransaksiM->searchJenis($q);
		if($data->num_rows() > 0)
		{
			foreach($data->result() as $row)
			{
				$output = $row->jenis;
			}
		}
		else
		{
			$output = '';
		}
		echo $output;
	}

	public function selectSatuan(){
		$output = '';
		$q = $this->input->post('query');
		$data = $this->TransaksiM->searchSatuan($q);
		if($data->num_rows() > 0)
		{
			foreach($data->result() as $row)
			{
				$output = $row->satuan;
			}
		}
		else
		{
			$output = '';
		}
		echo $output;
	}

	public function select(){
		$userlvl = $this->session->userdata('level');
		$output = '';
		$q = $this->input->post('query');
		$data = $this->TransaksiM->searchDetil($q);
		if($data->num_rows() > 0)
		{
			if ($userlvl == "Administrator"){
				foreach($data->result() as $row)
				{
					$output .= '
							<tr>
								<td>'.$row->no_referensi_nota.'</td>
								<td>'.$row->nama_item.'</td>
								<td>'.$row->keterangan.'</td>
								<td>'.$row->qty.'</td>
								<td>'.$row->harga.'</td>
								<td>'.$row->jumlah.'</td>
								<td><button type="button" name="deldt" id="deldt" class="btn btn-outline-info btn-danger" data-toggle="modal" data-target="#delitem" data-tid="'.$row->no_bukti.'" data-iid="'.$row->kode_item.'" data-nama="'.$row->nama_item.'" onclick="return deldt(this)">
									<i class="fa fa-trash"> </i>
								</button></td>
							</tr>
					';
				}
			} else {
				foreach($data->result() as $row)
				{
					$output .= '
							<tr>
								<td>'.$row->no_referensi_nota.'</td>
								<td>'.$row->nama_item.'</td>
								<td>'.$row->keterangan.'</td>
								<td>'.$row->qty.'</td>
								<td>'.$row->harga.'</td>
								<td>'.$row->jumlah.'</td>
							</tr>
					';
				}
			}
		}
		else
		{
			$output = '
						<tr>
							<td colspan="6" align="center">No matching records found</td>
						</tr>
			';
		}
		echo $output;
	}
}
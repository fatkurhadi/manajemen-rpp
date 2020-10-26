<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Proyek extends CI_Controller {

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
        $this->load->model('ProyekM');
        $this->load->helper('form');
        $this->load->library('session');
    }

	public function index()
	{
        $data['data'] = $this->ProyekM->getProyek();
        $data['datasubkon'] = $this->ProyekM->getSubkon();
        $data['dataitem'] = $this->ProyekM->getItem();
		$userlvl = $this->session->userdata('level');
		if ($userlvl){
			$this->load->view('partials/head');
			$this->load->view('partials/navbar');
			if ($userlvl == "Administrator"){
				$this->load->view('partials/sidebar0');
				$this->load->view('ad/page_proyek', $data);
			} elseif ($userlvl == "Operator"){
				$this->load->view('partials/sidebar1');
				$this->load->view('op/page_proyek', $data);
			} else {
				$this->load->view('partials/sidebar2');
				$this->load->view('sk/page_proyek', $data);
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
		$date = date("dmy");

        $nama = $this->input->post('addnama');
        $lokasi = $this->input->post('addlokasi');
        $mulai = $this->input->post('addmulai');
        $akhir = $this->input->post('addakhir');
        $nominal = $this->input->post('addnominal');
		
		$last = $this->ProyekM->lastProyek();
		$last = substr($last->kode_project,0,3);
		$last++;
		$last = sprintf("%03d", $last);

		$id = substr($nama,0,2);
		$id = strtoupper($last.$id.$date);
		
		$this->ProyekM->insertProyek($id,$nama,$lokasi,$mulai,$akhir,$nominal);
		$this->session->set_flashdata('message', 
		'<div class="alert bg-success" role="alert" id="alert">
			<svg class="glyph stroked checkmark"><use xlink:href="#stroked-checkmark"></use></svg> Proyek berhasil ditambahkan <a href="" onclick="return closealert(this)" class="pull-right"><span class="glyphicon glyphicon-remove"></span></a>
		</div>');
		redirect('proyek');
	}

	public function edit(){
        $id = $this->input->post('editid');
        $nama = $this->input->post('editnama');
        $lokasi = $this->input->post('editlokasi');
        $mulai = $this->input->post('editmulai');
        $akhir = $this->input->post('editakhir');
        $nominal = $this->input->post('editnominal');
        $status = $this->input->post('editstatus');

		$this->ProyekM->updateProyek($id,$nama,$lokasi,$mulai,$akhir,$nominal,$status);
		$this->session->set_flashdata('message', 
		'<div class="alert bg-success" role="alert" id="alert">
			<svg class="glyph stroked checkmark"><use xlink:href="#stroked-checkmark"></use></svg> Proyek berhasil diubah <a href="" onclick="return closealert(this)" class="pull-right"><span class="glyphicon glyphicon-remove"></span></a>
		</div>');
		redirect('proyek');
	}

	public function addSubkon(){
        $pid = $this->input->post('pidsubkon');
        $id = $this->input->post('subkonid');
        $bidang = $this->input->post('subkonbidang');
        $subkonpj = $this->input->post('subkonpj');
		
		$this->ProyekM->insertSubkon($pid,$id,$bidang,$subkonpj);
		$this->session->set_flashdata('message', 
		'<div class="alert bg-success" role="alert" id="alert">
			<svg class="glyph stroked checkmark"><use xlink:href="#stroked-checkmark"></use></svg> Penanggung Jawab berhasil ditambahkan <a href="" onclick="return closealert(this)" class="pull-right"><span class="glyphicon glyphicon-remove"></span></a>
		</div>');
		redirect('proyek');
	}

	public function addRpp(){
        $pilih = $this->input->post('pilihitem');
        $pid = $this->input->post('pidrpp');
        $id = $this->input->post('itemid');
        $nama = $this->input->post('itemnama');
        $jenis = $this->input->post('itemjenis');
        $satuan = $this->input->post('itemsatuan');
        $qty = $this->input->post('qtyrpp');
        $harga = $this->input->post('hargarpp');
        $jumlah = $qty*$harga;
		
		$last = $this->ProyekM->lastItem();
		$last = substr($last->kode_item,0,2);
		$last++;
		$last = sprintf("%02d", $last);

		$newid = substr($nama,0,2);
		$newid = strtoupper($last.$newid);
		
		$this->ProyekM->insertRpp($pilih,$pid,$id,$nama,$jenis,$satuan,$qty,$harga,$jumlah,$newid);
		$this->session->set_flashdata('message', 
		'<div class="alert bg-success" role="alert" id="alert">
			<svg class="glyph stroked checkmark"><use xlink:href="#stroked-checkmark"></use></svg> Rencana Pelaksanaan Proyek berhasil ditambahkan <a href="" onclick="return closealert(this)" class="pull-right"><span class="glyphicon glyphicon-remove"></span></a>
		</div>');
		redirect('proyek');
	}

	public function deleteSubkon(){
		$pid = $this->input->post('delspid');
		$sid = $this->input->post('delssid');
		
		$this->ProyekM->deleteSubkon($pid,$sid);
		$this->session->set_flashdata('message', 
		'<div class="alert bg-success" role="alert" id="alert">
			<svg class="glyph stroked checkmark"><use xlink:href="#stroked-checkmark"></use></svg> Subkon berhasil dihapus dari proyek <a href="" onclick="return closealert(this)" class="pull-right"><span class="glyphicon glyphicon-remove"></span></a>
		</div>');
		redirect('proyek');
	}

	public function deleteRpp(){
		$pid = $this->input->post('delrpid');
		$iid = $this->input->post('delriid');
		
		$this->ProyekM->deleteRpp($pid,$iid);
		$this->session->set_flashdata('message', 
		'<div class="alert bg-success" role="alert" id="alert">
			<svg class="glyph stroked checkmark"><use xlink:href="#stroked-checkmark"></use></svg> RPP berhasil dihapus dari proyek <a href="" onclick="return closealert(this)" class="pull-right"><span class="glyphicon glyphicon-remove"></span></a>
		</div>');
		redirect('proyek');
	}

	public function selectJenis(){
		$output = '';
		$q = $this->input->post('query');
		$data = $this->ProyekM->searchJenis($q);
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
		$data = $this->ProyekM->searchSatuan($q);
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

	public function selectSubkon(){
		$userlvl = $this->session->userdata('level');
		$output = '';
		$q = $this->input->post('query');
		$data = $this->ProyekM->searchSubkon($q);
		if($data->num_rows() > 0)
		{
			if ($userlvl == "Administrator"){
				foreach($data->result() as $row)
				{
					$output .= '
							<tr>
								<td>'.$row->kode_pelaksana.'</td>
								<td>'.$row->nama_pelaksana.'</td>
								<td>'.$row->bidang.'</td>
								<td>'.$row->penanggung_jawab.'</td>
								<td><button type="button" name="delsubkon" id="delsubkon" class="btn btn-outline-info btn-danger" data-toggle="modal" data-target="#deletesubkon" data-pid="'.$row->kode_project.'" data-sid="'.$row->kode_pelaksana.'" data-nama="'.$row->nama_pelaksana.'" onclick="return delsubkon(this)">
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
								<td>'.$row->kode_pelaksana.'</td>
								<td>'.$row->nama_pelaksana.'</td>
								<td>'.$row->bidang.'</td>
								<td>'.$row->penanggung_jawab.'</td>
							</tr>
					';
				}
			}
		}
		else
		{
			$output = '
						<tr>
							<td colspan="4" align="center">No matching records found</td>
						</tr>
			';
		}
		echo $output;
	}

	public function selectItem(){
		$userlvl = $this->session->userdata('level');
		$output = '';
		$q = $this->input->post('query');
		$data = $this->ProyekM->searchItem($q);
		if($data->num_rows() > 0)
		{
			if ($userlvl == "Administrator"){
				foreach($data->result() as $row)
				{
					$output .= '
							<tr>
								<td>'.$row->kode_item.'</td>
								<td>'.$row->nama_item.'</td>
								<td>'.$row->satuan.'</td>
								<td>'.$row->qty.'</td>
								<td>'.$row->harga_satuan.'</td>
								<td>'.$row->jumlah.'</td>
								<td>'.$row->realisasi.'</td>
								<td><button type="button" name="delrpp" id="delrpp" class="btn btn-outline-info btn-danger" data-toggle="modal" data-target="#deleterpp" data-pid="'.$row->kode_project.'" data-iid="'.$row->kode_item.'" data-nama="'.$row->nama_item.'" onclick="return delrpp(this)">
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
								<td>'.$row->kode_item.'</td>
								<td>'.$row->nama_item.'</td>
								<td>'.$row->satuan.'</td>
								<td>'.$row->qty.'</td>
								<td>'.$row->harga_satuan.'</td>
								<td>'.$row->jumlah.'</td>
								<td>'.$row->realisasi.'</td>
							</tr>
					';
				}
			}
		}
		else
		{
			$output = '
						<tr>
							<td colspan="5" align="center">No matching records found</td>
						</tr>
			';
		}
		echo $output;
	}
}
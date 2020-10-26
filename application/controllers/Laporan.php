<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Laporan extends CI_Controller {

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
        $this->load->library('pdf');
        $this->load->library('excel');
        $this->load->library('iofactory');
        $this->load->model('LaporanM');
        $this->load->helper('form');
        $this->load->library('session');
	}
	
	public function index()
	{
        $data['data0'] = $this->LaporanM->getPelaksana();
        $data['data1'] = $this->LaporanM->getproyek();
		$userlvl = $this->session->userdata('level');
		if ($userlvl){
			$this->load->view('partials/head');
			$this->load->view('partials/navbar');
			if ($userlvl == "Administrator"){
				$this->load->view('partials/sidebar0');
				$this->load->view('ad/page_laporan', $data);
				$this->load->view('partials/foot');
			} else {
				$this->session->set_flashdata('message', 
				'<div class="alert bg-warning" role="alert" id="alert">
					<svg class="glyph stroked flag"><use xlink:href="#stroked-flag"></use></svg> Hanya administrator yang dapat mengakses <a href="" onclick="return closealert(this)" class="pull-right"><span class="glyphicon glyphicon-remove"></span></a>
				</div>');
				redirect('dashboard');
			}
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
    
    public function laporanProyek() {
        $proyek = $this->input->post('proyek');
        $data['report'] = $this->LaporanM->selectProyek($proyek);
        $this->load->view('laporan/r_proyek',$data); //memanggil view 
    }
    
    public function laporanSubkon() {
        $subkon = $this->input->post('pelaksanaid');
        $proyek = $this->input->post('proyekid');
		$data = $this->LaporanM->selectPelaksana($subkon,$proyek);
		if ($data->num_rows() > 0){
			$dt = array( 'report' => $data->result());
			//echo json_encode($dt,JSON_PRETTY_PRINT);
			$this->load->view('laporan/r_subkon',$dt); //memanggil view 
		} else {
			$this->session->set_flashdata('message', 
			'<div class="alert bg-danger" role="alert" id="alert">
				<svg class="glyph stroked clipboard with paper"><use xlink:href="#stroked-clipboard-with-paper"></use></svg> Belum ada laporan transaksi <a href="" onclick="return closealert(this)" class="pull-right"><span class="glyphicon glyphicon-remove"></span></a>
			</div>');
			redirect('transaksi');
		}
    }
    
    public function laporanMaterial() {
        $awal = $this->input->post('awal');
        $akhir = $this->input->post('akhir');
        $data = $this->LaporanM->selectMaterial($awal,$akhir);
		if ($data->num_rows() > 0){
			$dt = array( 'report' => $data->result(),
						'awal' => $awal,
						'akhir' => $akhir);
			//echo json_encode($dt,JSON_PRETTY_PRINT);
			$this->load->view('laporan/r_material',$dt); //memanggil view 
		} else {
			$this->session->set_flashdata('message', 
			'<div class="alert bg-danger" role="alert" id="alert">
				<svg class="glyph stroked clipboard with paper"><use xlink:href="#stroked-clipboard-with-paper"></use></svg> Belum ada laporan transaksi <a href="" onclick="return closealert(this)" class="pull-right"><span class="glyphicon glyphicon-remove"></span></a>
			</div>');
			redirect('transaksi');
		}
    }

	public function selectProyek(){
		$output = '';
		$q = $this->input->post('query');
		$data = $this->LaporanM->searchProyek($q);
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
}
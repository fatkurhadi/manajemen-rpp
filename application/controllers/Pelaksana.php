<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Pelaksana extends CI_Controller {

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
        $this->load->model('PelaksanaM');
        $this->load->helper('form');
        $this->load->library('session');
    }

	public function index()
	{
        $data['data'] = $this->PelaksanaM->getPelaksana();
		$userlvl = $this->session->userdata('level');
		if ($userlvl){
			$this->load->view('partials/head');
			$this->load->view('partials/navbar');
			if ($userlvl == "Administrator"){
				$this->load->view('partials/sidebar0');
				$this->load->view('ad/page_pelaksana', $data);
			} elseif ($userlvl == "Operator"){
				$this->load->view('partials/sidebar1');
				$this->load->view('op/page_pelaksana', $data);
			} else {
				$this->load->view('partials/sidebar2');
				$this->load->view('sk/page_pelaksana', $data);
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
        $nama = $this->input->post('addnama');
        $alamat = $this->input->post('addalamat');
        $telpon = $this->input->post('addtelpon');
		
		$last = $this->PelaksanaM->lastPelaksana();
		$last = substr($last->kode_pelaksana,0,3);
		$last++;
		$last = sprintf("%03d", $last);

		$id = substr($nama,0,3);
		$id = strtoupper($last.$id);
		
		$this->PelaksanaM->insertPelaksana($id,$nama,$alamat,$telpon);
		$this->session->set_flashdata('message', 
		'<div class="alert bg-success" role="alert" id="alert">
			<svg class="glyph stroked checkmark"><use xlink:href="#stroked-checkmark"></use></svg> Subkon berhasil ditambahkan <a href="" onclick="return closealert(this)" class="pull-right"><span class="glyphicon glyphicon-remove"></span></a>
		</div>');
		redirect('pelaksana');
	}

	public function edit(){
        $id = $this->input->post('editid');
        $nama = $this->input->post('editnama');
        $alamat = $this->input->post('editalamat');
        $telpon = $this->input->post('edittelpon');
        $status = $this->input->post('editstatus');

		$this->PelaksanaM->updatePelaksana($id,$nama,$alamat,$telpon,$status);
		$this->session->set_flashdata('message', 
		'<div class="alert bg-success" role="alert" id="alert">
			<svg class="glyph stroked checkmark"><use xlink:href="#stroked-checkmark"></use></svg> Subkon berhasil diubah <a href="" onclick="return closealert(this)" class="pull-right"><span class="glyphicon glyphicon-remove"></span></a>
		</div>');
		redirect('pelaksana');
	}
}
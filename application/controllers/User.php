<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class User extends CI_Controller {

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
        $this->load->model('UserM');
        $this->load->helper('form');
        $this->load->library('session');
    }

	public function index()
	{
        $data['userdata'] = $this->UserM->getUser();
        $data['datasubkon'] = $this->UserM->getSubkon();
		$userlvl = $this->session->userdata('level');
		if ($userlvl){
			$this->load->view('partials/head');
			$this->load->view('partials/navbar');
			if ($userlvl == "Administrator"){
				$this->load->view('partials/sidebar0');
				$this->load->view('ad/page_user', $data);
				$this->load->view('partials/foot');
			} elseif ($userlvl == "Operator"){
				$this->session->set_flashdata('message', 
				'<div class="alert bg-warning" role="alert" id="alert">
					<svg class="glyph stroked flag"><use xlink:href="#stroked-flag"></use></svg> Hanya administrator yang dapat mengakses <a href="" onclick="return closealert(this)" class="pull-right"><span class="glyphicon glyphicon-remove"></span></a>
				</div>');
				redirect('dashboard');
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

	public function add(){
        $nama = $this->input->post('addnama');
        $pass = $this->input->post('addpass');
        $level = $this->input->post('addlevel');
		$kodepel = $this->input->post('addkodepel');
		if ($kodepel == null){
			$kodepel = '-';
		}
		
		$last = $this->UserM->lastUser();
		$last = substr($last->kode_user,0,2);
		$last++;
		$last = sprintf("%02d", $last);

		$id = substr($nama,0,2);
		$id = strtoupper($last.$id);

		$pass = password_hash($pass, PASSWORD_DEFAULT);
		
		$this->UserM->insertUser($id,$nama,$pass,$level,$kodepel);
		$this->session->set_flashdata('message', 
		'<div class="alert bg-success" role="alert" id="alert">
			<svg class="glyph stroked checkmark"><use xlink:href="#stroked-checkmark"></use></svg> User berhasil ditambahkan <a href="" onclick="return closealert(this)" class="pull-right"><span class="glyphicon glyphicon-remove"></span></a>
		</div>');
		redirect('user');
	}

	public function edit(){
        $id = $this->input->post('editid');
        $nama = $this->input->post('editnama');
        $pass = $this->input->post('editpass');
        $level = $this->input->post('editlevel');
		$kodepel = $this->input->post('editkodepel');

		$pass = password_hash($pass, PASSWORD_DEFAULT);

		$this->UserM->updateUser($id,$nama,$pass,$level,$kodepel);
		$this->session->set_flashdata('message', 
		'<div class="alert bg-success" role="alert" id="alert">
			<svg class="glyph stroked checkmark"><use xlink:href="#stroked-checkmark"></use></svg> User berhasil diubah <a href="" onclick="return closealert(this)" class="pull-right"><span class="glyphicon glyphicon-remove"></span></a>
		</div>');
		redirect('user');
	}

	public function delete(){
		$id = $this->input->post('deleteid');
		
		$this->UserM->deleteUser($id);
		$this->session->set_flashdata('message', 
		'<div class="alert bg-success" role="alert" id="alert">
			<svg class="glyph stroked checkmark"><use xlink:href="#stroked-checkmark"></use></svg> User berhasil dihapus <a href="" onclick="return closealert(this)" class="pull-right"><span class="glyphicon glyphicon-remove"></span></a>
		</div>');
		redirect('user');
	}
}
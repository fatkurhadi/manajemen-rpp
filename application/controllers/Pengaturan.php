<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Pengaturan extends CI_Controller {

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
        $this->load->model('PengaturanM');
        $this->load->helper('form');
        $this->load->library('session');
    }

	public function index()
	{
        $id = $this->input->post('idpass');
        $pass = $this->input->post('changepass');
        $pass = password_hash($pass, PASSWORD_DEFAULT);
        $this->PengaturanM->updatePass($id,$pass);
		$this->session->set_flashdata('message', 
		'<div class="alert bg-success" role="alert" id="alert">
			<svg class="glyph stroked checkmark"><use xlink:href="#stroked-checkmark"></use></svg> Password berhasil diubah <a href="" onclick="return closealert(this)" class="pull-right"><span class="glyphicon glyphicon-remove"></span></a>
		</div>');
		redirect('dashboard');
	}

	public function contact(){
        $number = "6285156523489";
        $text = $this->input->post('pesan');

        redirect('https://api.whatsapp.com/send?phone='.$number.'&text='.$text);
	}
}
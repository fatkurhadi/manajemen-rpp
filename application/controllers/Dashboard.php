<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Dashboard extends CI_Controller {

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
        $this->load->helper('form');
        $this->load->library('session');
	}
	
	public function index()
	{
		$userlvl = $this->session->userdata('level');
		if ($userlvl){
			$this->load->view('partials/head');
			$this->load->view('partials/navbar');
			if ($userlvl == "Administrator"){
				$this->load->view('partials/sidebar0');
			} elseif ($userlvl == "Operator"){
				$this->load->view('partials/sidebar1');
			} else {
				$this->load->view('partials/sidebar2');
			}
			$this->load->view('page_dashboard');
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
}
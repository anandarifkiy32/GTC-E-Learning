<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Dashboard extends CI_Controller {

	function __construct(){
		parent::__construct();
		$this->load->model('Peserta_model');	
	}

	public function index()
	{
		$status = $this->session->userdata("status");
		if($status == "login"){
			$content = array(
				'title' => 'Dashboard',
				'content' => 'Pages/Dashboard');
			$this->load->view('Layout/Wrapper',$content);
		}else{
			redirect(base_url('Homepage'));
		}
		
	}
	function logout(){
		$this->session->sess_destroy();
		redirect(base_url());
	}
}

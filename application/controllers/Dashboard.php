<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Dashboard extends CI_Controller {

	function __construct(){
		parent::__construct();
		$this->load->model('Peserta_model');	
	}

	public function index()
	{
		echo 'sukses';
	}
	function logout(){
		$this->session->sess_destroy();
		redirect(base_url());
	}
}

<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Homepage extends CI_Controller {

	function __construct(){
		parent::__construct();
		$this->load->model('Peserta_model');	
	}

	public function index()
	{
		$status = $this->session->userdata("status");
		if($status == "login"){
			redirect(base_url('dashboard'));
		}
		$this->load->view('homepage');
	}

	public function login(){
		$username = $this->input->post('username');
		$password = $this->input->post('password');
		$where = array(
			'username' => $username,
			'pass' => $password
		);
		$cek = $this->Peserta_model->login($where)->num_rows();
		if($cek > 0){
			$data_session = array(
				'nama'   => $username,
				'status' => "login"
			);
			$this->session->set_userdata($data_session);
			echo 'sukses';
		}else{
			echo 'gagal';
			redirect(base_url("login"));

		}
	}
}

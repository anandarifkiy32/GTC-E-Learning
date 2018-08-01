<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Admin extends CI_Controller {

	function __construct(){
		parent::__construct();
		$this->load->model(array('Trainer_model','Company_model'));
	}

	function index()
	{
		$status = $this->session->userdata("status");
		if($status == "login2" && $level == "Trainer"){
			redirect(base_url('Trainer'));
		}elseif ($status == "login2" && $level == "Company") {
			redirect(base_url('Company'));
		}else{
			$this->load->view('Admin/login');
		}

	}

	function login(){
		$email = $this->input->post('username');
		$password = $this->input->post('password');
		$level = $this->input->post('level');
		$where = array(
			'email' => $email,
			'pass' => md5($password)
		);
		if ($level == "Trainer") {
			$cek = $this->Trainer_model->select_where($where)->num_rows();
			if($cek > 0){
				$data['session'] = $this->Trainer_model->select_where($where)->result();
				foreach ($data['session'] as $s) {
					$nama		= $s->nama;
					$id			= $s->id_trainer;
				}

				$data_session = array(
					'trainer'	=> $id,
					'nama' 		=> $nama,
					'status' 	=> "login2"
				);

				$this->session->set_userdata($data_session);
				redirect(base_url('trainer'));
			}
		}elseif ($level == "Company") {
			$cek = $this->Company_model->select_where($where)->num_rows();
			if($cek > 0){
				$data['session'] = $this->Company_model->select_where($where)->result();
				foreach ($data['session'] as $s) {
					$nama = $s->nama;
				}

				$data_session = array(
					'nama' 		=> $nama,
					'status' 	=> "login2"
				);

				$this->session->set_userdata($data_session);
				redirect(base_url('company'));
			}
		}else{
			echo 'gagal';
			redirect(base_url());
		}
	}
}
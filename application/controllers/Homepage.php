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
		}else{
			$this->load->view('homepage');
		}

	}

	public function login(){
		$email = $this->input->post('username');
		$password = md5($this->input->post('password'));
		$where = array(
			'email' => $email,
			'pass' => $password
		);
		$cek = $this->Peserta_model->select_where($where)->num_rows();
		if($cek > 0){
			$data_session = array(
				'nama'   => $username,
				'status' => "login"
			);
			$this->session->set_userdata($data_session);
			redirect(base_url('dashboard'));
		}else{
			echo 'gagal';
			redirect(base_url("login"));

		}
	}

	public function register(){
		$email 			= $this->input->post('email');
		$password 		= md5($this->input->post('password'));
		$namalengkap	= $this->input->post('namalengkap');
		$gender			= $this->input->post('gender');
		$tgl			= $this->input->post('tgl');
		$alamat			= $this->input->post('alamat');
		$telepon		= $this->input->post('telepon');

		$data = array(
			'email' => $email,
			'pass'	=> $password,
			'nama'  => $namalengkap,
			'gender'=> $gender,
			'ttl'   => $tgl,
			'alamat'=> $alamat,
			'telp'  => $telepon
		);

		$cek = $this->Peserta_model->input($data);
		if($cek){
			echo 'dadi';
		}

		// $where = array(
		// 	'email' => $email
		
		// );
		// $cek = $this->Peserta_model->select_where($where)->num_rows();
		// if($cek > 0){
		// 	echo "<script type='text/javascript'>
		// 	alert ('Maaf Username Dan Password Anda Salah !');
		// 	</script>";
		// 	redirect(base_url());
		// }
	}
}

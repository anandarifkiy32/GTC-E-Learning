<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Homepage extends CI_Controller {

	function __construct(){
		parent::__construct();
		$this->load->model('Peserta_model');	
	}

	function index()
	{
		$status = $this->session->userdata("status");
		if($status == "login"){
			redirect(base_url('dashboard'));
		}else{
			$this->load->view('homepage');
		}


	}

	function login(){
		$email = $this->input->post('username');
		$password = $this->input->post('password');
		$where = array(
			'email' => $email,
			'pass' => md5($password)
		);
		$cek = $this->Peserta_model->select_where($where)->num_rows();
		
		if($cek > 0){
			$data['session'] = $this->Peserta_model->select_where($where)->result();
			foreach ($data['session'] as $s) {
				$nama = $s->nama;
				$email= $s->email;
			}

			$data_session = array(
				'nama' 		=> $nama,
				'email' 	=> $email,
				'status' 	=> "login"
			);

			$this->session->set_userdata($data_session);
			redirect(base_url('dashboard'));
		}else{
			echo 'gagal';
			redirect(base_url());
		}
	}

	function register(){
		$email 			= $this->input->post('email');
		$password 		= md5($this->input->post('password'));
		$namalengkap	= $this->input->post('namalengkap');
		$gender			= $this->input->post('gender');
		$tgl			= $this->input->post('tgl');
		$alamat			= $this->input->post('alamat');
		$telepon		= $this->input->post('telepon');

		$length = 150;
		$characters = '0123456789ABCDEFGHIJKLMNOPQRSTUVWXYZabcdefghijklmnopqrstuvwxyz';
		$charactersLength = strlen($characters);
		$unique_kode = '';
		for ($i = 0; $i < $length; $i++) {
			$unique_kode .= $characters[rand(0, $charactersLength - 1)];
		}

		$data = array(
			'email' 		=> $email,
			'pass'			=> $password,
			'nama'  		=> $namalengkap,
			'gender'		=> $gender,
			'ttl'   		=> $tgl,
			'alamat'		=> $alamat,
			'telp'  		=> $telepon,
			'unique_code'	=> $unique_kode
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

<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Homepage extends CI_Controller {

	function __construct(){
		parent::__construct();
		$this->load->model(array('Peserta_model','Modul_model'));	
		$this->load->helper(array('form','url','file'));
	}

	function index()
	{
		$where = array(
			'unique_code' => $this->session->userdata('unique_code')
		);
		if($this->session->userdata('status') == 'login'){
			$data = array(
				'profile'	=> $this->Peserta_model->select_where($where)->result(),
				'banner'		=> 'Welcome',
				'course'	=> $this->Modul_model->select()->result(),
				'content'	=> 'client/pages/v_dashboard'
			);
			$this->load->view('client/layout/wrapper',$data);
		}else{
			$data['course'] = $this->Modul_model->select()->result();
			$this->load->view('client/pages/v_homepage',$data);
		}
		
	}

	function login(){
		$email = $this->input->post('email');
		$password = $this->input->post('pass');
		$where = array(
			'email' => $email,
			'pass' => md5($password)
		);
		$cek = $this->Peserta_model->select_where($where)->num_rows();
		
		if($cek > 0){
			$data['session'] = $this->Peserta_model->select_where($where)->result();
			foreach ($data['session'] as $s) {
				$unique_code	= $s->unique_code;
			}

			$data_session = array(
				'unique_code'	=> $unique_code,
				'status' 		=> "login"
			);

			$this->session->set_userdata($data_session);
			redirect(base_url());
		}else{
			redirect(base_url());
		}
	}

	function login2(){
		$id_modul	= $this->input->post('id_modul');
		$email 		= $this->input->post('email');
		$password 	= $this->input->post('pass');
		$where = array(
			'email' => $email,
			'pass' => md5($password)
		);
		$cek = $this->Peserta_model->select_where($where)->num_rows();
		
		if($cek > 0){
			$data['session'] = $this->Peserta_model->select_where($where)->result();
			foreach ($data['session'] as $s) {
				$unique_code	= $s->unique_code;
			}

			$data_session = array(
				'unique_code'	=> $unique_code,
				'status' 		=> "login"
			);

			$this->session->set_userdata($data_session);
			
		}
		redirect(base_url('homepage/startcourse/'.$id_modul));
	}


	function logout(){
		$this->session->sess_destroy();
		redirect(base_url());
	}

	function register(){
		$email 			= $this->input->post('email');
		$password 		= md5($this->input->post('password'));
		$namalengkap	= $this->input->post('namalengkap');
		$gender			= $this->input->post('gender');
		$tgl			= $this->input->post('tgl');
		$alamat			= $this->input->post('alamat');
		$telepon		= $this->input->post('telepon');
		$tempatlahir	= $this->input->post('tempatlahir');

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
			'tempatlahir'	=> $tempatlahir,
			'ttl'   		=> $tgl,
			'alamat'		=> $alamat,
			'telp'  		=> $telepon,
			'unique_code'	=> $unique_kode,
			'img'			=> 'default.jpg'
		);

		$cek = $this->Peserta_model->input($data);
		redirect(base_url());
	}

	function detailcourse($id_modul){

		$where = array(
			'unique_code' => $this->session->userdata('unique_code')
		);
		$profile = $this->Peserta_model->select_where($where)->result();

		$where = array(
			'id_modul'	=> $id_modul);

		$banner = $this->Modul_model->select_where($where)->row('nama');
		$modul = $this->Modul_model->select_where($where)->result();
		$data = array(
			'profile'	=> $profile,
			'banner'	=> $banner,
			'modul'		=> $modul,
			'content'	=> 'client/pages/v_detailcourse'
		);
		$this->load->view('client/layout/wrapper',$data);
	}

	function showregister(){
		$this->load->view('client/pages/v_register');
	}

	function startcourse($id_modul){
		if($this->session->userdata('status') == 'login'){
			$where = array(
				'unique_code'	=> $this->session->userdata('unique_code'));
			$profile = $this->Peserta_model->select_where($where)->result();
			$where = array(
				'id_modul'	=> $id_modul);
			$banner = $this->Modul_model->select_where($where)->row('nama');
			$course = $this->Modul_model->selectcourse($id_modul)->result();
			$data = array(
				'content'	=> 'client/pages/v_course',
				'course'	=> $course,
				'banner'	=> $banner,
				'profile'	=> $profile
			);
			$this->load->view('client/layout/wrapper',$data);
		}else{
			$this->load->view('client/pages/v_login');
		}
	}
}

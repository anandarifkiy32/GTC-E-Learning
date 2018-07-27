<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Dashboard extends CI_Controller {

	function __construct(){
		parent::__construct();
		$this->load->model('Peserta_model');
		$this->load->helper(array('form','url','file'));
		$status = $this->session->userdata("status");
		if($status !== "login"){
			redirect(base_url());
		}
	}

	public function index()
	{
		$content = array(
			'title' => 'Dashboard',
			'content' => 'Pages/v_dashboard');
		$this->load->view('Layout/Wrapper',$content);

	}

	function coursecatalog(){
		$content = array(
			'title' 	=> 'Course Catalog',
			'content'	=> 'Pages/v_coursecatalog');
		$this->load->view('Layout/Wrapper',$content);
	}

	function logout(){
		$this->session->sess_destroy();
		redirect(base_url());
	}

	function detailcourse(){
		$content = array(
			'title'		=> 'Course Catalog',
			'content'  	=> 'Pages/v_detailcourse');
		$this->load->view('Layout/Wrapper',$content);
	}

	function course(){
		$content = array(
			'title'		=> 'Course Catalog',
			'content'  	=> 'Pages/v_course');
		$this->load->view('Layout/Wrapper',$content);
	}

	function profile(){
		$email = $this->session->userdata('email');
		echo $email;
		$where = array(
			'email' => $email
		);
		$data['profile'] = $this->Peserta_model->select_where($where)->result();
		$content = array(
			'title'		=> 'Profile',
			'content'	=> 'Pages/v_profile');
		$this->load->view('Layout/Header');
		$this->load->view('Layout/Menu',$content);
		$this->load->view('Pages/v_profile',$data);
		$this->load->view('Layout/Footer');

	}

	function editprofile($kode){
		$kode 	= $kode;
		$where 	= array(
			'unique_code' => $kode); 
		$data['profile'] = $this->Peserta_model->select_where($where)->result();

		$content = array(
			'title' => 'Profile',
			'content' => 'Pages/v_editprofile');
		$this->load->view('Layout/Header');
		$this->load->view('Layout/Menu',$content);
		$this->load->view('Pages/v_editprofile',$data);
		$this->load->view('Layout/Footer');
	}

	function editphotoprofile($kode){
		$kode 	= $kode;
		$where 	= array(
			'unique_code' => $kode); 
		$data['profile'] = $this->Peserta_model->select_where($where)->result();

		$content = array(
			'title' => 'Profile',
			'content' => 'Pages/v_editprofile');
		$this->load->view('Layout/Header');
		$this->load->view('Layout/Menu',$content);
		$this->load->view('Pages/v_editphotoprofile',$data);
		$this->load->view('Layout/Footer');
	}

	function uploadphoto(){ 
		$nama = $this->input->post('kode'); 
		$where = array( 'id_peserta' => $nama );
		$cekfoto = $this->Peserta_model->select_where($where)->result(); 
		foreach ($cekfoto as $c) {
			$hasil = $c->img;
		}
		if($hasil == ""){
			$config['upload_path']	= './assets/profile_photos/';
			$config['allowed_types'] = 'jpg|jpeg|png';
			$config['max_size'] = '2048';
			$config['max_width'] = '4048';
			$config['max_height'] = '4048';
			$config['file_name'] = $nama;
			$this->load->library('upload',$config);
			if(! $this->upload->do_upload('berkas')){

				echo "error";
			}else{
				$gbr = $this->upload->data();
				$format = str_replace('image', '',$gbr['file_type']);
				$where = array('id_peserta' => $nama);
				$data = array(
					'img' => $gbr['file_name']);
				$this->Peserta_model->insert_img($where,$data);
				echo "jadi";
			}
		}else{
			unlink('./assets/profile_photos/'.$hasil);
			$config['upload_path']	= './assets/profile_photos/';
			$config['allowed_types'] = 'jpg|jpeg|png';
			$config['max_size'] = '2048';
			$config['max_width'] = '4048';
			$config['max_height'] = '4048';
			$config['file_name'] = $nama;
			$this->load->library('upload',$config);
			if(! $this->upload->do_upload('berkas')){

				echo "error";
			}else{
				$gbr = $this->upload->data();
				$format = str_replace('image', '',$gbr['file_type']);
				$where = array('id_peserta' => $nama);
				$data = array(
					'img' => $gbr['file_name']);
				$this->Peserta_model->insert_img($where,$data);
				echo "jadi";
			}
		}
		

	}
}

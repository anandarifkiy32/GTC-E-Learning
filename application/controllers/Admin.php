<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Admin extends CI_Controller {

	function __construct(){
		parent::__construct();
		$this->load->model(array('Admin_model','Modul_model','Peserta_model','Training_model','Trainer_model','Company_model','Materi_model','Category_model'));
		$this->load->helper(array('form','url','file'));
	}

	function index()
	{
		if($this->session->userdata('status') == 'login'){
			$id_admin = array(
				'id_admin' => $this->session->userdata('id_admin')
			);
			$data = array(
				'title'		=> 'Dashboard',
				'subtitle'	=>'Dashboard',
				'profile' 	=> $this->Admin_model->select_where($id_admin)->result(),
				'content'	=> 'admin/pages/v_dashboard');
			$this->load->view('admin/layout/Wrapper',$data);
		}else{
			$this->load->view('admin/login');
		}

	}

	function login(){
		$email      = $this->input->post('email');
		$password   = $this->input->post('pass');
		$where = array(
			'email' => $email,
			'pass' => md5($password)
		);
		$cek = $this->Admin_model->select_where($where)->num_rows();
		if($cek > 0){
			$data['session'] = $this->Admin_model->select_where($where)->result();
			foreach ($data['session'] as $s) {
				$id_admin    = $s->id_admin;
			}
			$data_session = array(
				'id_admin'   => $id_admin,
				'status'        => "login"
			);
			$this->session->set_userdata($data_session);

			redirect(base_url('admin'));
		}else{
			$this->load->view('admin/login');
		}
	}

	function peserta(){
		if($this->session->userdata('status') == 'login'){
			$id_admin = array(
				'id_admin' => $this->session->userdata('id_admin'));
			$peserta = $this->Peserta_model->select()->result();
			$content = array(
				'title' 	=> 'User',
				'subtitle' 	=> 'Peserta',
				'profile'	=> $this->Admin_model->select_where($id_admin)->result(),
				'peserta' 	=> $peserta,
				'content'	=> 'admin/pages/v_peserta');
			$this->load->view('admin/layout/Wrapper',$content);
		}else{
			$this->load->view('admin/login');
		}

	}

	function show_peserta($unique_code){
		if($this->session->userdata('status') == 'login'){
			$id_admin = array(
				'id_admin'		=> $this->session->userdata('id_admin'));
			$where = array(
				'unique_code'    => $unique_code);
			$peserta = $this->Peserta_model->select_where($where)->result();
			$id_peserta = $this->Peserta_model->select_where($where)->row('id_peserta');
			$course = $this->Training_model->select_course($id_peserta)->result();
			$content = array(
				'title'       => 'User',
				'subtitle'    => 'Peserta',
				'profile'	  => $this->Admin_model->select_where($id_admin)->result(),
				'id_peserta'  => $id_peserta,
				'peserta' 	  => $peserta,
				'course'	  => $course,
				'content'       => 'admin/pages/v_showpeserta'
			);
			$this->load->view('admin/layout/wrapper',$content);
		}else{
			$this->load->view('admin/login');
		}
	}

	function delete_peserta($unique_code){
		$where = array(
			'unique_code'	=> $unique_code);
		$delete = $this->Peserta_model->delete($where);
		redirect('admin/peserta','refresh');
	}

	function trainer(){
		if($this->session->userdata('status') == 'login'){
			$id_admin = array(
				'id_admin'		=> $this->session->userdata('id_admin'));
			$trainer = $this->Trainer_model->select()->result();
			$content = array(
				'title' 	=> 'User',
				'subtitle' 	=> 'Trainer',
				'profile'	=> $this->Admin_model->select_where($id_admin)->result(),
				'trainer'	=> $trainer,
				'content'	=> 'admin/pages/v_trainer');
			$this->load->view('admin/layout/Wrapper',$content);
		}else{
			$this->load->view('admin/login');
		}
	}

	function company(){
		if($this->session->userdata('status') == 'login'){
			$id_admin = array(
				'id_admin'		=> $this->session->userdata('id_admin'));
			$company = $this->Company_model->select()->result();
			$content = array(
				'title' 	=> 'User',
				'subtitle' 	=> 'Company',
				'profile'	=> $this->Admin_model->select_where($id_admin)->result(),
				'company'	=> $company,
				'content'	=> 'admin/pages/v_company');
			$this->load->view('admin/layout/Wrapper',$content);
		}else{
			$this->load->view('admin/login');
		}
	}

	function modul(){
		if($this->session->userdata('status') == 'login'){
			$id_admin = array(
				'id_admin'	=> $this->session->userdata('id_admin'));
			$modul = $this->Modul_model->selectall()->result();
			$content = array(
				'title' 	=> 'Modul',
				'subtitle' 	=> '',
				'profile'	=> $this->Admin_model->select_where($id_admin)->result(),
				'modul' 	=> $modul,
				'content'	=> 'admin/pages/v_modul');
			$this->load->view('admin/layout/Wrapper',$content);
		}else{
			$this->load->view('admin/login');
		}
	}

	function show_modul($slug){
		if($this->session->userdata('status') == 'login'){
			$id_admin = array(
				'id_admin'	=> $this->session->userdata('id_admin'));
			$where = array(
				'slug'	=> $slug);
			$id_modul = $this->Modul_model->select_where($where)->row('id_modul');
			$modul = $this->Modul_model->select_where($where)->result();
			$where = array(
				'id_modul'	=> $id_modul);
			$sub_materi = $this->Materi_model->select_where($where)->result();
			$jumlah_materi = $this->Materi_model->select_where($where)->num_rows();
			$jumlah_peserta	= $this->Training_model->select_where($where)->num_rows();
			$category = $this->Category_model->select()->result();
			$data=array(
				'title' 		=> 'Modul',
				'subtitle'		=> '',
				'profile'		=> $this->Admin_model->select_where($id_admin)->result(),
				'modul'			=> $modul,
				'submateri'		=> $sub_materi,
				'jumlah_peserta'=> $jumlah_peserta,
				'jumlah_materi'	=> $jumlah_materi,
				'category'		=> $category,
				'content' 		=> 'admin/pages/v_showmodul');
			$this->load->view('admin/layout/wrapper',$data);
		}else{
			$this->load->view('admin/login');
		}
	}

	function delete_modul($slug){
		$where = array(
			'slug'	=> $slug);

		$delete = $this->Modul_model->delete($where);
		redirect('admin/Modul','refresh');
	}

	function tambah_materi(){
		if($this->session->userdata('status') == 'login'){
			$slug = url_title($this->input->post('judul'), 'dash', true);
			$id_modul       = $this->input->post('id');
			$judul    		= $this->input->post('judul');
			$description    = $this->input->post('description');
			$konten         = $this->input->post('konten');
			$id_admin = array(
				'id_admin' => $this->session->userdata('id_admin'));
			$profile	   = $this->Admin_model->select_where($id_admin)->result();
			$data = array(
				'id_modul'     => $id_modul,
				'judul'        => $judul,
				'description'  => $description,
				'konten'       => $konten,
				'slug'		   => $slug
			);

			$cek = $this->Materi_model->input($data);
			redirect(base_url('admin/show_modul/'.$this->uri->segment(3)));
		}else{
			$this->load->view('admin/login');
		}

	}

	function show_materi($slug){
		if($this->session->userdata('status') == 'login'){
			$where = array(
				'slug'	=> $slug);
			$materi = $this->Materi_model->select_where($where)->result();
			$id_admin = array(
				'id_admin' => $this->session->userdata('id_admin'));
			$data = array(
				'title' 	=> 'Modul',
				'subtitle'	=> '',
				'profile'	=> $this->Admin_model->select_where($id_admin)->result(),
				'materi'	=>	$materi,
				'content'	=> 'admin/pages/v_detailmateri');
			$this->load->view('admin/layout/wrapper',$data);
		}else{
			$this->load->view('admin/login');
		}
	}	

	function profile(){
		if($this->session->userdata('status') == 'login'){
			$id_admin = array(
				'id_admin' => $this->session->userdata('id_admin'));
			$content = array(
				'title' 	=> 'Profile',
				'subtitle' 	=> '',
				'profile' 	=> $this->Admin_model->select_where($id_admin)->result(),
				'content'	=> 'admin/pages/v_profile');
			$this->load->view('admin/layout/Wrapper',$content);
		}else{
			$this->load->view('admin/login');
		}
	}

	function logout(){
		$this->session->sess_destroy();
		redirect(base_url('admin'));
	}
}

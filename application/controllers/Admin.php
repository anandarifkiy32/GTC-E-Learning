<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Admin extends CI_Controller {

	function __construct(){
		parent::__construct();
<<<<<<< HEAD
		$this->load->model(array('Admin_model','Modul_model','Peserta_model','Training_model','Trainer_model','Company_model','Materi_model','Category_model','Result_Model','Jawaban_model','Test_model','Soal_model'));
=======
		$this->load->model(array('Admin_model','Modul_model','Peserta_model','Training_model','Trainer_model','Company_model','Materi_model','Category_model'));
>>>>>>> 7757c236da80c647f64a8b4fc19d07e5ae803fe3
		$this->load->helper(array('form','url','file'));
	}

	function index()
	{
<<<<<<< HEAD
		if($this->session->userdata('status') == 'loginadmin'){
=======
		if($this->session->userdata('status') == 'login'){
>>>>>>> 7757c236da80c647f64a8b4fc19d07e5ae803fe3
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
<<<<<<< HEAD
				'status'        => "loginadmin"
			);
			$this->session->set_userdata($data_session);

			redirect(base_url('admin/peserta'));
		}else{
			$this->session->set_flashdata('error', 'Email atau password salah');
			redirect('admin/login');
=======
				'status'        => "login"
			);
			$this->session->set_userdata($data_session);

			redirect(base_url('admin'));
		}else{
			$this->load->view('admin/login');
>>>>>>> 7757c236da80c647f64a8b4fc19d07e5ae803fe3
		}
	}

	function peserta(){
<<<<<<< HEAD
		if($this->session->userdata('status') == 'loginadmin'){
=======
		if($this->session->userdata('status') == 'login'){
>>>>>>> 7757c236da80c647f64a8b4fc19d07e5ae803fe3
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
<<<<<<< HEAD
		if($this->session->userdata('status') == 'loginadmin'){
=======
		if($this->session->userdata('status') == 'login'){
>>>>>>> 7757c236da80c647f64a8b4fc19d07e5ae803fe3
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
<<<<<<< HEAD

		$id_peserta = array(
			'id_peserta'	=> $this->Peserta_model->select_where($where)->row('id_peserta'));
		$id_result = array(
			'id_result'		=> $this->Result_Model->select_where($id_peserta)->row('id_result'));

		$this->Jawaban_model->delete($id_result);
		$this->Result_Model->delete($id_peserta);
		$this->Training_model->delete($id_peserta);
		$this->Peserta_model->delete($where);
		redirect('admin/peserta','refresh');
	}

	function delete_company($id_company){
		$where = array(
			'id_company'	=> $id_company);

		$delete = $this->Company_model->delete($where);
		redirect('admin/company','refresh');
	}


	function trainer(){
		if($this->session->userdata('status') == 'loginadmin'){
=======
		$delete = $this->Peserta_model->delete($where);
		redirect('admin/peserta','refresh');
	}

	function trainer(){
		if($this->session->userdata('status') == 'login'){
>>>>>>> 7757c236da80c647f64a8b4fc19d07e5ae803fe3
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
<<<<<<< HEAD
		if($this->session->userdata('status') == 'loginadmin'){
=======
		if($this->session->userdata('status') == 'login'){
>>>>>>> 7757c236da80c647f64a8b4fc19d07e5ae803fe3
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

<<<<<<< HEAD
	function course(){
		if($this->session->userdata('status') == 'loginadmin'){
=======
	function modul(){
		if($this->session->userdata('status') == 'login'){
>>>>>>> 7757c236da80c647f64a8b4fc19d07e5ae803fe3
			$id_admin = array(
				'id_admin'	=> $this->session->userdata('id_admin'));
			$modul = $this->Modul_model->selectall()->result();
			$content = array(
<<<<<<< HEAD
				'title' 	=> 'Course',
=======
				'title' 	=> 'Modul',
>>>>>>> 7757c236da80c647f64a8b4fc19d07e5ae803fe3
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
<<<<<<< HEAD
		if($this->session->userdata('status') == 'loginadmin'){
=======
		if($this->session->userdata('status') == 'login'){
>>>>>>> 7757c236da80c647f64a8b4fc19d07e5ae803fe3
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
<<<<<<< HEAD
				'title' 		=> 'Course',
=======
				'title' 		=> 'Modul',
>>>>>>> 7757c236da80c647f64a8b4fc19d07e5ae803fe3
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
<<<<<<< HEAD
		$id_modul = array('id_modul' => $this->Modul_model->select_where('slug')->row('id_modul'));
		$id_materi = array('id_materi' => $this->Materi_model->select_where($id_modul)->row('id_materi'));
		$id_test = array('id_test' => $this->Test_model->select_where($id_materi)->row('id_test'));

		$this->Soal_model->delete($id_test);
		$this->Test_model->delete($id_materi);
		$this->Materi_model->delete($id_modul);
		$this->Training_model->delete($id_modul);
		$this->Modul_model->delete($where);
		redirect('admin/modul','refresh');
	}

	

	function delete_trainer($unique_code){
		$where = array(
			'unique_code'	=> $unique_code);
		$id_trainer = array('id_trainer' => $this->Trainer_model->select_where($where)->row('id_trainer'));
		$id_modul = array('id_modul' => $this->Modul_model->select_where($id_trainer)->row('id_modul'));
		$id_materi = array('id_materi' => $this->Materi_model->select_where($id_modul)->row('id_materi'));
		$id_test = array('id_test' => $this->Test_model->select_where($id_materi)->row('id_test'));

		$this->Soal_model->delete($id_test);
		$this->Test_model->delete($id_materi);
		$this->Materi_model->delete($id_modul);
		$this->Training_model->delete($id_modul);
		$this->Modul_model->delete($id_modul);
		$this->Trainer_model->delete($where);
		redirect('admin/trainer','refresh');
	}

	function tambah_materi(){
		if($this->session->userdata('status') == 'loginadmin'){
=======

		$delete = $this->Modul_model->delete($where);
		redirect('admin/Modul','refresh');
	}

	function tambah_materi(){
		if($this->session->userdata('status') == 'login'){
>>>>>>> 7757c236da80c647f64a8b4fc19d07e5ae803fe3
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
<<<<<<< HEAD
		if($this->session->userdata('status') == 'loginadmin'){
=======
		if($this->session->userdata('status') == 'login'){
>>>>>>> 7757c236da80c647f64a8b4fc19d07e5ae803fe3
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
<<<<<<< HEAD
		if($this->session->userdata('status') == 'loginadmin'){
=======
		if($this->session->userdata('status') == 'login'){
>>>>>>> 7757c236da80c647f64a8b4fc19d07e5ae803fe3
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

<<<<<<< HEAD
	function show_trainer($unique_code){
		if ($this->session->userdata('status') == 'loginadmin') {
			$id_admin = array(
				'id_admin' => $this->session->userdata('id_admin'));
			$where = array(
				'unique_code' 	=> $unique_code);
			$id_trainer = array(
				'id_trainer' => $this->Trainer_model->select_where($where)->row('id_trainer'));
			$where2 = array(
				'id_trainer' => $this->Trainer_model->select_where($where)->row('id_trainer'));

			$content = array(
				'title' => 'Daftar Trainer',
				'subtitle' 	=> '',
				'profile' 	=> $this->Admin_model->select_where($id_admin)->result(),
				'trainer' => $this->Trainer_model->select_where($where)->result(),
				'course'  => $this->Modul_model->select_where($where2)->result(),
				'content' => 'admin/pages/v_showtrainer');
			$this->load->view('admin/Layout/Wrapper',$content);
		}else{
			$this->load->view('admin/pages/v_login');
		}
	}

=======
>>>>>>> 7757c236da80c647f64a8b4fc19d07e5ae803fe3
	function logout(){
		$this->session->sess_destroy();
		redirect(base_url('admin'));
	}
}

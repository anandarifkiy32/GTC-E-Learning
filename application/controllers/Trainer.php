<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Trainer extends CI_Controller {

	function __construct(){
		parent::__construct();
		$this->load->model(array('Trainer_model','Modul_model','Materi_model'));

		$status = $this->session->userdata("status");
		if($status !== "login2"){
			redirect(base_url('Admin'));
		}
	}

	public function index()
	{
		$where = array(
				'id_trainer' => $this->session->userdata('trainer')
			);
		
		$content = array(
			'title' => 'Dashboard',
			'course'=> $this->Modul_model->select_where($where)->result(),
			'content' => 'Admin/Trainer/Pages/v_dashboard');
		$this->load->view('Admin/Trainer/Layout/Wrapper',$content);

	}

	function coursecatalog(){
		$content = array(
			'title' 	=> 'Course Catalog',
			'content'	=> 'Admin/Trainer/Pages/v_coursecatalog');
		$this->load->view('Admin/Trainer/Layout/Wrapper',$content);
	}

	function profile(){
		$content = array(
			'title' 	=> 'Profile',
			'content'	=> 'Admin/Trainer/Pages/v_profile');
		$this->load->view('Admin/Trainer/Layout/Wrapper',$content);
	}

	function logout(){
		$this->session->sess_destroy();
		redirect(base_url('Admin'));
	}

	function detailcourse($slug){
		$where = array(
			'slug'	=> $slug);
		$id_modul = $this->Modul_model->select_where($where)->row('id_modul');
		$modul = $this->Modul_model->select_where($where)->result();
		$where = array(
			'id_modul'	=> $id_modul);
		$sub_materi = $this->Materi_model->select_where($where)->result();
		$jumlah_materi = $this->Materi_model->select_where($where)->num_rows();
		
		$data=array(
			'title' 		=> 'Profile',
			'modul'			=> $modul,
			'submateri'		=> $sub_materi,
			'jumlah_materi'	=> $jumlah_materi,
			'content' 		=> 'admin/trainer/pages/v_detailcourse');
		$this->load->view('admin/trainer/layout/wrapper',$data);
	}
}
<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Trainer extends CI_Controller {

	function __construct(){
		parent::__construct();
		$this->load->model(array('Trainer_model','Modul_model','Materi_model','Category_model'));
		$this->load->helper(array('form', 'url'));
	}

	public function index(){
		$status = $this->session->userdata('status');
		if($status !== 'login2'){
			$this->load->view('login');
		}else{
			$where = array(
				'id_trainer' => $this->session->userdata('trainer')
			);

			$content = array(
				'title' => 'Dashboard',
				'course'=> $this->Modul_model->select_where($where)->result(),
				'content' => 'Trainer/Pages/v_dashboard');
			$this->load->view('Trainer/Layout/Wrapper',$content);
		}
		

	}

	function coursecatalog(){
		$content = array(
			'title' 	=> 'Course Catalog',
			'content'	=> 'Trainer/Pages/v_coursecatalog');
		$this->load->view('Trainer/Layout/Wrapper',$content);
	}

	function profile(){
		$content = array(
			'title' 	=> 'Profile',
			'content'	=> 'Trainer/Pages/v_profile');
		$this->load->view('Trainer/Layout/Wrapper',$content);
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
		$category = $this->Category_model->select()->result();
		$data=array(
			'title' 		=> 'Profile',
			'modul'			=> $modul,
			'submateri'		=> $sub_materi,
			'jumlah_materi'	=> $jumlah_materi,
			'category'		=> $category,
			'content' 		=> 'trainer/pages/v_detailcourse');
		$this->load->view('trainer/layout/wrapper',$data);
	}

	function detailmateri($slug){
		$where = array(
			'slug' => $slug);
		$materi = $this->Materi_model->select_where($where)->result();

		$data=array(
			'title' 		=> 'Profile',
			'materi'		=> $materi,
			'content' 		=> 'trainer/pages/v_detailmateri');
		$this->load->view('trainer/layout/wrapper',$data);
	}

	function updatemateri(){

		$slug = url_title($this->input->post('judul'), 'dash', true);
		$data = array(
			'judul' => $this->input->post('judul'),
			'description'	=> $this->input->post('description'),
			'konten'		=> $this->input->post('konten'),
			'slug'			=> $slug
		);

		$where = array(
			'id_materi'		=> $this->input->post('id')
		);
		

		$this->Materi_model->update($where,$data);

		redirect(base_url('trainer/detailmateri/'.$slug));
	}

	function updatemodul(){
		$slug = url_title($this->input->post('nama'), 'dash', true);
		$data = array(
			'nama' => $this->input->post('nama'),
			'deskripsi'	=> $this->input->post('description'),
			'category'		=> $this->input->post('category'),
			'slug'			=> $slug
		);

		$where = array(
			'id_modul'		=> $this->input->post('id')
		);
		

		$this->Modul_model->update($where,$data);

		redirect(base_url('trainer/detailcourse/'.$slug));
	}


	function tambahmateri(){
		$slug = url_title($this->input->post('judul'), 'dash', true);
		$data = array(
			'judul' 		=> $this->input->post('judul'),
			'id_modul'		=> $this->input->post('id'),
			'description'	=> $this->input->post('description'),
			'konten'		=> $this->input->post('konten'),
			'slug'			=> $slug
		);

		$this->Materi_model->input($data);

		redirect(base_url('trainer/detailcourse/'.$this->uri->segment(3)));
	}

	function hapusmateri($slug){
		$where = array(
			'slug' => $slug
		);

		$this->Materi_model->delete($where);

		redirect(base_url('trainer/detailcourse/'.$this->uri->segment(4)));
	}
}
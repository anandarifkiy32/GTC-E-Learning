<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Trainer extends CI_Controller {

	function __construct(){
		parent::__construct();
		$this->load->model(array('Trainer_model','Modul_model','Materi_model','Category_model','Training_model','Quiz_model','Result_model','Jawaban_model','Soal_model'));
		$this->load->helper(array('form', 'url'));
	}

	public function index(){
		if($this->session->userdata('status') == 'logintrainer'){
			$where = array(
				'id_trainer' => $this->session->userdata('trainer')
			);

			$content = array(
				'title' => 'Dashboard',
				'course'=> $this->Modul_model->select_where($where)->result(),
				'content' => 'Trainer/Pages/v_dashboard');
			$this->load->view('Trainer/Layout/Wrapper',$content);
		}else{
			$this->load->view('trainer/pages/v_login');
		}
	}

	function login(){
		$email = $this->input->post('email');
		$password = $this->input->post('pass');
		$where = array(
			'email' => $email,
			'pass' => md5($password)
		);
		$cek = $this->Trainer_model->select_where($where)->num_rows();

		if($cek > 0){
			$data['session'] = $this->Trainer_model->select_where($where)->result();
			foreach ($data['session'] as $s) {
				$nama    = $s->nama;
				$id_trainer = $s->id_trainer;
			}

			$data_session = array(
				'nama'    => $nama,
				'trainer' => $id_trainer,
				'status'  => 'logintrainer'
			);
			$this->session->set_userdata($data_session);
			redirect(base_url('trainer'));
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
			'title' 	=> 'Dashboard',
			'content'	=> 'Trainer/Pages/v_profile');
		$this->load->view('Trainer/Layout/Wrapper',$content);
	}

	function logout(){
		$this->session->sess_destroy();
		redirect(base_url('trainer'));
	}

	function detailcourse($slug){
		$where = array(
			'slug'	=> $slug);
		$id_modul = $this->Modul_model->select_where($where)->row('id_modul');
		$modul = $this->Modul_model->select_where($where)->result();
		$where = array(
			'id_modul'	=> $id_modul);
		$sub_materi 	= $this->Materi_model->select_where($where)->result();
		$jumlah_materi 	= $this->Materi_model->select_where($where)->num_rows();
		$jumlah_peserta	= $this->Training_model->select_where($where)->num_rows();
		$data_peserta	= $this->Training_model->select_peserta($id_modul)->result();
		$category = $this->Category_model->select()->result();
		$data=array(
			'title' 		=> 'Dashboard',
			'modul'			=> $modul,
			'submateri'		=> $sub_materi,
			'jumlah_materi'	=> $jumlah_materi,
			'jumlah_peserta'=> $jumlah_peserta,
			'data_peserta'	=> $data_peserta,
			'category'		=> $category,
			'content' 		=> 'trainer/pages/v_detailcourse');
		$this->load->view('trainer/layout/wrapper',$data);
	}

	function detailmateri($slug){
		$where = array(
			'slug' => $slug);
		$materi = $this->Materi_model->select_where($where)->result();

		$data=array(
			'title' 		=> 'Dashboard',
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

	function hapusmodul($slug){
		$where = array(
			'slug' => $slug
		);

		$this->Modul_model->delete($where);

		redirect(base_url('trainer'));
	}

	function detailpeserta($code){
		$where= array(
			'training.id_modul = modul.id_modul and training.code = ' => $code);
		$id_trainer = $this->Training_model->join_modul($where)->row('id_trainer');	
		$detailpeserta = $this->Training_model->detail_peserta($code)->result();
		$id_peserta = $this->Training_model->detail_peserta($code)->row('id_peserta');
		$id_modul = $this->Training_model->detail_peserta($code)->row('id_modul');
		$where = array(
			'materi.id_modul' 	=> $id_modul,
			'result.id_peserta'	=> $id_peserta);
		$quiz = $this->Result_model->select_quiz($where)->result();
		$content = array(
			'title' 		=> 'Dashboard',
			'detailpeserta'	=> $detailpeserta,
			'id_trainer'	=> $id_trainer,
			'quiz'			=> $quiz,
			'content' 		=> 'Trainer/Pages/v_detailpeserta');
		$this->load->view('Trainer/Layout/Wrapper',$content);
	}

	function review(){
		$where = array('code' => $this->uri->segment(4));
		$id_result = $this->Result_model->select_where($where)->row('id_result');
		$where = 'result.id_result = '.$id_result.' and result.id_result = jawaban.id_result and jawaban.id_soal = soal.id_soal';
		$jawaban = $this->Result_model->join_jawaban_soal($where)->result();
		$data = array(
			'title' 	=> 'Review',
			'jawaban'	=> $jawaban,
			'content'	=> 'trainer/pages/v_review'
			);

		$this->load->view('trainer/layout/wrapper',$data);
	}

	function submitreview(){
		$where = array('code' => $this->uri->segment(4));
		$id_result = $this->Result_model->select_where($where)->row('id_result');
		$where = array('id_result' => $id_result);
		$jawaban = $this->Jawaban_model->select_where($where)->result();

		$skor = 0;
		$pembagi = 0;
		foreach ($jawaban as $j) {
			$data = array('nilai' => $this->input->post($j->id_jawaban));
			$where = array('id_jawaban' => $j->id_jawaban);
			$this->Jawaban_model->update($where,$data);
			$skor = $skor + $this->input->post($j->id_jawaban);
			$pembagi++;
		}
		$nilai = $skor / $pembagi;
		$data = array('nilai' => $nilai);
		$where = array('code' => $this->uri->segment(4));
		$this->Result_model->update($where,$data);
		
		redirect(base_url('trainer/detailpeserta/'.$this->uri->segment(3)));

	}
}
<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Company extends CI_Controller {

	function __construct(){
		parent::__construct();
		$this->load->model(array('Company_model','Trainer_model','Modul_model','Materi_model','Category_model','Training_model','Quiz_model','Result_model','Test_model','Soal_model','Jawaban_model','Peserta_Model'));
		$this->load->helper(array('form', 'url'));
	}

	public function index(){
		if($this->session->userdata('status') == 'logincompany'){
			$where = array(
				'id_company' => $this->session->userdata('id_company')
			);

			$content = array(
				'title' => 'Dashboard',
				'img' => $this->Company_model->select_where($where)->row('img'),
				'course'=> $this->Modul_model->select_where($where)->result(),
				'content' => 'company/pages/v_dashboard');
			$this->load->view('company/Layout/Wrapper',$content);
		}else{
			$this->load->view('company/pages/v_login');
		}
	}

	function login(){
		$email = $this->input->post('email');
		$password = $this->input->post('pass');
		$where = array(
			'email' => $email,
			'pass' => md5($password)
		);
		$cek = $this->Company_model->select_where($where)->num_rows();

		if($cek > 0){
			$data['session'] = $this->Company_model->select_where($where)->result();
			foreach ($data['session'] as $s) {
				$nama    = $s->nama;
				$id_company = $s->id_company;
				$unique_code = $s->unique_code;
			}

			$data_session = array(
				'nama'    => $nama,
				'id_company' => $id_company,
				'unique_code'=> $unique_code,
				'status'  => 'logincompany'
			);
			$this->session->set_userdata($data_session);
			redirect(base_url('company'));
		}
	}

	function trainer($unique_code){
		if ($this->session->userdata('status') == 'logincompany') {
			$id_company = array(
				'id_company'	=> $this->session->userdata('id_company'));
			$unique_code = array(
				'unique_code' => $unique_code);
			$id_trainer = $this->Trainer_model->select_where($unique_code)->row('id_trainer');
			$where = array(
				'id_trainer'	=> $id_trainer);
			$course = $this->Modul_model->select_where($where)->result();
			$category = $this->Category_model->select()->result();

			$content = array(
				'title' => 'Dashboard',
				'img' => $this->Company_model->select_where($id_company)->row('img'),
				'trainer'=> $this->Trainer_model->select_where($unique_code)->result(),
				'course'=> $course,
				'category' => $category,
				'content' => 'company/pages/v_trainer');
			$this->load->view('company/Layout/Wrapper',$content);
		}
		else{
			$this->load->view('trainer/pages/v_login');

		}
	}

	function detailcourse($slug){
		if($this->session->userdata('status') == 'logincompany'){
			$id_company = array(
				'id_company' => $this->session->userdata('id_company')
			);
			$where = array(
				'slug'	=> $slug);
			$id_modul = $this->Modul_model->select_where($where)->row('id_modul');
			$modul = $this->Modul_model->select_where($where)->result();
			$where = array(
				'id_modul'	=> $id_modul);
			$id_trainer = $this->Modul_model->select_where($where)->row('id_trainer');
			$where2 = array(
				'id_trainer' => $id_trainer);
			$id_company = array(
				'id_company' => $this->Modul_model->select_where($where)->row('id_company'));
			$data=array(
				'title' 		=> 'Dashboard',
				'profile'		=> $this->Company_model->select_where($id_company)->result(),
				'modul'			=> $modul,
				'namatrainer'	=> $this->Trainer_model->select_where($where2)->row('nama'),
				'submateri'		=> $this->Materi_model->select_where($where)->result(),
				'jumlah_materi'	=> $this->Materi_model->select_where($where)->num_rows(),
				'jumlah_peserta'=> $this->Training_model->select_peserta($id_modul)->num_rows(),
				'data_peserta'	=> $this->Training_model->select_peserta($id_modul)->result(),
				'company'		=> $this->Company_model->select_where($id_company)->result(),
				'category'		=> $this->Category_model->select()->result(),
				'content' 		=> 'company/pages/v_detailcourse');
			$this->load->view('company/layout/wrapper',$data);
		}else{
			$this->load->view('company/pages/v_login');
		}

	}

	function detailmateri($slug){
		if($this->session->userdata('status') == 'logincompany'){
			$id_company = array(
				'id_company' => $this->session->userdata('id_company')
			);
			$where = array(
				'slug' => $slug);
			$materi = $this->Materi_model->select_where($where)->result();
			$id_materi = $this->Materi_model->select_where($where)->row('id_materi');
			$quiz= $this->Quiz_model->quizkategori($id_materi)->result();
			// $cekquiz = $this->Quiz_model->pertanyaan($id_test)->num_rows();
			$data=array(
				'title' 		=> 'Dashboard',
				'profile'		=> $this->Company_model->select_where($id_company)->result(),
				'materi'		=> $materi,
				'quiz'			=> $quiz,
				// 'cekquiz'		=> $cekquiz,
				'content' 		=> 'company/pages/v_detailmateri');
			$this->load->view('company/layout/wrapper',$data);
		}else{
			$this->load->view('company/pages/v_login');
		}
	}

	function detailpeserta($code){
		if($this->session->userdata('status') == 'logincompany'){
		$where= array(
			'training.id_modul = modul.id_modul and training.code = ' => $code);
		$id_company = $this->Training_model->join_modul($where)->row('id_company');
		$detailpeserta = $this->Training_model->detail_peserta($code)->result();
		$id_peserta = $this->Training_model->detail_peserta($code)->row('id_peserta');
		$id_modul = $this->Training_model->detail_peserta($code)->row('id_modul');
		$where = array(
			'materi.id_modul' => $id_modul,
			'result.id_peserta' => $id_peserta);
		$quiz = $this->Result_model->select_quiz($where)->result();
		$content = array(
			'title' => 'Dashboard',
			'detailpeserta' => $detailpeserta,
			'id_company' => $id_company,
			'quiz' => $quiz,
			'content' => 'company/Pages/v_detailpeserta');
		$this->load->view('company/Layout/Wrapper',$content);
		}else{
			$this->load->view('company/pages/v_login');
		}
	}



	function logout(){
		$this->session->sess_destroy();
		redirect(base_url('company'));
	}

}

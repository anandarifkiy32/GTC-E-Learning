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
		}else{
			$this->session->set_flashdata('error', 'Email atau password salah');
			redirect('company');
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
			$this->load->view('company/pages/v_login');

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

	function detailquiz(){
		if ($this->session->userdata('status') == 'logincompany'){
			$id_trainer = array(
				'id_company' => $this->session->userdata('id_company')
			);
			$slug = array(
				'slug'	=> $this->uri->segment(3));
			$id_materi = $this->Materi_model->select_where($slug)->row('id_materi');
			$where = array(
				'id_materi'	=> $id_materi);
			$materi = $this->Materi_model->select_where($where)->row('judul');
			$modul = $this->Materi_model->select_modul($id_materi)->row('namamodul');
			$where = array(
				'code'	=> $this->uri->segment(4));
			$id_test =  $this->Test_model->select_where($where)->row('id_test');
			$quiz = $this->Quiz_model->pertanyaan($id_test)->result();
			$content = array(
				'title' 		=> 'Dashboard',
				'profile'		=> $this->Company_model->select_where($id_trainer)->result(),
				'modul'			=> $modul,
				'materi'		=> $materi,
				'quiz'			=> $quiz,
				'detail'		=> $this->Test_model->select_where($where)->result(),
				'tipesoal'		=> $this->Test_model->select_where($where)->row('tipesoal'),
				'jumlah_soal' 	=> $this->Quiz_model->pertanyaan($id_test)->num_rows(),
				'content'		=> 'company/Pages/v_detailquiz');
			$this->load->view('company/Layout/Wrapper',$content);
		}
	}

	function review(){
		if ($this->session->userdata('status') == 'logincompany'){
			$where = array('code' => $this->uri->segment(4));
			$id_result = $this->Result_model->select_where($where)->row('id_result');
			$id_test = $this->Result_model->select_where($where)->row('id_test');
			$where = array(
				'id_test' 	=> $id_test);
			$tipesoal = $this->Test_model->select_where($where)->row('tipesoal');
			$kategori = $this->Test_model->select_where($where)->row('kategori');
			$a = $this->Soal_model->select_where($where)->row('a');
			$b = $this->Soal_model->select_where($where)->row('b');
			$c = $this->Soal_model->select_where($where)->row('c');
			$where = 'result.id_result = '.$id_result.' and result.id_result = jawaban.id_result and jawaban.id_soal = soal.id_soal';
			$jawaban = $this->Result_model->join_jawaban_soal($where)->result();
			$data = array(
				'title' 	=> 'Review',
				'jawaban' 	=> $jawaban,
				'tipesoal'	=> $tipesoal,
				'kategori'	=> $kategori,
				'a'			=> $a,
				'b'			=> $b,
				'c'			=> $c,
				'content' => 'company/pages/v_review'
			);

			$this->load->view('company/layout/wrapper',$data);
		}else{
			$this->load->view('company/pages/v_login');
		}
	}

	function submitreview(){
		$where = array('code' => $this->uri->segment(4));
		$id_result = $this->Result_model->select_where($where)->row('id_result');
		$where = array('id_result' => $id_result);
		$jawaban = $this->Jawaban_model->select_where($where)->result();

		$skor = 0;
		$pembagi = 0;
		foreach ($jawaban as $j) {
			$data = array('nilaicompany' => $this->input->post($j->id_jawaban));
			$where = array('id_jawaban' => $j->id_jawaban);
			$this->Jawaban_model->update($where,$data);
			$skor = $skor + $this->input->post($j->id_jawaban);
			$pembagi++;
		}
		$nilai = $skor / $pembagi;
		$data = array('nilaicompany' => $nilai);
		$where = array('code' => $this->uri->segment(4));
		$this->Result_model->update($where,$data);

		redirect(base_url('company/detailpeserta/'.$this->uri->segment(3)));

	}

	function daftartrainer(){
		if ($this->session->userdata('status') == 'logincompany'){
			$id_company = array(
				'id_company'	=> $this->session->userdata('id_company'));
			$where = array(
				'id_trainer'	=> $this->Modul_model->select_where($id_company)->row('id_trainer'));

			$content = array(
				'title' => 'Daftar Trainer',
				'trainer' => $this->Trainer_model->select_where($where)->result(),
				'content' => 'company/pages/v_daftartrainer');
			$this->load->view('company/Layout/Wrapper',$content);
		}else{
			$this->load->view('company/pages/v_login');
		}
	}

	function detailtrainer($unique_code){
		if ($this->session->userdata('status') == 'logincompany') {
			$where = array(
				'unique_code' 	=> $unique_code);
			$id_trainer = array(
				'id_trainer' => $this->Trainer_model->select_where($where)->row('id_trainer'));
			$id_company = array(
				'id_trainer' => $this->Trainer_model->select_where($where)->row('id_trainer'),
				'id_company'	=> $this->session->userdata('id_company'));

			$content = array(
				'title' => 'Daftar Trainer',
				'trainer' => $this->Trainer_model->select_where($where)->result(),
				'course'  => $this->Modul_model->select_where($id_company)->result(),
				'content' => 'company/pages/v_detailtrainer');
			$this->load->view('company/Layout/Wrapper',$content);
		}else{
			$this->load->view('company/pages/v_login');
		}
	}

	function profile(){
		if ($this->session->userdata('status') == 'logincompany'){
			$id_company = array(
				'id_company'	=> $this->session->userdata('id_company'));
			$content = array(
				'title'		=> 'Profile',
				'profile'	=> $this->Company_model->select_where($id_company)->result(),
				'content'	=> 'company/pages/v_profile');
			$this->load->view('company/layout/wrapper',$content);
		}else{
			$this->load->view('company/pages/v_login');
		}
	}

	function updateprofile(){
		if ($this->session->userdata('status') == 'logincompany') {
			$id_company = array(
				'id_company'	=> $this->session->userdata('id_company'));
			$data = array(
				'nama'	=> $this->input->post('nama'),
				'alamat'=> $this->input->post('alamat'),
				'telp'  => $this->input->post('telp'));
			$this->Company_model->update($id_company,$data);
			redirect(base_url('company/profile'));
		}
	}

	function updatepassword(){
		if ($this->session->userdata('status') == 'logincompany') {
			$id_company = array(
				'id_company'	=> $this->session->userdata('id_company'));
			$data = array(
				'pass'	=> md5($this->input->post('pass')));
			$this->Company_model->update($id_company,$data);
			redirect(base_url('company/profile'));
		}
	}

	function logout(){
		$this->session->sess_destroy();
		redirect(base_url('company'));
	}

}

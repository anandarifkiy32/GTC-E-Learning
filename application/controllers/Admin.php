<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Admin extends CI_Controller {

	function __construct(){
		parent::__construct();
		$this->load->model(array('Admin_model','Modul_model','Peserta_model','Training_model','Trainer_model','Company_model','Materi_model','Category_model','Result_model','Jawaban_model','Test_model','Soal_model','Psertifikasi_model','Sertifikasi_model','Quiz_model'));
		$this->load->helper(array('form','url','file'));
	}

	function index()
	{
		if($this->session->userdata('status') == 'loginadmin'){
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
				'status'        => "loginadmin"
			);
			$this->session->set_userdata($data_session);

			redirect(base_url('admin/peserta'));
		}else{
			$this->session->set_flashdata('error', 'Email atau password salah');
			redirect('admin/login');
		}
	}

	function peserta(){
		if($this->session->userdata('status') == 'loginadmin'){
			$id_admin = array(
				'id_admin' => $this->session->userdata('id_admin'));
			$peserta = $this->Peserta_model->select()->result();
			$content = array(
				'title' 		=> 'User',
				'subtitle' 		=> 'Peserta',
				'profile'		=> $this->Admin_model->select_where($id_admin)->result(),
				'peserta' 		=> $peserta,
				// 'psertifikasi'	=> $this->Psertifikasi_model->select_peserta()->result(),
				'content'		=> 'admin/pages/v_peserta');
			$this->load->view('admin/layout/Wrapper',$content);
		}else{
			$this->load->view('admin/login');
		}

	}

	function show_peserta($unique_code){
		if($this->session->userdata('status') == 'loginadmin'){
			$id_admin = array(
				'id_admin'		=> $this->session->userdata('id_admin'));
			$where = array(
				'unique_code'    => $unique_code);
			$peserta = $this->Peserta_model->select_where($where)->result();
			$id_peserta = $this->Peserta_model->select_where($where)->row('id_peserta');
			$where2 = array('id_peserta' => $this->Peserta_model->select_where($where)->row('id_peserta'));
			$id_sertifikasi = array('id_sertifikasi' => $this->Psertifikasi_model->select_where($where2)->row('id_sertifikasi'));
			$id_modul = array('id_modul' => $this->Sertifikasi_model->select_where($id_sertifikasi)->row('id_modul'));
			$course = $this->Training_model->select_course($id_peserta)->result();
			$content = array(
				'title'       => 'User',
				'subtitle'    => 'Peserta',
				'profile'	  => $this->Admin_model->select_where($id_admin)->result(),
				'id_peserta'  => $id_peserta,
				'peserta' 	  => $peserta,
				'sertifikasi' => $this->Modul_model->select_where($id_modul)->row('nama'),
				'slugmodul'	  => $this->Modul_model->select_where($id_modul)->row('slug'),
				'course'	  => $course,
				'content'     => 'admin/pages/v_showpeserta'
			);
			$this->load->view('admin/layout/wrapper',$content);
		}else{
			$this->load->view('admin/login');
		}
	}

	function delete_peserta($unique_code){
		$where = array(
			'unique_code'	=> $unique_code);

		$id_peserta = array(
			'id_peserta'	=> $this->Peserta_model->select_where($where)->row('id_peserta'));
		$id_result = array(
			'id_result'		=> $this->Result_model->select_where($id_peserta)->row('id_result'));

		$this->Jawaban_model->delete($id_result);
		$this->Result_model->delete($id_peserta);
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
		if($this->session->userdata('status') == 'loginadmin'){
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

	function course(){
		if($this->session->userdata('status') == 'loginadmin'){
			$id_admin = array(
				'id_admin'	=> $this->session->userdata('id_admin'));
			$modul = $this->Modul_model->selectall()->result();
			$content = array(
				'title' 	=> 'Course',
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
		if($this->session->userdata('status') == 'loginadmin'){
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
				'title' 		=> 'Course',
				'subtitle'		=> '',
				'profile'		=> $this->Admin_model->select_where($id_admin)->result(),
				'modul'			=> $modul,
				'submateri'		=> $sub_materi,
				'jumlah_peserta'=> $jumlah_peserta,
				'jumlah_materi'	=> $jumlah_materi,
				'category'		=> $category,
				'sertifikasi'	=> $this->Sertifikasi_model->select_where($where)->result(),
				'cek'			=> $this->Sertifikasi_model->select_where($where)->num_rows(),
				'content' 		=> 'admin/pages/v_showmodul');
			$this->load->view('admin/layout/wrapper',$data);
		}else{
			$this->load->view('admin/login');
		}
	}

	function delete_modul($slug){
		$where = array(
			'slug'	=> $slug);
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
		if($this->session->userdata('status') == 'loginadmin'){
			$where = array(
				'slug'	=> $slug);
			$materi = $this->Materi_model->select_where($where)->result();
			$id_materi = $this->Materi_model->select_where($where)->row('id_materi');
			$id_modul = array(
				'id_modul' => $this->Materi_model->select_where($where)->row('id_modul'));
			$quiz= $this->Quiz_model->quizkategori($id_materi)->result();
			$id_admin = array(
				'id_admin' => $this->session->userdata('id_admin'));
			$data = array(
				'title' 	=> 'Course',
				'subtitle'	=> '',
				'profile'	=> $this->Admin_model->select_where($id_admin)->result(),
				'materi'	=>	$materi,
				'quiz'			=> $quiz,
				'slugmodul'		=> $this->Modul_model->select_where($id_modul)->row('slug'),
				'content'	=> 'admin/pages/v_detailmateri');
			$this->load->view('admin/layout/wrapper',$data);
		}else{
			$this->load->view('admin/login');
		}
	}

	function delete_materi($slug){
		$where = array(
			'slug' => $slug
		);
		$id_materi = $this->Materi_model->select_where($where)->row('id_materi');
		$id_modul = array(
			'id_modul'	=> $this->Materi_model->select_where($where)->row('id_modul'));
		$where2 = array(
			'id_materi'	=> $id_materi);
		$id_test =  $this->Test_model->select_where($where2)->row('id_test');
		$where3 = array(
			'id_test'	=> $id_test);
		$id_result = $this->Result_model->select_where($where3)->row('id_result');
		$where4 = array(
			'id_result'	=> $id_result);
		$this->Jawaban_model->delete($where4);
		$this->Result_model->delete($where3);
		$this->Training_model->delete($id_modul);
		$this->Soal_model->delete($where3);
		$this->Test_model->delete($where2);
		$this->Materi_model->delete($where);

		redirect(base_url('admin/show_modul/'.$this->uri->segment(4)));
	}

	function hapuspdf(){

		$slug = $this->uri->segment(3);
		$where = array(
			'slug'	=> $slug);
		$pdf = $this->Materi_model->select_where($where)->row('pdf');
		$data = array(
			'pdf' => ''
		);

		$where = array(
			'slug'		=> $slug
		);
		

		unlink('./assets/modul_pdf/'.$pdf);
		$this->Materi_model->update($where,$data);

		redirect(base_url('admin/detailmateri/'.$slug));
	}

	function hapusppt(){

		$slug = $this->uri->segment(3);
		$where = array(
			'slug'	=> $slug);
		$ppt = $this->Materi_model->select_where($where)->row('ppt');
		$data = array(
			'ppt' => ''
		);

		$where = array(
			'slug'		=> $slug
		);
		

		unlink('./assets/modul_pdf/ppt/'.$ppt);
		$this->Materi_model->update($where,$data);

		redirect(base_url('admin/detailmateri/'.$slug));
	}

	function hapuskonten(){

		$slug = $this->uri->segment(3);
		$data = array(
			'konten' => ''
		);

		$where = array(
			'slug'		=> $slug
		);
		

		$this->Materi_model->update($where,$data);

		redirect(base_url('admin/detailmateri/'.$slug));
	}

	function hapusquiz($code){
		if ($this->session->userdata('status') == 'loginadmin'){
			$code = array(
				'code'	=> $this->uri->segment(4));
			$where = array(
				'id_test'	=> $this->Test_model->select_where($code)->row('id_test'));
			$id_soal = array('id_soal' => $this->Soal_model->select_where($where)->row('id_soal'));

			$this->Jawaban_model->delete($id_soal);
			$this->Result_model->delete($where);
			$this->Soal_model->delete($where);
			$this->Test_model->delete($where);
			redirect(base_url('admin/show_materi/'.$this->uri->segment(3)));

		}else{
			$this->load->view('admin/pages/v_login');
		}
	}

	function show_quiz(){
		if ($this->session->userdata('status') == 'loginadmin'){
			$id_admin = array(
				'id_admin' => $this->session->userdata('id_admin')
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
				'subtitle'		=> '',
				'profile'		=> $this->Admin_model->select_where($id_admin)->result(),
				'modul'			=> $modul,
				'materi'		=> $materi,
				'quiz'			=> $quiz,
				'detail'		=> $this->Test_model->select_where($where)->result(),
				'tipesoal'		=> $this->Test_model->select_where($where)->row('tipesoal'),
				'jumlah_soal' 	=> $this->Quiz_model->pertanyaan($id_test)->num_rows(),
				'content'		=> 'admin/Pages/v_showquiz');
			$this->load->view('admin/Layout/Wrapper',$content);
		}
	}

	function hapussoal($slug,$id_test,$id_soal){
		if($this->session->userdata('status') == 'loginadmin'){
			$where = array(
				'id_soal' => $id_soal
			);
			// $id_test = $this->Soal_model->select_where($where)->row('id_test');
			// $where2 = array(
			// 	'id_test'	=> $id_test);
			// $cek = $this->Soal_model->select_where($where2)->num_rows();
			// if ($cek > 1) {
			$this->Jawaban_model->delete($where);
			$this->Soal_model->delete($where);
			redirect(base_url('admin/show_quiz/'.$this->uri->segment(3).'/'.$this->uri->segment(4)));
			// }else{
			// 	$this->Soal_model->delete($where);
			// 	$this->Test_model->delete($where2);
			// 	redirect(base_url('trainer/detailmateri/'.$this->uri->segment(3)));	
			// }
		}
		else{
			$this->load->view('admin/pages/v_login');
		}
	}

	function updatemodul(){
		$slug = url_title($this->input->post('nama'), 'dash', true);
		$data = array(
			'nama' => $this->input->post('nama'),
			'deskripsi'	=> $this->input->post('description'),
			'tugas'		=> $this->input->post('tugas'),
			'syarat'		=> $this->input->post('syarat'),
			'karir'		=> $this->input->post('karir'),
			'category'		=> $this->input->post('category'),
			'slug'			=> $slug
		);

		$where = array(
			'id_modul'		=> $this->input->post('id')
		);
		

		$this->Modul_model->update($where,$data);

		redirect(base_url('admin/show_modul/'.$slug));
	}

	function hapusmodul($slug){
		$where = array(
			'slug' => $slug
		);

		$id_modul1 = $this->Modul_model->select_where($where)->row('id_modul');
		$id_modul = array(
			'id_modul'	=> $id_modul1);
		$where = array(
			'slug' => $slug
		);
		$id_materi = $this->Materi_model->select_where($id_modul)->row('id_materi');
		$where2 = array(
			'id_materi'	=> $id_materi);
		$id_test =  $this->Test_model->select_where($where2)->row('id_test');
		$where3 = array(
			'id_test'	=> $id_test);
		$id_result = $this->Result_model->select_where($where3)->row('id_result');
		$where4 = array(
			'id_result'	=> $id_result);

		$this->Jawaban_model->delete($where4);
		$this->Result_model->delete($where3);
		$this->Training_model->delete($id_modul);
		$this->Soal_model->delete($where3);
		$this->Test_model->delete($where3);
		$this->Materi_model->delete($id_modul);
		$this->Modul_model->delete($where);
		redirect(base_url('admin/course'));
	}

	function hapussertifikasi($slug){
		$id_modul = array(
			'id_modul' => $this->Modul_model->select_where($slug)->row('id_modul'));
		$id_sertifikasi = array(
			'id_sertifikasi' => $this->Sertifikasi_model->select_where($id_modul)->row('id_sertifikasi'));
		$this->Sertifikasi_model->delete($where);

		redirect(base_url('admin/show_modul/'.$this->uri->segment(3)));
	}

	function profile(){
		if($this->session->userdata('status') == 'loginadmin'){
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
				'title' => 'User',
				'subtitle' 	=> 'Trainer',
				'profile' 	=> $this->Admin_model->select_where($id_admin)->result(),
				'trainer' => $this->Trainer_model->select_where($where)->result(),
				'course'  => $this->Modul_model->select_where($where2)->result(),
				'content' => 'admin/pages/v_showtrainer');
			$this->load->view('admin/Layout/Wrapper',$content);
		}else{
			$this->load->view('admin/pages/v_login');
		}
	}

	function logout(){
		$this->session->sess_destroy();
		redirect(base_url('admin'));
	}
}

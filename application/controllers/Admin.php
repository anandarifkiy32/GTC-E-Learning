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
				'content'	=> 'Admin/Pages/v_dashboard');
			$this->load->view('Admin/Layout/Wrapper',$data);
		}else{
			$this->load->view('Admin/login');
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

			redirect(base_url('admin'));
		}else{
			$this->session->set_flashdata('error', 'Email atau password salah');
			redirect('admin');
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
				'content'		=> 'Admin/Pages/v_peserta');
			$this->load->view('Admin/Layout/Wrapper',$content);
		}else{
			$this->load->view('Admin/login');
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
				'content'     => 'Admin/Pages/v_showpeserta'
			);
			$this->load->view('Admin/Layout/Wrapper',$content);
		}else{
			$this->load->view('Admin/login');
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
				'content'	=> 'Admin/Pages/v_trainer');
			$this->load->view('Admin/Layout/Wrapper',$content);
		}else{
			$this->load->view('Admin/login');
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
				'content'	=> 'Admin/Pages/v_company');
			$this->load->view('Admin/Layout/Wrapper',$content);
		}else{
			$this->load->view('Admin/login');
		}
	}

	function course(){
		if($this->session->userdata('status') == 'loginadmin'){
			$id_admin = array(
				'id_admin'	=> $this->session->userdata('id_admin'));
			$modul = $this->Modul_model->selectall()->result();
			$company = $this->Company_model->select();
			$content = array(
				'title' 	=> 'Course',
				'subtitle' 	=> '',
				'company'	=> $company,
				'profile'	=> $this->Admin_model->select_where($id_admin)->result(),
				'modul' 	=> $modul,
				'content'	=> 'Admin/Pages/v_modul');
			$this->load->view('Admin/Layout/Wrapper',$content);
		}else{
			$this->load->view('Admin/login');
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
			$id_sertifikasi = array(
				'id_sertifikasi' => $this->Sertifikasi_model->select_where($where)->row('id_sertifikasi'));
			$id_peserta = array(
				'id_peserta' => $this->Psertifikasi_model->select_where($id_sertifikasi)->row('id_peserta'));

			$category = $this->Category_model->select()->result();
			$data=array(
				'title' 		=> 'Course',
				'subtitle'		=> '',
				'profile'		=> $this->Admin_model->select_where($id_admin)->result(),
				'modul'			=> $modul,
				'submateri'		=> $sub_materi,
				'jumlah_peserta'=> $jumlah_peserta,
				'jumlah_materi'	=> $jumlah_materi,
				'data_peserta'	=> $this->Training_model->select_peserta($id_modul)->result(),
				'category'		=> $category,
				'psertifikasi'	=> $this->Peserta_model->select_where($id_peserta)->result(),
				'sertifikasi'	=> $this->Sertifikasi_model->select_where($where)->result(),
				'cek'			=> $this->Sertifikasi_model->select_where($where)->num_rows(),
				'content' 		=> 'Admin/Pages/v_showmodul');
			$this->load->view('Admin/Layout/Wrapper',$data);
		}else{
			$this->load->view('Admin/login');
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
			$this->load->view('Admin/login');
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
				'content'	=> 'Admin/Pages/v_detailmateri');
			$this->load->view('Admin/Layout/Wrapper',$data);
		}else{
			$this->load->view('Admin/login');
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
			$this->load->view('Admin/Pages/v_login');
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
				'content'		=> 'Admin/Pages/v_showquiz');
			$this->load->view('Admin/Layout/Wrapper',$content);
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
			$this->load->view('Admin/Pages/v_login');
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
				'content'	=> 'Admin/Pages/v_profile');
			$this->load->view('Admin/Layout/Wrapper',$content);
		}else{
			$this->load->view('Admin/login');
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
				'content' => 'Admin/Pages/v_showtrainer');
			$this->load->view('Admin/Layout/Wrapper',$content);
		}else{
			$this->load->view('Admin/Pages/v_login');
		}
	}

	function logout(){
		$this->session->sess_destroy();
		redirect(base_url('admin'));
	}

	function registertrainer(){
		$email 			= $this->input->post('email');
		$namalengkap	= $this->input->post('nama');

		$where = array('email' => $email);
		$cekemail = $this->Trainer_model->select_where($where)->num_rows();

		if($cekemail == 1){
			$this->session->set_flashdata('daftartrainer',TRUE);
			redirect(base_url('admin/trainer'));

		}

		$length = 150;
		$characters = '0123456789ABCDEFGHJKLMNOPQRSTUVWXYZ';
		$charactersLength = strlen($characters);
		$unique_kode = '';
		$pass = '';

		for ($i = 0; $i < 8; $i++) {
			$pass .= $characters[rand(0, $charactersLength - 1)];
		}

		for ($i = 0; $i < $length; $i++) {
			$unique_kode .= $characters[rand(0, $charactersLength - 1)];
		}

		$config['protocol'] = 'smtp';
		$config['smtp_host'] = 'smtp.globaltopcareer.com';
		$config['smtp_port'] = 587;
		$config['mailtype'] = 'html';
		$config['smtp_user'] = 'edusite@globaltopcareer.com';
		$config['smtp_pass'] = 'GlobalTop12345';

            // Load email library and passing configured values to email library 
		$this->load->library('email', $config);
		$this->email->set_newline("\r\n");

            // Sender email address
		$this->email->from('edusite@globaltopcareer.com', 'GTC EduSite');
            // Receiver email address
		$this->email->to($email);
            // Subject of email
		$this->email->subject('Verification GTC EduSite');
            // Message in email
		$message = '<html>
		<link href="https://fonts.googleapis.com/css?family=Lato:700%7CMontserrat:400,600" rel="stylesheet">
		<body style="font-family:"Montserrat", sans-serif;">
		<center>
		<div style="border: 1px solid black;padding: 20px;border-radius: 10px">
		<h3>GTC EduSite</h3>
		<p>Anda telah didaftarkan sebagai trainer di GTC EduSite. Silahkan login dengan akun.</p>
		<p>Email : <b>'.$email.'</b></p>
		<p>Password : <b>'.$pass.'<b></p>
		<a href='.base_url().'trainer/><button style="border:none;padding:12px 20px 12px 20px; background-color: green;color: white">Login</button></a>
		</div>
		</center>
		</body>
		</html>';
		$this->email->message($message);

		if ($this->email->send()) {
			$data = array(
				'email' 		=> $email,
				'pass'			=> md5($pass),
				'nama'  		=> $namalengkap,
				'unique_code'	=> $unique_kode,
				'status'		=> '1',
				'img'			=> 'default.jpg'
			);
			$this->Trainer_model->input($data);
			redirect(base_url('admin/trainer'));
		} else {
			$data['alert'] ='Gagal';
		}
		
	}

	function registercompany(){
		$email 			= $this->input->post('email');
		$namalengkap	= $this->input->post('nama');

		$where = array('email' => $email);
		$cekemail = $this->Company_model->select_where($where)->num_rows();

		if($cekemail == 1){
			$this->session->set_flashdata('daftarcompany',TRUE);
			redirect(base_url('admin/company'));
		}

		$length = 150;
		$characters = '0123456789ABCDEFGHJKLMNOPQRSTUVWXYZ';
		$charactersLength = strlen($characters);
		$unique_kode = '';
		$pass = '';

		for ($i = 0; $i < 8; $i++) {
			$pass .= $characters[rand(0, $charactersLength - 1)];
		}

		for ($i = 0; $i < $length; $i++) {
			$unique_kode .= $characters[rand(0, $charactersLength - 1)];
		}

		$config['protocol'] = 'smtp';
		$config['smtp_host'] = 'smtp.globaltopcareer.com';
		$config['smtp_port'] = 587;
		$config['mailtype'] = 'html';
		$config['smtp_user'] = 'edusite@globaltopcareer.com';
		$config['smtp_pass'] = 'GlobalTop12345';

            // Load email library and passing configured values to email library 
		$this->load->library('email', $config);
		$this->email->set_newline("\r\n");

            // Sender email address
		$this->email->from('edusite@globaltopcareer.com', 'GTC EduSite');
            // Receiver email address
		$this->email->to($email);
            // Subject of email
		$this->email->subject('Verification GTC EduSite');
            // Message in email
		$message = '<html>
		<link href="https://fonts.googleapis.com/css?family=Lato:700%7CMontserrat:400,600" rel="stylesheet">
		<body style="font-family:"Montserrat", sans-serif;">
		<center>
		<div style="border: 1px solid black;padding: 20px;border-radius: 10px">
		<h3>GTC EduSite</h3>
		<p>Anda telah didaftarkan sebagai company di GTC EduSite. Silahkan login dengan akun.</p>
		<p>Email : <b>'.$email.'</b></p>
		<p>Password : <b>'.$pass.'<b></p>
		<a href='.base_url().'company/><button style="border:none;padding:12px 20px 12px 20px; background-color: green;color: white">Login</button></a>
		</div>
		</center>
		</body>
		</html>';
		$this->email->message($message);

		if ($this->email->send()) {
			$data = array(
				'email' 		=> $email,
				'pass'			=> md5($pass),
				'nama'  		=> $namalengkap,
				'img'			=> 'default.jpg'
			);
			$this->Company_model->input($data);
			redirect(base_url('admin/company'));
		} else {
			$data['alert'] ='Gagal';
		}
		
	}

	function courseapproval(){
		$id_admin = array(
			'id_admin'		=> $this->session->userdata('id_admin'));

		$where = array('modul.status' => 0);
		$course= $this->Modul_model->select_course_approval($where);


		$content = array(
			'title' => 'Dashboard',
			'subtitle' 	=> 'Trainer',
			'profile'	=> $this->Admin_model->select_where($id_admin)->result(),
			'course'  => $course,
			'content' => 'Admin/Pages/v_courseapproval');
		$this->load->view('Admin/Layout/Wrapper',$content);
	}

	function approve($slug){
		$where = array('slug' => $slug);
		$modul = $this->Modul_model->select_where($where);
		$namamodul  = $modul->row('nama');
		$id_trainer = $modul->row('id_trainer');
		$emailtrainer = $this->Trainer_model->select_where(array('id_trainer' => $id_trainer))->row('email');

		$data = array('status' => 1);
		$this->Modul_model->update($where,$data);

		$config['protocol'] = 'smtp';
		$config['smtp_host'] = 'smtp.globaltopcareer.com';
		$config['smtp_port'] = 587;
		$config['mailtype'] = 'html';
		$config['smtp_user'] = 'edusite@globaltopcareer.com';
		$config['smtp_pass'] = 'GlobalTop12345';

		$this->load->library('email', $config);
		$this->email->set_newline("\r\n");
            // Sender email address
		$this->email->from('edusite@globaltopcareer.com', 'GTC EduSite');
            // Receiver email address
		$this->email->to($emailtrainer);
            // Subject of email
		$this->email->subject('Quiz Approval GTC EduSite');
            // Message in email
		$message = '<html>
		<link href="https://fonts.googleapis.com/css?family=Lato:700%7CMontserrat:400,600" rel="stylesheet">
		<body style="font-family:"Montserrat", sans-serif;">
		<center>
		<div style="border: 1px solid black;padding: 20px;border-radius: 10px">
		<h3>GTC EduSite</h3>
		<p>Selamat, course anda <b>'.$namamodul.'</b>, telah disetujui oleh Admin.</p>
		<a href='.base_url().'trainer/detailcourse/'.$slug.'><button style="border:none;padding:12px 20px 12px 20px; background-color: green;color: white">Lihat</button></a>
		</div>
		</center>
		</body>
		</html>';
		$this->email->message($message);

		$this->email->send();


		redirect(base_url('admin/show_modul/'.$slug));
	}

	function updatecompany(){
		$company = $this->input->post('company');
		$modul = $this->input->post('modul');

		$data = array('id_company' => $company);
		$where= array('slug' => $modul);

		$this->Modul_model->update($where,$data);

		$company = $this->Company_model->select_where($data);
		$namamodul = $this->Modul_model->select_where($where)->row('nama');

		$config['protocol'] = 'smtp';
		$config['smtp_host'] = 'smtp.globaltopcareer.com';
		$config['smtp_port'] = 587;
		$config['mailtype'] = 'html';
		$config['smtp_user'] = 'edusite@globaltopcareer.com';
		$config['smtp_pass'] = 'GlobalTop12345';

		$this->load->library('email', $config);
		$this->email->set_newline("\r\n");
            // Sender email address
		$this->email->from('edusite@globaltopcareer.com', 'GTC EduSite');
            // Receiver email address
		$this->email->to($company->row('email'));
            // Subject of email
		$this->email->subject('GTC EduSite Course Information');
            // Message in email
		$message = '<html>
		<link href="https://fonts.googleapis.com/css?family=Lato:700%7CMontserrat:400,600" rel="stylesheet">
		<body style="font-family:"Montserrat", sans-serif;">
		<center>
		<div style="border: 1px solid black;padding: 20px;border-radius: 10px">
		<h3>GTC EduSite</h3>
		<p>Anda telah ditambahkan pada course <b>'.$namamodul.'</b>.</p>
		<a href='.base_url().'company/detailcourse/'.$modul.'><button style="border:none;padding:12px 20px 12px 20px; background-color: green;color: white">Lihat</button></a>
		</div>
		</center>
		</body>
		</html>';
		$this->email->message($message);

		$this->email->send();

		redirect(base_url('admin/course'));
	}

	function payment(){
		$id_admin = array(
			'id_admin'	=> $this->session->userdata('id_admin'));

		$payment= $this->Training_model->select_payment();
		$content = array(
			'title' => 'Dashboard',
			'subtitle' 	=> '',
			'profile'	=> $this->Admin_model->select_where($id_admin)->result(),
			'payment'  => $payment,
			'content' => 'Admin/Pages/v_payment');
		$this->load->view('Admin/Layout/Wrapper',$content);
	}

	function detailpayment($code){
		$id_admin = array(
			'id_admin'	=> $this->session->userdata('id_admin'));
		$where = array('code' => $code);
		$training = $this->Training_model->select_where($where);
		$id_peserta = $training->row('id_peserta');
		$where = array('id_peserta' => $id_peserta);
		$detailpeserta = $this->Peserta_model->select_where($where);
		$where = array('code' => $code);

		$payment= $this->Training_model->detail_payment($where);
		$content = array(
			'title' => 'Dashboard',
			'subtitle' 	=> '',
			'detailpeserta' => $detailpeserta,
			'profile'	=> $this->Admin_model->select_where($id_admin)->result(),
			'payment'  => $payment,
			'content' => 'Admin/Pages/v_detailpayment');
		$this->load->view('Admin/Layout/Wrapper',$content);
	}


	function verification($code){
		$where = array('code' => $code);
		$data = array('status' => 1);
		$this->Training_model->update($where,$data);
		redirect(base_url('admin/payment'));
	}

	function detailpeserta($code){
		if ($this->session->userdata('id_admin') != FALSE){
			$id_admin = array(
				'id_admin'	=> $this->session->userdata('id_admin'));
			$profile = $this->Admin_model->select_where($id_admin)->result();
			$foto = $this->Admin_model->select_where($id_admin)->row('img');

			$where= array(
				'training.id_modul = modul.id_modul and training.code = ' => $code);
			$id_trainer = $this->Training_model->join_modul($where)->row('id_trainer');
			$detailpeserta = $this->Training_model->detail_peserta($code)->result();
			$id_peserta = $this->Training_model->detail_peserta($code)->row('id_peserta');
			$id_modul = $this->Training_model->detail_peserta($code)->row('id_modul');
			$where = array(
				'materi.id_modul' => $id_modul,
				'result.id_peserta' => $id_peserta);
			$quiz = $this->Result_model->select_quiz($where)->result();
			$where = array(
				'id_modul' => $this->Training_model->detail_peserta($code)->row('id_modul'));
			$content = array(
				'title' => 'Dashboard',
				'subtitle' => '',
				'profile'		=> $profile,
				'foto'		=> $foto,
				'detailpeserta' => $detailpeserta,
				'quiz' => $quiz,
				'slugmodul' => $this->Modul_model->select_where($where)->row('slug'),
				'content' => 'Admin/Pages/v_detailpeserta');
			$this->load->view('Admin/Layout/Wrapper',$content);
		}else{
			$this->load->view('Admin/Pages/v_login');
		}
	}

	function detailpsertifikasi($unique_code,$slug){
		if ($this->session->userdata('id_admin') != FALSE){
			$id_admin = array(
				'id_admin'	=> $this->session->userdata('id_admin'));
			$profile = $this->Admin_model->select_where($id_admin)->result();

			// $where= array(
			// 	'training.id_modul = modul.id_modul and training.code = ' => $code);
			// $id_trainer = $this->Training_model->join_modul($where)->row('id_trainer');
			$code = array('unique_code' => $unique_code);
			$detailpeserta = $this->Peserta_model->select_where($code)->result();
			// $id_peserta = $this->Peserta_model->select_where($code)->row('id_peserta');
			// $id_modul = $this->Training_model->detail_peserta($code)->row('id_modul');
			// $where = array(
			// 	'materi.id_modul' => $id_modul,
			// 	'result.id_peserta' => $id_peserta);
			// $quiz = $this->Result_model->select_quiz($where)->result();
			$content = array(
				'title' => 'Dashboard',
				'profile'		=> $profile,
				'subtitle'	=> '',
				'detailpeserta' => $detailpeserta,
				'slug'			=> $slug,
				// 'id_trainer' => $id_trainer,
				// 'quiz' => $quiz,
				'content' => 'Admin/Pages/v_detailpsertifikasi');
			$this->load->view('Admin/Layout/Wrapper',$content);
		}else{
			$this->load->view('Admin/Pages/v_login');
		}
	}

	function certification(){
		if ($this->session->userdata('id_admin') != FALSE){
			$id_admin = array(
				'id_admin'	=> $this->session->userdata('id_admin'));

			$certification= $this->Psertifikasi_model->certification();
			$content = array(
				'title' => 'Dashboard',
				'subtitle' 	=> '',
				'profile'	=> $this->Admin_model->select_where($id_admin)->result(),
				'certification'	=> $certification,
				'content' => 'Admin/Pages/v_certification');
			$this->load->view('Admin/Layout/Wrapper',$content);
		}else{
			$this->load->view('Admin/Pages/v_login');
		}
	}

	function detailsertifikasi($id_sertifikasi){
		if ($this->session->userdata('id_admin') != FALSE){
			$id_admin = array(
				'id_admin'	=> $this->session->userdata('id_admin'));
			$profile = $this->Admin_model->select_where($id_admin)->result();

			$where = array('id_psertifikasi' => $id_sertifikasi);
			$psertifikasi = $this->Psertifikasi_model->select_where($where);
			$code = array('id_peserta' => $psertifikasi->row('id_peserta'));
			$detailpeserta = $this->Peserta_model->select_where($code)->result();
			$trainer = $this->Trainer_model->select();

			$content = array(
				'title' => 'Dashboard',
				'profile'		=> $profile,
				'subtitle'	=> '',
				'detailpeserta' => $detailpeserta,
				'psertifikasi' => $psertifikasi,
				'trainer'		=> $trainer,
				// 'id_trainer' => $id_trainer,
				// 'quiz' => $quiz,
				'content' => 'Admin/Pages/v_detailpsertifikasi');
			$this->load->view('Admin/Layout/Wrapper',$content);
		}else{
			$this->load->view('Admin/Pages/v_login');
		}
	}

	function updateaksesor(){
		if ($this->session->userdata('id_admin') != FALSE){
			$id_admin = array(
				'id_admin'	=> $this->session->userdata('id_admin'));
			$profile = $this->Admin_model->select_where($id_admin)->result();

			$where = array('id_psertifikasi' => $this->input->post('psertifikasi'));
			$data = array('id_trainer' => $this->input->post('aksesor'));
			$this->Psertifikasi_model->update($where,$data);

			redirect(base_url('admin/detailsertifikasi/'.$this->input->post('psertifikasi')));
		}else{
			$this->load->view('Admin/Pages/v_login');
		}
	}

	function updatepassword(){
		if ($this->session->userdata('id_admin') != NULL) {
			$where = array(
			'id_admin' => $this->session->userdata('id_admin')
			);

			$data = array(
				'pass'	=> md5($this->input->post('pass')));
			$this->Admin_model->update($where,$data);
			redirect(base_url('admin/profile'));
		}
	}

	function updatepasswordtrainer(){
		if ($this->session->userdata('id_admin') != NULL) {
			$where = array(
			'id_trainer' => $this->input->post('id_trainer')
			);

			$data = array(
				'pass'	=> md5($this->input->post('pass')));
			$this->Trainer_model->update($where,$data);
			redirect(base_url('admin/show_trainer/'.$this->input->post('slug')));
		}
	}
}

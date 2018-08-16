<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Trainer extends CI_Controller {

	function __construct(){
		parent::__construct();
		$this->load->model(array('Trainer_model','Modul_model','Materi_model','Category_model','Training_model','Quiz_model','Result_model','Test_model','Soal_model','Jawaban_model','Company_model'));
		$this->load->helper(array('form', 'url'));
	}

	public function index(){
		if($this->session->userdata('status') == 'logintrainer'){
			$where = array(
				'id_trainer' => $this->session->userdata('trainer')
			);

			$content = array(
				'title' => 'Dashboard',
				'profile' => $this->Trainer_model->select_where($where)->result(),
				'course'=> $this->Modul_model->select_where($where)->result(),
				'category' => $category = $this->Category_model->select()->result(),
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
				$unique_code = $s->unique_code;
			}

			$data_session = array(
				'nama'    => $nama,
				'trainer' => $id_trainer,
				'unique_code'=> $unique_code,
				'status'  => 'logintrainer'
			);
			$this->session->set_userdata($data_session);
			redirect(base_url('trainer'));
		}
	}

	function coursecatalog(){
		if($this->session->userdata('status') == 'logintrainer'){
			$where = array(
				'id_trainer' => $this->session->userdata('trainer')
			);
			$content = array(
				'title' 	=> 'Course Catalog',
				'profile'	=> $this->Trainer_model->select_where($where)->result(),
				'content'	=> 'Trainer/Pages/v_coursecatalog'
			);
			$this->load->view('Trainer/Layout/Wrapper',$content);
		}else{
			$this->load->view('trainer/pages/v_login');
		}
	}

	function profile(){
		if($this->session->userdata('status') == 'logintrainer'){
			$where = array(
				'id_trainer' => $this->session->userdata('trainer')
			);
			$content = array(
				'title' 	=> 'Profile',
				'profile'	=> $this->Trainer_model->select_where($where)->result(),
				'content'	=> 'trainer/pages/v_profile');
			$this->load->view('Trainer/Layout/Wrapper',$content);
		}else{
			$this->load->view('trainer/pages/v_login');
		}
	}

	function editphoto($kode){
		$where = array(
			'unique_code' => $this->session->userdata('unique_code')
		);
		$content = array(
			'title' => 'Profile',
			'status'	=> '0',
			'content' => 'trainer/pages/v_editphotoprofile',
			'profile' => $this->Trainer_model->select_where($where)->result());
		$this->load->view('trainer/layout/wrapper',$content);
	}

	function logout(){
		$this->session->sess_destroy();
		redirect(base_url('trainer'));
	}

	function detailcourse($slug){
		if($this->session->userdata('status') == 'logintrainer'){
			$id_trainer = array(
				'id_trainer' => $this->session->userdata('trainer')
			);
			$where = array(
				'slug'	=> $slug);
			$id_modul = $this->Modul_model->select_where($where)->row('id_modul');
			$modul = $this->Modul_model->select_where($where)->result();
			$where = array(
				'id_modul'	=> $id_modul);
			$sub_materi 	= $this->Materi_model->select_where($where)->result();
			$jumlah_materi 	= $this->Materi_model->select_where($where)->num_rows();
			$jumlah_peserta	= $this->Training_model->select_peserta($id_modul)->num_rows();
			$data_peserta	= $this->Training_model->select_peserta($id_modul)->result();
			$category = $this->Category_model->select()->result();
			$data=array(
				'title' 		=> 'Dashboard',
				'profile'		=> $this->Trainer_model->select_where($id_trainer)->result(),
				'modul'			=> $modul,
				'submateri'		=> $sub_materi,
				'jumlah_materi'	=> $jumlah_materi,
				'jumlah_peserta'=> $jumlah_peserta,
				'data_peserta'	=> $data_peserta,
				'category'		=> $category,
				'content' 		=> 'trainer/pages/v_detailcourse');
			$this->load->view('trainer/layout/wrapper',$data);
		}else{
			$this->load->view('trainer/pages/v_login');
		}
	}

	function detailmateri($slug){
		if($this->session->userdata('status') == 'logintrainer'){
			$id_trainer = array(
				'id_trainer' => $this->session->userdata('trainer')
			);
			$where = array(
				'slug' => $slug);
			$materi = $this->Materi_model->select_where($where)->result();
			$id_materi = $this->Materi_model->select_where($where)->row('id_materi');
			$quiz= $this->Quiz_model->quizkategori($id_materi)->result();
			// $cekquiz = $this->Quiz_model->pertanyaan($id_test)->num_rows();
			$data=array(
				'title' 		=> 'Dashboard',
				'profile'		=> $this->Trainer_model->select_where($id_trainer)->result(),
				'materi'		=> $materi,
				'quiz'			=> $quiz,
				// 'cekquiz'		=> $cekquiz,
				'content' 		=> 'trainer/pages/v_detailmateri');
			$this->load->view('trainer/layout/wrapper',$data);
		}else{
			$this->load->view('trainer/pages/v_login');
		}
	}

	function updatemateri(){

		$slug = url_title($this->input->post('judul'), 'dash', true);
		$data = array(
			'judul' => $this->input->post('judul'),
			'indikator'	=> $this->input->post('indikator'),
			'tujuan'	=> $this->input->post('tujuan'),
			'evaluasi'	=> $this->input->post('evaluasi'),
			'slug'		=> $slug
		);

		$where = array(
			'id_materi'		=> $this->input->post('id')
		);
		

		$this->Materi_model->update($where,$data);

		redirect(base_url('trainer/detailmateri/'.$slug));
	}

	function tambahpdf(){

		$slug = url_title($this->input->post('judul'), 'dash', true);
		$config['upload_path']	= './assets/modul_pdf/';
		$config['allowed_types'] = 'pdf';
		$config['max_size'] = '0';
		$config['file_name'] = $slug;
		$this->load->library('upload',$config);
		if(! $this->upload->do_upload('pdf')){
			echo "error";
		}else{
			$pdf = $this->upload->data();
			// $format = str_replace('image', '',$pdf['file_type']);
			$data = array(
				'pdf' => $pdf['file_name']);
			$where = array(
				'id_materi'	=> $this->input->post('id'));
			$this->Materi_model->update($where,$data);
			redirect(base_url('trainer/detailmateri/'.$slug));
		}
	}

	function updatepdf(){

		$slug = url_title($this->input->post('judul'), 'dash', true);
		$where = array(
			'slug'	=> $slug);
		$namapdf = $this->Materi_model->select_where($where)->row('pdf');
		unlink('./assets/modul_pdf/'.$namapdf);
		$config['upload_path']	= './assets/modul_pdf/';
		$config['allowed_types'] = 'pdf';
		$config['file_name'] = $slug;
		$this->load->library('upload',$config);
		if(!$this->upload->do_upload('pdf')){
			echo $this->upload->display_errors();
		}else{
			$pdf = $this->upload->data();
			redirect(base_url('trainer/detailmateri/'.$slug));
		}
		
		
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

		redirect(base_url('trainer/detailmateri/'.$slug));
	}

	function tambahkonten(){

		$slug = url_title($this->input->post('judul'), 'dash', true);
		$data = array(
			'konten' => $this->input->post('konten')
		);

		$where = array(
			'id_materi'		=> $this->input->post('id')
		);
		

		$this->Materi_model->update($where,$data);

		redirect(base_url('trainer/detailmateri/'.$slug));
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
			'indikator'	=> $this->input->post('indikator'),
			'tujuan'		=> $this->input->post('tujuan'),
			'evaluasi'		=> $this->input->post('evaluasi'),
			'slug'			=> $slug
		);

		$this->Materi_model->input($data);

		redirect(base_url('trainer/detailcourse/'.$this->uri->segment(3)));
	}

	function hapusmateri($slug){
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

		redirect(base_url('trainer/detailcourse/'.$this->uri->segment(4)));
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
		redirect(base_url('trainer'));
	}

	function tambahquiz($slug){
		if($this->session->userdata('status') == 'logintrainer'){
			$where = array(
				'slug'	=> $slug);
			$materi = $this->Materi_model->select_where($where)->result();
			$id_materi = $this->Materi_model->select_where($where)->row('id_materi');
			$namamodul = $this->Materi_model->select_modul($id_materi)->row('namamodul');
			$where = array(
				'id_trainer' => $this->session->userdata('trainer')
			);
			$content = array(
				'title' 	=> 'Dashboard',
				'profile'	=> $this->Trainer_model->select_where($where)->result(),
				'materi'	=> $materi,
				'namamodul'	=> $namamodul,
				'content'	=> 'Trainer/Pages/v_tambahquiz'
			);
			$this->load->view('trainer/layout/wrapper',$content);
		}else{
			$this->load->view('trainer/pages/v_login');
		}
	}

	function tambahsoal($slug){
		if($this->session->userdata('status') == 'logintrainer'){
			$where = array(
				'id_trainer' => $this->session->userdata('trainer'));
			$id_materi = $this->input->post('id_materi');
			$slug = $this->Materi_model->select_where($id_materi)->row('slug');
			$content = array(
				'title' => 'Dashboard',
				'profile' => $this->Trainer_model->select_where($where)->result(),
				'kategori' => $this->input->post('kategori'),
				'id_materi' => $id_materi,
				'id_trainer' => $this->input->post('id_trainer'),
				'waktu' => $this->input->post('waktu'),
				'tipesoal' => $this->input->post('tipesoal'),
				'jumlah_soal' => $this->input->post('jumlah_soal'),
				'slug' => $slug,
				'content' => 'trainer/pages/v_tambahsoal'
			);
			$this->load->view('trainer/layout/wrapper',$content);
		}else{
			$this->load->view('trainer/pages/v_login');
		}
	}

	function tambahtest($slug){
		if($this->session->userdata('status') == 'logintrainer'){
			$where = array(
				'id_trainer'	=> $this->session->userdata('trainer'));

			$length = 10;
			$characters = '0123456789ABCDEFGHIJKLMNOPQRSTUVWXYZabcdefghijklmnopqrstuvwxyz';
			$charactersLength = strlen($characters);
			$unique_kode = '';

			for ($i = 0; $i < $length; $i++) {
				$unique_kode .= $characters[rand(0, $charactersLength - 1)];
			}

			$jumlah_soal = $this->input->post('jumlah_soal');
			$datatest = array(
				'id_materi'		=> $this->input->post('id_materi'),
				'id_trainer'	=> $this->input->post('id_trainer'),
				'waktu' 		=> $this->input->post('waktu'),
				'kategori'		=> $this->input->post('kategori'),
				'tipesoal'		=> $this->input->post('tipesoal'),
				'code'			=> $unique_kode);
			$this->Test_model->input($datatest);
			$where = array(
				'code'	=> $unique_kode);
			$id_test = $this->Test_model->select_where($where)->row('id_test');
			if($this->input->post('tipesoal') == 'essay'|| $this->input->post('tipesoal') == 'file'){
				for ($no=1; $no <= $jumlah_soal; $no++){
					$soal = array(
						'id_test'	=> $id_test,
						'pertanyaan' => $this->input->post('pertanyaan'.$no)
					);
					$this->Soal_model->input($soal);
				}
			}else{
				for ($no=1; $no <= $jumlah_soal; $no++){
					$soal = array(
						'id_test'		=> $id_test,
						'pertanyaan' 	=> $this->input->post('pertanyaan'.$no),
						'a' 			=> $this->input->post('A'.$no),
						'b' 			=> $this->input->post('B'.$no),
						'c' 			=> $this->input->post('C'.$no),
						'bobot_a'		=> $this->input->post('bobot_a'.$no),
						'bobot_b'		=> $this->input->post('bobot_b'.$no),
						'bobot_c'		=> $this->input->post('bobot_c'.$no)
						//'benar'	 => $this->input->post('jawaban'.$no)
					);
					$this->Soal_model->input($soal);
				}
			}
			redirect(base_url('trainer/detailmateri/'.$slug));

		}else{
			$this->load->view('trainer/pages/v_login');
		}

	}

	function hapussoal($slug,$id_test,$id_soal){
		if($this->session->userdata('status') == 'logintrainer'){
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
			redirect(base_url('trainer/detailquiz/'.$this->uri->segment(3).'/'.$this->uri->segment(4)));
			// }else{
			// 	$this->Soal_model->delete($where);
			// 	$this->Test_model->delete($where2);
			// 	redirect(base_url('trainer/detailmateri/'.$this->uri->segment(3)));	
			// }
		}
		else{
			$this->load->view('trainer/pages/v_login');
		}
	}

	function editsoal(){
		if($this->session->userdata('status') == 'logintrainer'){
			$where = array(
				'id_soal' => $this->uri->segment(4)
			);
			$soal = $this->Soal_model->select_where($where)->result();
			$where = array(
				'id_trainer' => $this->session->userdata('trainer'));
			$content = array(
				'title'			=> 'Dashboard',
				'profile'		=> $this->Trainer_model->select_where($where)->result(),
				'soal' 			=> $soal,
				'content'		=> 'trainer/pages/v_editsoal'
			);
			$this->load->view('trainer/layout/wrapper',$content);
			
		}
		else{
			$this->load->view('trainer/pages/v_login');
		}
	}

	function updatesoal(){
		if ($this->session->userdata('status') == 'logintrainer') {
			$data = array(
				'pertanyaan' 	=> $this->input->post('pertanyaan'),
				'a' 			=> $this->input->post('A'),
				'b' 	=> $this->input->post('B'),
				'c' 	=> $this->input->post('C'),
				'bobot_a' 	=> $this->input->post('bobot_a'),
				'bobot_b' 	=> $this->input->post('bobot_b'),
				'bobot_c' 	=> $this->input->post('bobot_c')
				//'benar'	 => $this->input->post('jawaban')
			);
			$where = array(
				'id_soal'		=> $this->input->post('id_soal'));
			$this->Soal_model->update($where,$data);
			redirect(base_url('trainer/detailquiz/'.$this->uri->segment(3).'/'.$this->uri->segment(4)));
		}else{
			$this->load->view('trainer/pages/v_login');
		}
	}

	// function tambahsoal2($slug){
	// 	if ($this->session->userdata('status') == 'logintrainer') {
	// 		$where = array(
	// 			'id_trainer'	=> $this->session->userdata('id_trainer'));
	// 		$content = array(
	// 			'title'			=> 'Dashboard',
	// 			'profile'		=> $this->Trainer_model->select_where($where)->result(),
	// 			'content'		=> 'trainer/pages/v_tambahsoal2'
	// 		);
	// 		$this->load->view('trainer/layout/wrapper',$content);
	// 	}else{
	// 		$this->load->view('trainer/pages/v_login');
	// 	}
	// }

	function updatesoal2(){
		if ($this->session->userdata('status') == 'logintrainer') {
			$code_test =  $this->uri->segment(4);
			$where = array(
				'code' => $code_test);
			$id_test = $this->Test_model->select_where($where)->row('id_test');
			$soal = array(
				'id_test'		=> $id_test,
				'pertanyaan' 	=> $this->input->post('pertanyaan'),
				'a' 			=> $this->input->post('A'),
				'b' 			=> $this->input->post('B'),
				'c' 			=> $this->input->post('C'),
				'bobot_a' 			=> $this->input->post('bobot_a'),
				'bobot_b' 			=> $this->input->post('bobot_b'),
				'bobot_c' 			=> $this->input->post('bobot_c'),
				//'benar'	 => $this->input->post('jawaban')
			);
			$this->Soal_model->input($soal);
			redirect(base_url('trainer/detailquiz/'.$this->uri->segment(3).'/'.$this->uri->segment(4)));
		}else{
			$this->load->view('trainer/pages/v_login');
		}
	}

	function editquiz(){
		if($this->session->userdata('status') == 'logintrainer'){
			$slug = array(
				'slug'	=> $this->uri->segment(3));
			$id_materi = $this->Materi_model->select_where($slug)->row('id_materi');
			$where = array(
				'id_materi'	=> $id_materi);
			$id_modul = $this->Materi_model->select_where($where)->row('id_modul');
			$where = array(
				'id_modul'	=> $id_modul);
			$namamodul = $this->Modul_model->select_where($where)->row('nama');
			$where = array(
				'id_materi'	=> $id_materi);
			$id_test = $this->Test_model->select_where($where)->row('id_test');
			$test =  $this->Test_model->select($id_test)->result();
			$where = array(
				'id_trainer' => $this->session->userdata('trainer'));
			$content = array(
				'title'			=> 'Dashboard',
				'profile'		=> $this->Trainer_model->select_where($where)->result(),
				'test' 			=> $test,
				'namamodul'		=> $namamodul,
				'content'		=> 'trainer/pages/v_editquiz'
			);
			$this->load->view('trainer/layout/wrapper',$content);
			
		}
		else{
			$this->load->view('trainer/pages/v_login');
		}
	}

	function updatequiz(){
		if ($this->session->userdata('status') == 'logintrainer') {
			$where = array(
				'code'	=> $this->uri->segment(4));
			$id_test =  $this->Test_model->select_where($where)->row('id_test');
			$data = array(
				'waktu'		=> $this->input->post('waktu'));
			$this->Test_model->update($where,$data);
			redirect(base_url('trainer/detailquiz/'.$this->uri->segment(3).'/'.$this->uri->segment(4)));
		}else{
			$this->load->view('trainer/pages/v_login');
		}
	}

	function hapusquiz(){
		if ($this->session->userdata('status') == 'logintrainer'){
			$slug = array(
				'slug'	=> $this->uri->segment(3));
			$id_materi = $this->Materi_model->select_where($slug)->row('id_materi');
			$where = array(
				'code'	=> $this->uri->segment(4));
			$id_test =  $this->Test_model->select_where($where)->row('id_test');
			$where = array(
				'id_test'	=> $id_test);

			$this->Soal_model->delete($where);
			$this->Test_model->delete($where);
			redirect(base_url('trainer/detailmateri/'.$this->uri->segment(3)));

		}else{
			$this->load->view('trainer/pages/v_login');
		}
	}

	function detailquiz(){
		if ($this->session->userdata('status') == 'logintrainer'){
			$id_trainer = array(
				'id_trainer' => $this->session->userdata('trainer')
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
				'profile'		=> $this->Trainer_model->select_where($id_trainer)->result(),
				'modul'			=> $modul,
				'materi'		=> $materi,
				'quiz'			=> $quiz,
				'detail'		=> $this->Test_model->select_where($where)->result(),
				'tipesoal'		=> $this->Test_model->select_where($where)->row('tipesoal'),
				'jumlah_soal' 	=> $this->Quiz_model->pertanyaan($id_test)->num_rows(),
				'content'		=> 'Trainer/Pages/v_detailquiz');
			$this->load->view('Trainer/Layout/Wrapper',$content);
		}
	}

	function detailpeserta($code){
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
		$content = array(
			'title' => 'Dashboard',
			'detailpeserta' => $detailpeserta,
			'id_trainer' => $id_trainer,
			'quiz' => $quiz,
			'content' => 'Trainer/Pages/v_detailpeserta');
		$this->load->view('Trainer/Layout/Wrapper',$content);
	}

	function review(){
		$where = array('code' => $this->uri->segment(4));
		$id_result = $this->Result_model->select_where($where)->row('id_result');
		$id_test = $this->Result_model->select_where($where)->row('id_test');
		$where = array(
			'id_test' => $id_test);
		$tipesoal = $this->Test_model->select_where($where)->row('tipesoal');
		$kategori = $this->Test_model->select_where($where)->row('kategori');
		$a = $this->Soal_model->select_where($where)->row('a');
		$b = $this->Soal_model->select_where($where)->row('b');
		$c = $this->Soal_model->select_where($where)->row('c');
		$where = 'result.id_result = '.$id_result.' and result.id_result = jawaban.id_result and jawaban.id_soal = soal.id_soal';
		$jawaban = $this->Result_model->join_jawaban_soal($where)->result();
		$data = array(
			'title' => 'Review',
			'jawaban' => $jawaban,
			'tipesoal'=> $tipesoal,
			'a' => $a,
			'b' => $b,
			'c' => $c,
			'kategori' => $kategori,
			'content' => 'trainer/pages/v_review'
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
		$nilai = number_format($nilai,2);
		$data = array('nilai' => $nilai);
		$where = array('code' => $this->uri->segment(4));
		$this->Result_model->update($where,$data);

		redirect(base_url('trainer/detailpeserta/'.$this->uri->segment(3)));

	}

	function coursecategory(){
		if($this->session->userdata('status') == 'logintrainer'){
			$id_trainer = array(
				'id_trainer' => $this->session->userdata('trainer')
			);
			$category = $this->Category_model->select()->result();
			$data=array(
				'title' 		=> 'Course Category',
				'profile'		=> $this->Trainer_model->select_where($id_trainer)->result(),
				'category'		=> $category,
				'content' 		=> 'trainer/pages/v_coursecategory');
			$this->load->view('trainer/layout/wrapper',$data);
		}else{
			$this->load->view('trainer/pages/v_login');
		}
	}

	function tambahcategory(){
		$slug = url_title($this->input->post('category'), 'dash', true);
		$data = array(
			'category' 		=> $this->input->post('category'),
			'slug'			=> $slug
		);

		$this->Category_model->input($data);

		redirect(base_url('trainer/coursecategory'));
	}

	function updatecategory(){
		$slug = url_title($this->input->post('category'), 'dash', true);
		$data = array(
			'category' => $this->input->post('category'),
			'slug'			=> $slug
		);

		$where = array(
			'id_category'		=> $this->input->post('id_category')
		);
		

		$this->Category_model->update($where,$data);

		redirect(base_url('trainer/coursecategory'));
	}

	function hapuscategory($slug){
		$where = array(
			'slug' => $slug
		);

		$this->Category_model->delete($where);

		redirect(base_url('trainer/coursecategory'));
	}

	function tambahcourse(){
		$where = array(
			'email' => $this->input->post('emailcmp'));
		$company = $this->Company_model->select_where($where)->num_rows();
		if($company == 1){
			$id_company = $this->Company_model->select_where($where)->row('id_company');
			$slug = url_title($this->input->post('nama'), 'dash', true);
			$config['upload_path']	= './assets/modul/';
			$config['allowed_types'] = 'jpg|jpeg|png';
			$config['max_size'] = '2048';
			$config['max_width'] = '4048';
			$config['max_height'] = '4048';
			$config['file_name'] = $slug;
			$this->load->library('upload',$config);
			if(! $this->upload->do_upload('berkas')){
				echo "error";
			}else{
				$gbr = $this->upload->data();
				$format = str_replace('image', '',$gbr['file_type']);
				$data = array(
					'id_trainer' 	=> $this->session->userdata('trainer'),
					'id_company'	=> $id_company,
					'nama'			=> $this->input->post('nama'),
					'deskripsi'		=> $this->input->post('description'),
					'category'		=> $this->input->post('category'),
					'slug'			=> $slug,
					'img' => $gbr['file_name']
				);
				$this->Modul_model->input($data);
			}
			$email = $this->input->post('emailcmp');
			$config['protocol'] = 'smtp';
			$config['smtp_host'] = 'ssl://smtp.googlemail.com';
			$config['smtp_port'] = 465;
			$config['mailtype'] = 'html';
			$config['smtp_user'] = 'ananda.rifkiy33@gmail.com';
			$config['smtp_pass'] = 'helloworld:)';

            // Load email library and passing configured values to email library 
			$this->load->library('email', $config);
			$this->email->set_newline("\r\n");

            // Sender email address
			$this->email->from('ananda.rifkiy33@gmail.com', 'Ananda Rifkiy Hasan');
            // Receiver email address
			$this->email->to($email);
            // Subject of email
			$this->email->subject('Training Invitation');
            // Message in email
			$message = '<html>
			<link href="https://fonts.googleapis.com/css?family=Lato:700%7CMontserrat:400,600" rel="stylesheet">
			<body style="font-family:"Montserrat", sans-serif;">
			<center>
			<div style="border: 1px solid black;padding: 20px;border-radius: 10px">
			<h3>GTC EduSite</h3>
			<p>Anda diundang dalam training'.$this->input->post('nama').' </p>
			<a href=http://localhost/gtclearning/company/detailcourse/'.$slug.'><button style="border:none;padding:12px 20px 12px 20px; background-color: green;color: white">Login</button></a>
			</div>
			</center>
			</body>
			</html>';
			$this->email->message($message);
			$this->email->send();
			redirect(base_url('trainer'));
		} else{
			$length = 8;
			$characters = '0123456789ABCDEFGHIJKLMNOPQRSTUVWXYZabcdefghijklmnopqrstuvwxyz';
			$charactersLength = strlen($characters);
			$pass = '';

			for ($i = 0; $i < $length; $i++) {
				$pass .= $characters[rand(0, $charactersLength - 1)];
			}


			$data = array(
				'email'	=> $this->input->post('emailcmp'),
				'pass'	=> md5($pass),
				'nama'	=> $this->input->post('namacmp'));
			$this->Company_model->input($data);

			$id_company = $this->Company_model->select_where($where)->row('id_company');
			$email = $this->Company_model->select_where($where)->row('email');
			$config['protocol'] = 'smtp';
			$config['smtp_host'] = 'ssl://smtp.googlemail.com';
			$config['smtp_port'] = 465;
			$config['mailtype'] = 'html';
			$config['smtp_user'] = 'ananda.rifkiy33@gmail.com';
			$config['smtp_pass'] = 'helloworld:)';

            // Load email library and passing configured values to email library 
			$this->load->library('email', $config);
			$this->email->set_newline("\r\n");

            // Sender email address
			$this->email->from('ananda.rifkiy33@gmail.com', 'Ananda Rifkiy Hasan');
            // Receiver email address
			$this->email->to($email);
            // Subject of email
			$this->email->subject('Training Invitation');
            // Message in email
			$message = '<html>
			<link href="https://fonts.googleapis.com/css?family=Lato:700%7CMontserrat:400,600" rel="stylesheet">
			<body style="font-family:"Montserrat", sans-serif;">
			<center>
			<div style="border: 1px solid black;padding: 20px;border-radius: 10px">
			<h3>GTC EduSite</h3>
			<p>Anda telah diundang dalam training Global Top Career sebagai perusahaan rekanan, sekarang anda memiliki hak akses untuk login di link berikut</p>
			<a href=http://localhost/gtclearning/company><button style="border:none;padding:12px 20px 12px 20px; background-color: green;color: white">Login</button></a>
			<p>Akun anda </p>
			<p>Email : '.$email.'</p>
			<p>Password : '.$pass.'</p>
			</div>
			</center>
			</body>
			</html>';
			$this->email->message($message);
			$this->email->send();

			$slug = url_title($this->input->post('nama'), 'dash', true);
			$config['upload_path']	= './assets/modul/';
			$config['allowed_types'] = 'jpg|jpeg|png';
			$config['max_size'] = '2048';
			$config['max_width'] = '4048';
			$config['max_height'] = '4048';
			$config['file_name'] = $slug;
			$this->load->library('upload',$config);
			if(! $this->upload->do_upload('berkas')){

				echo "error";
			}else{
				$gbr = $this->upload->data();
				$format = str_replace('image', '',$gbr['file_type']);
				$data = array(
					'id_trainer' 	=> $this->session->userdata('trainer'),
					'id_company'	=> $this->Company_model->select_where($where)->row('id_company'),
					'nama'			=> $this->input->post('nama'),
					'deskripsi'		=> $this->input->post('description'),
					'category'		=> $this->input->post('category'),
					'slug'			=> $slug,
					'img' => $gbr['file_name']
				);
				$this->Modul_model->input($data);
				redirect(base_url('trainer'));
			}

		}
	}

	function editprofile($kode){
		$where = array(
			'unique_code' => $this->session->userdata('unique_code')
		);

		$content = array(
			'title' 	=> 'Profile',
			'content' 	=> 'trainer/pages/v_editprofile',
			'profile' 	=> $this->Trainer_model->select_where($where)->result());
		$this->load->view('trainer/Layout/Wrapper',$content);
	}

	function uploadphoto(){ 
		$nama = $this->input->post('kode'); 
		$where = array( 'id_trainer' => $nama );
		$cekfoto = $this->Trainer_model->select_where($where)->result(); 

		$config['upload_path']	= './assets/profile_photos/trainer';
		$config['allowed_types'] = 'jpg|jpeg|png';
		$config['overwrite'] = TRUE;
		$config['max_size'] = '2048';
		$config['max_width'] = '4048';
		$config['max_height'] = '4048';
		$config['file_name'] = $nama;
		$this->load->library('upload',$config);
		if(! $this->upload->do_upload('berkas')){
			// $where = array('id_trainer' => $nama);
			// $data = array(
			// 	'img' => '');
			// $this->Peserta_model->insert_img($where,$data);
			// redirect(base_url('homepage/editphoto/failed'));
			echo $this->upload->display_errors();
		}else{
			$gbr = $this->upload->data();
			$format = str_replace('image', '',$gbr['file_type']);
			$where = array('id_trainer' => $nama);
			$data = array(
				'img' => $gbr['file_name']);
			$this->Trainer_model->update($where,$data);
			redirect(base_url('trainer/profile'));
		}

	}

	function updateprofile($id_peserta){
		$id = $id_peserta;

		$data	= array(
			'nama' 				=> $this->input->post('nama'),
			'gender' 			=> $this->input->post('gender'),
			'tempatlahir' 		=> $this->input->post('tempatlahir'),
			'ttl' 				=> $this->input->post('ttl'),
			'alamat' 			=> $this->input->post('alamat'),
			'email' 			=> $this->input->post('email'),
			'telp' 				=> $this->input->post('telepon')
		);

		$where 	= array('unique_code' => $id);
		
		$this->Trainer_model->update($where,$data);
		redirect(base_url('trainer/profile'));

	}



}
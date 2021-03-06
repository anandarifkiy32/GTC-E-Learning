<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Homepage extends CI_Controller {

	function __construct(){
		date_default_timezone_set('ASIA/JAKARTA');
		parent::__construct();
		$this->load->model(array('Peserta_model','Modul_model','Training_model','Materi_model','Quiz_model','Jawaban_model','Result_model','Test_model','Soal_model','Sertifikasi_model','Psertifikasi_model','Trainer_model','Category_model','Admin_model'));	
		$this->load->helper(array('form','url','file'));
		$this->load->library(array('pagination'));

		$this->output->set_header('Pragma: no-cache');
		$this->output->set_header('Cache-Control: no-cache, must-revalidate');
		$this->output->set_header('Expires: Mon, 26 Jul 1997 05:00:00 GMT');

		if($this->uri->segment(2) != 'startquiz'){
			if($this->uri->segment(2) != 'submit'){
				if($this->session->userdata('quizend') != NULL){
					redirect(base_url('homepage/startquiz/'.$this->session->userdata('kategori').'/'.$this->session->userdata('quizslug')));
				}
			}
		}
	}

	function index()
	{
		$where = array(
			'unique_code' => $this->session->userdata('unique_code')
		);
		if($this->session->userdata('status') == 'login'){
			$data = array(
				'profile'	=> $this->Peserta_model->select_where($where)->result(),
				'banner'	=> 'Welcome',
				'course'	=> $this->Modul_model->select()->result(),
				'category'	=> $this->Category_model->select()->result(),
				'content'	=> 'Client/Pages/v_dashboard'
			);
			$this->load->view('Client/Layout/Wrapper',$data);
		}else{
			$data = array(
				'course' => $this->Modul_model->select()->result(),
				'category'	=> $this->Category_model->select()->result());
			$this->load->view('Client/Pages/v_homepage',$data);
		}
	}

	function category($slug)
	{

		$where = array(
			'unique_code' => $this->session->userdata('unique_code')
		);
		$profile = $this->Peserta_model->select_where($where)->result();
		foreach ($profile as $p) {
			$id_peserta = $p->id_peserta;
		}
		$slug = array('slug'=>$slug);
		$where = array('category' => $this->Category_model->select_where($slug)->row('slug'),'status' => 1);
		$data = array(
			'profile'    	=> $profile,
			'banner'    	=> $this->Category_model->select_where($slug)->row('category'),
			'course'       	=> $this->Modul_model->select_where($where)->result(),
			'category'		=> $this->Category_model->select_where($slug)->row('category'),
			'content'    	=> 'Client/Pages/v_category'
		);
		$this->load->view('Client/Layout/Wrapper',$data);
	}

	function mycourses()
	{
		$where = array(
			'unique_code' => $this->session->userdata('unique_code')
		);

		$profile = $this->Peserta_model->select_where($where)->result();
		foreach ($profile as $p) { 
			$id_peserta = $p->id_peserta;
		}

		$mycourses = $this->Training_model->mycourses($id_peserta)->result();

		if($this->session->userdata('status') == 'login'){
			$data = array(
				'profile'	=> $profile,
				'banner'	=> 'My Courses',
				'course'	=> $mycourses,
				'content'	=> 'Client/Pages/v_mycourses'
			);
			$this->load->view('Client/Layout/Wrapper',$data);
		}else{
			$data['course'] = $this->Modul_model->select()->result();
			$this->load->view('Client/Pages/v_homepage',$data);
		}
	}

	function contact(){
		$where = array(
			'unique_code' => $this->session->userdata('unique_code')
		);

		$profile = $this->Peserta_model->select_where($where)->result();
		if($this->session->userdata('status') == 'login'){
			$data = array(
				'profile'	=> $profile,
				'banner'	=> 'Get In Touch',
				'content'	=> 'Client/Pages/v_contact'
			);
			$this->load->view('Client/Layout/Wrapper',$data);
		}else{
			$data = array(
				'profile'	=> $profile,
				'banner'	=> 'Get In Touch',
				'content'	=> 'Client/Pages/v_contact'
			);
			$this->load->view('Client/Layout/Wrapper',$data);
		}
		
	}

	function login(){
		$email = $this->input->post('email');
		$password = $this->input->post('pass');
		$where = array(
			'email' => $email,
			'pass' => md5($password),
			'status'	=> '1'
		);
		$cek = $this->Peserta_model->select_where($where)->num_rows();
		
		if($cek > 0){
			$data['session'] = $this->Peserta_model->select_where($where)->result();
			foreach ($data['session'] as $s) {
				$unique_code	= $s->unique_code;
			}
			$data_session = array(
				'unique_code'	=> $unique_code,
				'status' 		=> "login"
			);

			$this->session->set_userdata($data_session);
			redirect(base_url());
		}else{
			$this->session->set_flashdata('error', 'Email atau password salah. Silahkan login kembali');
			redirect();
		}
	}

	function login2(){
		$id_modul	= $this->input->post('id_modul');
		$function	= $this->input->post('function');
		$email 		= $this->input->post('email');
		$password 	= $this->input->post('pass');
		$where = array(
			'email' 	=> $email,
			'pass' 		=> md5($password),
			'status'	=> '1'
		);


		$cek = $this->Peserta_model->select_where($where)->num_rows();
		
		if($cek > 0){
			$data['session'] = $this->Peserta_model->select_where($where)->result();
			foreach ($data['session'] as $s) {
				$unique_code	= $s->unique_code;
			}
			$data_session = array(
				'unique_code'	=> $unique_code,
				'status' 		=> "login"
			);
			$this->session->set_userdata($data_session);
		}

		if(strlen($id_modul) == 150){
			redirect(base_url('homepage'));
		}elseif($function == 'startcourse'){
			redirect(base_url('homepage/startcourse/'.$id_modul));
		}elseif($function == 'joincourse'){
			redirect(base_url('homepage/joincourse/'.$id_modul));
		}elseif($function == 'daftarsertifikasi'){
			redirect(base_url('homepage/certification/'.$id_modul));
		}elseif($function == 'showlogin'){
			redirect(base_url());
		}else{
			redirect(base_url());
		}
	}


	function logout(){
		$this->session->sess_destroy();
		redirect(base_url());
	}

	function register(){
		$email 			= $this->input->post('email');
		$password 		= md5($this->input->post('password'));
		$namalengkap	= $this->input->post('namalengkap');
		$gender			= $this->input->post('gender');
		$tgl			= $this->input->post('tgl');
		$alamat			= $this->input->post('alamat');
		$telepon		= $this->input->post('telepon');
		$tempatlahir	= $this->input->post('tempatlahir');

		$where = array('email' => $email);
		$cek_email = $this->Peserta_model->select_where($where)->num_rows();
		if($cek_email == 1){
			redirect(base_url());
		}

		$length = 150;
		$characters = '0123456789ABCDEFGHIJKLMNOPQRSTUVWXYZabcdefghijklmnopqrstuvwxyz';
		$charactersLength = strlen($characters);
		$unique_kode = '';

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
		<p>Terimakasih sudah mendaftar. Tinggal satu tahap lagi untuk mengakses akun anda.</p>
		<a href='.base_url().'homepage/verification/'.$unique_kode.'><button style="border:none;padding:12px 20px 12px 20px; background-color: green;color: white">Verifikasi Email</button></a>
		</div>
		</center>
		</body>
		</html>';
		$this->email->message($message);

		if ($this->email->send()) {
			$data = array(
				'email' 		=> $email,
				'pass'			=> $password,
				'nama'  		=> $namalengkap,
				'gender'		=> $gender,
				'tempatlahir'	=> $tempatlahir,
				'ttl'   		=> $tgl,
				'alamat'		=> $alamat,
				'telp'  		=> $telepon,
				'unique_code'	=> $unique_kode,
				'status'		=> '0',
				'img'			=> ''
			);
			$this->Peserta_model->input($data);
			redirect(base_url('homepage/success'));
		} else {
			$data['alert'] ='Gagal';
		}
		
	}

	function success(){
		$where = array(
			'unique_code' => $this->session->userdata('unique_code')
		);

		$profile = $this->Peserta_model->select_where($where)->result();
		if($this->session->userdata('status') == 'login'){
			$data = array(
				'profile'	=> $profile,
				'banner'	=> 'Verifikasi',
				'content'	=> 'Client/Pages/v_verifikasi'
			);
			$this->load->view('Client/Layout/Wrapper',$data);
		}else{
			$data = array(
				'profile'	=> $profile,
				'banner'	=> 'Verifikasi',
				'content'	=> 'Client/Pages/v_verifikasi'
			);
			$this->load->view('Client/Layout/Wrapper',$data);
		}
	}

	function verification($code){
		$where  = array(
			'unique_code'	=> $code);
		$data 	= array(
			'status' 		=> '1');
		$this->Peserta_model->update($where,$data);
		$data['pesan'] = 'true';
		$this->load->view('Client/Pages/v_login',$data);
	}

	function detailtest($slug){
		$where = array('unique_code' => $this->session->userdata('unique_code'));
		$profile = $this->Peserta_model->select_where($where)->result();
		$id_peserta = $this->Peserta_model->select_where($where)->row('id_peserta');

		$where = array('slug' => $slug);
		$course = $this->Modul_model->select_where($where);
		$id_modul = $course->row('id_modul');

		$where = array('id_modul' => $id_modul);
		$materi = $this->Materi_model->select_where($where);

		$data = array(
			'profile' 		=> $profile,
			'id_peserta'	=> $id_peserta,
			'banner'		=> 'Resume : '.$course->row('nama'),
			'namacourse'	=> $course->row('nama'),
			'materi'		=> $materi,		
			'content'    	=> 'Client/Pages/v_detailtest');
		$this->load->view('Client/Layout/Wrapper',$data);

	}


	function detailcourse($slug){

		$where = array(
			'unique_code' => $this->session->userdata('unique_code')
		);
		$profile = $this->Peserta_model->select_where($where)->result();
		foreach ($profile as $p) {
			$id_peserta = $p->id_peserta;
		}
		

		$where = array('slug' => $slug);

		$modul = $this->Modul_model->select_where($where)->result();

		foreach ($modul as $m) {
			$id_modul = $m->id_modul;
		}

		$banner = $this->Modul_model->select_where($where)->row('nama');
		
		$category = $this->Modul_model->select_where($where)->row('category');

		$relatedcourse= $this->Modul_model->relatedcourse($category)->result();

		if($this->session->userdata('status') == 'login'){
			$where = array(
				'id_modul' 		=> $id_modul,
				'id_peserta'	=> $id_peserta);

			$cekjoin = $this->Training_model->select_where($where)->num_rows();
		}else{
			$cekjoin = 0;
		}
		$data = array(
			'profile'    	=> $profile,
			'banner'    	=> $banner,
			'modul'       	=> $modul,
			'cekjoin'		=> $cekjoin,
			'related'   	=> $relatedcourse,
			'content'    	=> 'Client/Pages/v_detailcourse'
		);
		$this->load->view('Client/Layout/Wrapper',$data);
	}

	function showlogin(){
		$this->load->view('Client/Pages/v_login');
	}

	function showregister(){
		$where = array(
			'unique_code' => $this->session->userdata('unique_code')
		);
		$profile = $this->Peserta_model->select_where($where)->result();
		if($this->session->userdata('status') == 'login'){
			$data = array(
				'profile'	=> $profile,
				'banner'	=> 'Register Now',
				'content'	=> 'Client/Pages/v_register'
			);
			$this->load->view('Client/Layout/Wrapper',$data);
		}else{
			$data = array(
				'profile'	=> $profile,
				'banner'	=> 'Register Now',
				'content'	=> 'Client/Pages/v_register'
			);
			$this->load->view('Client/Layout/Wrapper',$data);
		}
	}

	function startcourse($slug){
		if($this->session->userdata('status') == 'login'){
			//profile
			$where = array(
				'unique_code'	=> $this->session->userdata('unique_code'));
			$profile = $this->Peserta_model->select_where($where)->result();
			$id_peserta = $this->Peserta_model->select_where($where)->row('id_peserta');
			//cek pre tes
			$where = array(
				'slug'	=> $slug);
			$banner = $this->Modul_model->select_where($where)->row('nama');
			$course = $this->Modul_model->selectcourse($slug)->result();
			$biaya = $this->Modul_model->select_where(array('slug' => $slug))->row('biaya');
			//nilai
			$where = array('slug' => $slug);
			$course2 = $this->Modul_model->select_where($where);
			$id_modul = $course2->row('id_modul');
			$where = array('id_modul' => $id_modul);
			$materi = $this->Materi_model->select_where($where);
			$where = array(
				'id_peserta' 	=> $id_peserta,
				'id_modul'		=> $id_modul
			);
			$cektraining = $this->Training_model->select_where($where);

			$data = array(
				'content'	=> 'Client/Pages/v_course',
				'course'	=> $course,
				'biaya'		=> $biaya,
				'cektraining' => $cektraining,
				'banner'	=> $banner,
				'materi'	=> $materi,
				'profile'	=> $profile,
				'id_peserta'=> $id_peserta
			);
			$this->session->set_userdata('course',$slug);
			$this->load->view('Client/Layout/Wrapper',$data);
		}else{
			$this->load->view('Client/Pages/v_login');
		}
	}

	function coursecatalog(){
		$links = NULL;
		if($this->uri->segment(3) == ''){
			$category = 'all';
		}else{
			$category = $this->uri->segment(3);
		}
		
		$limit_per_page = 4;
		if($this->uri->segment(4) == 0){
			$start_index = 0;
		}else{
			$start_index = $this->uri->segment(4) * 4 - 4;
		}
		$total_records = $this->Modul_model->countrow($category);

		if ($total_records > 4) 
		{
            // get current page records
			$results = $this->Modul_model->get_current_page_records($category,$limit_per_page, $start_index)->result();

			$config['base_url'] = base_url() . 'homepage/coursecatalog/'.$category;
			$config['total_rows'] = $total_records;
			$config['per_page'] = $limit_per_page;
			$config["uri_segment"] = 4;
			$config['num_links'] = 2;
			$config['use_page_numbers'] = TRUE;
			$config['reuse_query_string'] = TRUE;

			$config['full_tag_open'] = '<nav><ul class="pagination" style="margin-top:0px">';

			$config['full_tag_close'] = '</ul></nav>';

			$config['first_link'] = 'First';
			$config['first_tag_open'] = '<li>';
			$config['first_tag_close'] = '</li>';

			$config['last_link'] = 'Last';
			$config['last_tag_open'] = '<li>';
			$config['last_tag_close'] = '</li>';

			$config['next_link'] = 'Next';
			$config['next_tag_open'] = '<li>';
			$config['next_tag_close'] = '</li>';

			$config['prev_link'] = 'Prev';
			$config['prev_tag_open'] = '<li>';
			$config['prev_tag_close'] = '</li>';

			$config['cur_tag_open'] = '<li class="active"><a style="border-color:#ff791f;background-color:#ff791f;">';
			$config['cur_tag_close'] = '</a></li>';

			$config['num_tag_open'] = '<li>';
			$config['num_tag_close'] = '</li>';

			$this->pagination->initialize($config);
            // build paging links
			$links = $this->pagination->create_links();
		}else{
			$results = $this->Modul_model->get_current_page_records($category,$limit_per_page, $start_index)->result();
		}


		$where = array(
			'unique_code' => $this->session->userdata('unique_code')
		);
		$profile = $this->Peserta_model->select_where($where)->result();
		$category = $this->Modul_model->selectcategory()->result();
		$slug = array('slug' => $this->Modul_model->selectcategory()->row('category'));
		$namacategory = $this->Category_model->select()->result();
		$recentpost= $this->Modul_model->recentpost($category)->result();
		$data = array(
			'profile'	=> $profile,
			'banner'	=> 'Course Catalog',
			'results'	=> $results,
			'links'		=> $links,
			'category'	=> $category,
			'namacategory' => $namacategory,
			'recentpost'=> $recentpost,
			'content'	=> 'Client/Pages/v_coursecatalog'
		);
		$this->load->view('Client/Layout/Wrapper',$data);
	}

	function showprofile(){
		$where = array(
			'unique_code' => $this->session->userdata('unique_code')
		);
		$profile = $this->Peserta_model->select_where($where)->result();
		$category = $this->Modul_model->selectcategory()->result();

		$data = array(
			'profile'   => $profile,
			'banner'    => 'Profile',
			'content'   => 'Client/Pages/v_profile'
		);

		$this->load->view('Client/Layout/Wrapper',$data);
	}

	function editprofile(){
		$where = array(
			'unique_code' => $this->session->userdata('unique_code')
		);
		$profile = $this->Peserta_model->select_where($where)->result();
		$data = array(
			'profile'   => $profile,
			'banner'    => 'Edit Profile',
			'content'     => 'Client/Pages/v_editprofile'
		);
		$this->load->view('Client/Layout/Wrapper',$data);
	}

	function updateprofile(){
		$id = $this->session->userdata('unique_code');

		$data    = array(
			'nama'              => $this->input->post('namalengkap'),
			'gender'            => $this->input->post('gender'),
			'tempatlahir'       => $this->input->post('tempatlahir'),
			'ttl'               => $this->input->post('tgl'),
			'alamat'            => $this->input->post('alamat'),
			'telp'              => $this->input->post('telepon'),
			'kantor'            => $this->input->post('kantor'),
			'alamat_kantor'     => $this->input->post('alamat_kantor'),
			'telp_kantor'       => $this->input->post('telepon_kantor'),
			'biografi'          => $this->input->post('biografi')
		);

		$where     = array('unique_code' => $id);

		$this->Peserta_model->update($where,$data);
		redirect(base_url('homepage/showprofile'));
	}


	function editphoto(){
		$status = '';
		if ($this->uri->segment(3) == 'failed'){
			$status = $this->uri->segment(3);
		}
		$where = array(
			'unique_code' => $this->session->userdata('unique_code')
		);
		$content = array(
			'title' => 'Profile',
			'banner' => 'Edit Foto',
			'status'	=> $status,
			'content' => 'Client/Pages/v_editphotoprofile',
			'profile' => $this->Peserta_model->select_where($where)->result()

		);
		$this->load->view('Client/Layout/Wrapper',$content);
	}

	function uploadphoto(){ 
		$nama = $this->input->post('code'); 
		$where = array( 'id_peserta' => $nama );
		$cekfoto = $this->Peserta_model->select_where($where)->result(); 
		foreach ($cekfoto as $c) {
			$hasil = $c->img;
		}
		if($hasil == ""){
			$config['upload_path']	= './assets/profile_photos/';
			$config['allowed_types'] = 'jpg|jpeg|png';
			$config['file_name'] = $nama;
			$this->load->library('upload',$config);
			if(! $this->upload->do_upload('berkas')){

				echo "error";
			}else{
				$gbr = $this->upload->data();
				$format = str_replace('image', '',$gbr['file_type']);
				$where = array('id_peserta' => $nama);
				$data = array(
					'img' => $gbr['file_name']);
				$this->Peserta_model->insert_img($where,$data);
				redirect(base_url('homepage/showprofile'));
			}
		}else{
			unlink('./assets/profile_photos/'.$hasil);
			$config['upload_path']	= './assets/profile_photos/';
			$config['allowed_types'] = 'jpg|jpeg|png';
			$config['max_size'] = '2048';
			$config['max_width'] = '4048';
			$config['max_height'] = '4048';
			$config['file_name'] = $nama;
			$this->load->library('upload',$config);
			if(! $this->upload->do_upload('berkas')){
				$where = array('id_peserta' => $nama);
				$data = array(
					'img' => '');
				$this->Peserta_model->insert_img($where,$data);
				redirect(base_url('homepage/editphoto/failed'));
			}else{
				$gbr = $this->upload->data();
				$format = str_replace('image', '',$gbr['file_type']);
				$where = array('id_peserta' => $nama);
				$data = array(
					'img' => $gbr['file_name']);
				$this->Peserta_model->insert_img($where,$data);
				redirect(base_url('homepage/showprofile'));
			}
		}	
	}

	function joincourse($course){
		if($this->session->userdata('status') == 'login'){
			$peserta = $this->session->userdata('unique_code');
			$where = array('unique_code' => $peserta);
			$id_peserta = $this->Peserta_model->select_where($where)->row('id_peserta');
			$where = array('slug' => $course);
			$id_modul = $this->Modul_model->select_where($where)->row('id_modul');
			$where = array(
				'id_modul'	=> $id_modul,
				'id_peserta'=> $id_peserta
			);
			$cekjoin = $this->Training_model->select_where($where)->num_rows();
			if($cekjoin == 1){
				redirect(base_url('homepage/startcourse/'.$course));
			}

			$where = array(
				'unique_code' => $peserta);
			$data = $this->Peserta_model->select_where($where)->result();
			foreach ($data as $peserta) {
				$id_peserta = $peserta->id_peserta;
			}

			$where = array(
				'slug' => $course);
			$data = $this->Modul_model->select_where($where)->result();
			if($this->Modul_model->select_where($where)->num_rows() == 0){
				redirect('homepage/coursecatalog/');
			}
			foreach ($data as $modul) {
				$id_modul = $modul->id_modul;
			}
			//generate codejoin
			$length = 30;
			$characters = '0123456789ABCDEFGHIJKLMNOPQRSTUVWXYZabcdefghijklmnopqrstuvwxyz';
			$charactersLength = strlen($characters);
			$unique_kode = '';
			for ($i = 0; $i < $length; $i++) {
				$unique_kode .= $characters[rand(0, $charactersLength - 1)];
			}

			$data = array(
				'id_modul' 	=> 	$id_modul,
				'id_peserta'=>	$id_peserta,
				'code'		=> 	$unique_kode);
			$this->Training_model->input($data);
//data email

			$where = array('id_modul' => $id_modul);
			$namamodul 	= $this->Modul_model->select_where($where)->row('nama'); //nama modul yang di join oleh peserta
			$where = array('id_peserta' => $id_peserta);
			$namapeserta= $this->Peserta_model->select_where($where)->row('nama'); //nama peserta yang join
			$where = array(
				'modul.id_trainer = trainer.id_trainer and modul.slug =' => $course
			);
			$email = $this->Modul_model->join_trainer($where)->row('email'); //email trainer
			echo $esmtp.$namapeserta.$namamodul;

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
			$this->email->subject('Join Course');
            // Message in email
			$message = '<html>
			<link href="https://fonts.googleapis.com/css?family=Lato:700%7CMontserrat:400,600" rel="stylesheet">
			<body style="font-family:"Montserrat", sans-serif;">
			<center>
			<div style="border: 1px solid black;padding: 20px;border-radius: 10px">
			<h3>GTC EduSite</h3>
			<p><b>'.$namapeserta.'</b>. telah bergabung di course <b>'.$namamodul.'</b></p>
			<a href='.base_url().'trainer/detailpeserta/'.$unique_kode.'><button style="border:none;padding:12px 20px 12px 20px; background-color: green;color: white">View</button></a>
			</div>
			</center>
			</body>
			</html>';
			$this->email->message($message);

			if ($this->email->send()) {
				redirect('homepage/startcourse/'.$course);
			}	
		}else{
			$this->load->view('Client/Pages/v_login');
		}
	}

	function certification(){
		$where = array(
			'unique_code' => $this->session->userdata('unique_code')
		);
		$profile = $this->Peserta_model->select_where($where)->result();
		$id_peserta = $this->Peserta_model->select_where($where)->row('id_peserta');
		$id_modul = $this->Modul_model->select_where(array('slug' => $this->uri->segment(3)))->row('id_modul');
		$id_sertifikasi = $this->Sertifikasi_model->select_where(array('id_modul' => $id_modul))->row('id_sertifikasi');
		$psertifikasi = $this->Psertifikasi_model->select_where(array('id_peserta' => $id_peserta, 'id_sertifikasi' => $id_sertifikasi));

		if($psertifikasi->num_rows() == 1){
			
			if($this->session->flashdata('sertifikasi')){

			}else{
				$this->session->set_flashdata('sertifikasi2','sudah');	
			}
		}

		foreach ($profile as $p) {
			$id_peserta = $p->id_peserta;
		}
		$slug = array(
			'slug' => $this->uri->segment(3));
		$id_modul = array(
			'id_modul' => $this->Modul_model->select_where($slug)->row('id_modul'));
		if($this->session->userdata('status') == 'login'){
			$where = array(
				'id_modul' 		=> $id_modul,
				'id_peserta'	=> $id_peserta);
		}

		$data = array(
			'profile'    	=> $profile,
			'banner'    	=> 'Certification Terms and Conditions',
			'sertifikasi'	=> $this->Sertifikasi_model->select_where($id_modul)->result(),
			'psertifikasi'	=> $psertifikasi,
			'course'		=> $this->Modul_model->select_where($id_modul)->row('nama'),	
			'content'    	=> 'Client/Pages/v_certification'
		);
		$this->load->view('Client/Layout/Wrapper',$data);

	}

	function daftarsertifikasi($slug){
		if($this->session->userdata('status') == 'login'){
			$where = array(
				'unique_code' => $this->session->userdata('unique_code'));
			$namapeserta = $this->Peserta_model->select_where($where)->row('nama');
			$slug = array('slug'=>$slug);
			$course = $this->Modul_model->select_where($slug)->row('nama');
			$id_trainer = array(
				'id_trainer' => $this->Modul_model->select_where($slug)->row('id_trainer'));
			$id_modul = array(
				'id_modul' => $this->Modul_model->select_where($slug)->row('id_modul'));
			$id_sertifikasi = $this->Sertifikasi_model->select_where($id_modul)->row('id_sertifikasi');
			$id_peserta = $this->Peserta_model->select_where($where)->row('id_peserta');
			$data = array(
				'id_sertifikasi'  => $id_sertifikasi,
				'id_peserta'	=> $id_peserta);
			$this->Psertifikasi_model->input($data);
			$email = $this->Admin_model->select()->row('email');
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
			$this->email->subject('Baru! Pendaftar Sertifikasi '.$course);
            // Message in email
			$message = '<html>
			<link href="https://fonts.googleapis.com/css?family=Lato:700%7CMontserrat:400,600" rel="stylesheet">
			<body style="font-family:"Montserrat", sans-serif;">
			<center>
			<div style="border: 1px solid black;padding: 20px;border-radius: 10px">
			<h3>GTC EduSite</h3>
			<p>'.$namapeserta.' telah mendaftar sertifikasi untuk kategori '.$course.'</p>
			<a href='.base_url().'trainer/detailpsertifikasi/'.$unique_code.'><button style="border:none;padding:12px 20px 12px 20px; background-color: green;color: white">View</button></a>
			</div>
			</center>
			</body>
			</html>';
			$this->email->message($message);
			if($this->email->send()){
				$this->session->set_flashdata('sertifikasi','berhasil');
			}
			redirect('homepage/certification/'.$this->uri->segment(3));
			
		}else{
			$this->load->view('Client/Pages/v_login');
		}
	}

	function quiz($slug){
		if($this->session->userdata('status') == 'login'){
			$where = array(
				'unique_code' => $this->session->userdata('unique_code')
			);
			$profile = $this->Peserta_model->select_where($where)->result();
			$id_peserta = $this->Peserta_model->select_where($where)->row('id_peserta');
			$where = array('slug' => $slug);
			$id_materi = $this->Materi_model->select_where($where)->row('id_materi');
			$where = array('id_materi' => $id_materi);
			$test = $this->Test_model->select_where($where)->result();
			$jumlahtes = $this->Test_model->select_where($where)->num_rows();


			$where = '';
			$kondisi = 1;
			foreach ($test as $t) {
				if($kondisi == 1){
					$x = '';
				}else{
					$x = ' or';
				}
				$where .= $x.' id_test = '.$t->id_test.' and id_peserta = '.$id_peserta;
				$kondisi++;
			}

			$result = $this->Result_model->select_where($where)->result();
			$data = array(
				'profile' => $profile,
				'banner' => "Quiz",
				'test' => $test,
				'result'	=> $result,
				'id_peserta' => $id_peserta,
				'jmltes'	=> $jumlahtes,
				'content' => 'Client/Pages/v_quiz'
			);
			$this->load->view('Client/Layout/Wrapper',$data);
		}else{
			$this->load->view('Client/Pages/v_login');
		}
	}

	function quizoverview($kategori,$slug){
		if($this->session->userdata('status') == 'login'){
			$where = array(
				'unique_code' => $this->session->userdata('unique_code')
			);
			$profile = $this->Peserta_model->select_where($where)->result();
			$where = array(
				'code' => $slug);
			$id_materi = $this->Test_model->select_where($where)->row('id_materi'); 
			$namamodul = $this->Materi_model->select_modul($id_materi)->row('namamodul');
			$where = array(
				'code' => $slug,
				'kategori'	=> $kategori);
			$soal = $this->Quiz_model->select_where($where)->row('id_test');
			$quiz= $this->Quiz_model->cekquiz($slug,$kategori);

			$data = array(
				'profile' => $profile,
				'banner' => "Start Quiz",
				'namamodul' => $namamodul,
				'quiz' => $quiz,
				'content' => 'Client/Pages/v_konfirmasiquiz'
			);
			$this->load->view('Client/Layout/Wrapper',$data);		
		}
	}

	function startquiz($kategori,$slug){
		if($this->session->userdata('unique_code') == FALSE){
			redirect(base_url());
		}
		$where = array(
			'unique_code' => $this->session->userdata('unique_code')
		);
		$profile = $this->Peserta_model->select_where($where)->result();
		$id_peserta = $this->Peserta_model->select_where($where)->row('id_peserta');
		$where = array('code' => $slug, 'kategori' => $kategori);
		$id_test = $this->Test_model->select_where($where)->row('id_test'); //id_test
		$where = array(
			'id_test' => $id_test);
		$tipesoal = $this->Test_model->select_where($where)->row('tipesoal');
		$soal = $this->Soal_model->select_soal($where)->result();

		//set session
		


		$where = array(
			'id_test' 		=> $id_test,
			'id_peserta'	=> $id_peserta
		);
		if($this->Result_model->select_where($where)->num_rows() > 0){
			redirect(base_url('homepage/startcourse/'.$this->session->userdata('course')));
		}
		$data = array('id_test' => $id_test, 'tipesoal' => $tipesoal);
		$this->session->set_userdata($data);

		$where = array('id_test' => $id_test);
		$waktu = $this->Quiz_model->select_where($where)->row('waktu') + 24;

		//start session
		if($this->session->userdata('quizend') == ''){
			if($tipesoal != 'file'){
				$newdata = array(
					'quizslug'  => $slug,
					'quizend' => date('M j, Y H:i:s',strtotime('+'.$waktu.' minutes')),
					'kategori'=> $kategori
				);
				$this->session->set_userdata($newdata);
			}
		}


		$data = array(
			'profile' => $profile,
			'banner' => "Start Quiz",
			'soal' => $soal,
			'tipesoal'	=> $tipesoal,
			'id_test'	=> $id_test,
			'content' => 'Client/Pages/v_startquiz'
		);
		$this->load->view('Client/Layout/Wrapper',$data);
	}

	function submit(){
		$this->session->unset_userdata(array('quizslug','quizend'));
		$where = array(
			'unique_code' => $this->session->userdata('unique_code')
		);
		$profile = $this->Peserta_model->select_where($where)->result();
			$id_peserta = $this->Peserta_model->select_where($where)->row('id_peserta'); //id_peserta
			$namapeserta = $this->Peserta_model->select_where($where)->row('nama'); //id_peserta

		$id_test = $this->session->userdata('id_test'); //id_test
		$where = array('id_test' => $id_test);
		$codetest = $this->Test_model->select_where($where)->row('code');
		$id_materi = $this->Test_model->select_where($where)->row('id_materi');
		$tipesoal = $this->session->userdata('tipesoal');

		$where = array(
			'id_test' 		=> $id_test,
			'id_peserta'	=> $id_peserta
		);
		if($this->Result_model->select_where($where)->num_rows() > 0){
			redirect(base_url('homepage/startcourse/'.$this->session->userdata('course')));
		}

		$where = array('id_materi' => $id_materi);
		$id_modul = $this->Materi_model->select_where($where)->row('id_modul');

		$where = array('id_modul' => $id_modul);
		$id_trainer = $this->Modul_model->select_where($where)->row('id_trainer');

		$where = array('id_trainer' => $id_trainer);
		$email = $this->Trainer_model->select_where($where)->row('email');

		$emailadmin = $this->Admin_model->select()->row('email');

		$where = array('id_peserta' => $id_peserta,'id_modul' => $id_modul);
		$codetraining = $this->Training_model->select_where($where)->row('code');

		$length = 15;
		$characters = '0123456789ABCDEFGHIJKLMNOPQRSTUVWXYZabcdefghijklmnopqrstuvwxyz';
		$charactersLength = strlen($characters);
		$unique_kode = '';

		for ($i = 0; $i < $length; $i++) {
			$unique_kode .= $characters[rand(0, $charactersLength - 1)]; //code
		}

		$data = array(
			'id_test' 		=> $id_test,
			'id_peserta'	=> $id_peserta,
			'code'			=> $unique_kode
		);

		$this->Result_model->input($data);
		$where = array(
			'id_test' 	=> $id_test,
			'id_peserta'=> $id_peserta
		);
		$id_result = $this->Result_model->select_where($where)->row('id_result');
		$where = array('id_test' => $id_test);
		$soal = $this->Soal_model->select_where($where)->result(); 
		$count = 0;
		$jmlnilai = 0;

		foreach ($soal as $s) {
			if($tipesoal == 'essay' || $tipesoal == 'multiple'){
				$nilai = 0;

				// if($s->benar == $this->input->post('jawaban'.$s->id_soal)){
				// 	$nilai = 1;
				// 	$jmlnilai = $jmlnilai + 1;
				// }

				if($this->input->post('jawaban'.$s->id_soal) == 'A'){
					$nilai = $s->bobot_a;
					$jmlnilai = $jmlnilai + $s->bobot_a;
				}elseif($this->input->post('jawaban'.$s->id_soal) == 'B'){
					$nilai = $s->bobot_b;
					$jmlnilai = $jmlnilai + $s->bobot_b;
				}elseif($this->input->post('jawaban'.$s->id_soal) == 'C'){
					$nilai = $s->bobot_c;
					$jmlnilai = $jmlnilai + $s->bobot_c;
				}else{
					$nilai = 0;
					$jmlnilai = $jmlnilai + $nilai;
				}

				$data = array(
					'id_result' => $id_result,
					'id_soal' 	=> $s->id_soal,
					'jawaban'   => $this->input->post('jawaban'.$s->id_soal),
					'nilai'		=> $nilai
				);
				$this->Jawaban_model->input($data);
				$count++;
			}else{
				$nilai = 0;

				$config['upload_path']	= './assets/video/';
				$config['max_size'] = '60000';
				$config['overwrite'] = TRUE;
				$config['allowed_types'] = 'mp4';
				$config['file_name'] = $codetest.'_'.$s->id_soal.'_'.$id_peserta;
				$this->load->library('upload',$config);
				$this->upload->initialize($config);
				if(! $this->upload->do_upload('jawaban'.$s->id_soal)){
					echo $this->upload->display_errors();
				}else{
					$pdf = $this->upload->data();
					$data = array(
						'id_result' => $id_result,
						'id_soal' 	=> $s->id_soal,
						'jawaban'   => $pdf['file_name'],
						'nilai'		=> $nilai
					);
					$this->Jawaban_model->input($data);
				}
				$count++;
			}
		}
		
		if($tipesoal == 'essay' || $tipesoal == 'file'){
			$data = array('nilai' => NULL,'status' => 'Sudah di kerjakan');
			$where = array(
				'id_test' 	=> $id_test,
				'id_peserta'=> $id_peserta

			);
			$this->Result_model->update($where,$data);
		}else{
			$nilaiakhir = $jmlnilai / $count;
			$nilaiakhir = number_format($nilaiakhir,2);
			$data = array('nilai' => $nilaiakhir,'status' => 'Sudah di kerjakan');
			$where = array(
				'id_test' 	=> $id_test,
				'id_peserta'=> $id_peserta

			);
			$this->Result_model->update($where,$data);
		}
		//kirim ke trainer
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
		$this->email->subject('Quiz GTC EduSite');
            // Message in email
		$message = '<html>
		<link href="https://fonts.googleapis.com/css?family=Lato:700%7CMontserrat:400,600" rel="stylesheet">
		<body style="font-family:"Montserrat", sans-serif;">
		<center>
		<div style="border: 1px solid black;padding: 20px;border-radius: 10px">
		<h3>GTC EduSite</h3>
		<p>'.$namapeserta.' telah menyelesaikan quiz, dan menunggu review anda segera !.</p>
		<a href='.base_url().'trainer/detailpeserta/'.$codetraining.'><button style="border:none;padding:12px 20px 12px 20px; background-color: green;color: white">Review</button></a>
		</div>
		</center>
		</body>
		</html>';
		$this->email->message($message);
		$this->email->send();

		//kirim ke admin
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
		$this->email->to($emailadmin);
            // Subject of email
		$this->email->subject('Quiz GTC EduSite');
            // Message in email
		$message = '<html>
		<link href="https://fonts.googleapis.com/css?family=Lato:700%7CMontserrat:400,600" rel="stylesheet">
		<body style="font-family:"Montserrat", sans-serif;">
		<center>
		<div style="border: 1px solid black;padding: 20px;border-radius: 10px">
		<h3>GTC EduSite</h3>
		<p>'.$namapeserta.' telah menyelesaikan quiz, dan menunggu review trainer !.</p>
		<a href='.base_url().'admin/detailpeserta/'.$codetraining.'><button style="border:none;padding:12px 20px 12px 20px; background-color: green;color: white">Review</button></a>
		</div>
		</center>
		</body>
		</html>';
		$this->email->message($message);
		$this->email->send();

		if($tipesoal == 'essay' || $tipesoal == 'file'){
			$this->session->set_flashdata('quiz','berhasil');
		}
		
		redirect(base_url('homepage/startcourse/'.$this->session->userdata('course')));
	}

	function review($code){
		$where = array(
			'unique_code' => $this->session->userdata('unique_code')
		);
		$profile = $this->Peserta_model->select_where($where)->result();
		$where = array('code' => $code);
		$result = $this->Result_model->select_where($where)->result();
		$id_result = $this->Result_model->select_where($where)->row('id_result');
		$id_test = $this->Result_model->select_where($where)->row('id_test');
		$where = array('id_test' => $id_test);
		$tipesoal = $this->Test_model->select_where($where)->row('tipesoal');
		$where = array('id_result' => $id_result);
		$jawaban = $this->Jawaban_model->join_soal($where)->result();
		$data = array(
			'profile' => $profile,
			'banner' => "Start Quiz",
			'tipesoal'	=> $tipesoal,
			'jawaban'	=> $jawaban,
			'content' => 'Client/Pages/v_reviewquiz'
		);
		$this->load->view('Client/Layout/Wrapper',$data);
	}

	function cek(){
		$sum = 1.2334234234;
		echo number_format($sum,2);
	}

	public function getChats(){
		header('Content-Type: application/json');
		if ($this->input->is_ajax_request()) {
            // Find friend
			$friend = $this->input->post('chatWith');

            // Get Chats
			$chats = $this->db
			->select('*')
			->from('chat')
			->where('chat.slug_modul',$friend)
			->order_by('chat.waktu', 'desc')
			->limit(100)
			->get()
			->result();

			$result = array(
				'name'	=> 'Chat',
				'chats' => $chats

			);
			echo json_encode($result);
		}
	}

	public function sendMessage()
	{
		$where = array(
			'unique_code'	=> $this->session->userdata('unique_code'));
		$profile = $this->Peserta_model->select_where($where)->result();
		$nama = $this->Peserta_model->select_where($where)->row('nama');
		$d = strtotime('+ 24 minutes');
		$this->db->insert('chat', array(
			'pesan' => htmlentities($this->input->post('message', true)),
			'slug_modul' => $this->input->post('chatWith'),
			'pengirim' => $nama,
			'waktu'    => date("Y-m-d H:i:s",$d)
		));
	}

	function uploadbuktibayar(){
		$peserta = $this->session->userdata('unique_code');
		$where = array('unique_code' => $peserta);
		$id_peserta = $this->Peserta_model->select_where($where)->row('id_peserta');
		$namapeserta = $this->Peserta_model->select_where($where)->row('nama');
		$slug = $this->input->post('course');
		$where = array('slug' => $slug);
		$id_modul = $this->Modul_model->select_where($where)->row('id_modul');
		$namamodul = $this->Modul_model->select_where($where)->row('nama');
		$where = array('id_modul' => $id_modul,'id_peserta' => $id_peserta);
		$id_training = $this->Training_model->select_where($where)->row('id_training');
		$emailadmin = $this->Admin_model->select()->row('email');

		$config['upload_path']	= './assets/buktibayar/';
		$config['allowed_types'] = 'jpg|jpeg|png';
		$config['file_name'] = $id_training;
		$this->load->library('upload',$config);
		if(! $this->upload->do_upload('berkas')){

			echo "error";
		}else{
			$gbr = $this->upload->data();
			$format = str_replace('image', '',$gbr['file_type']);
			$where = array('id_training' => $id_training);
			$data = array(
				'buktibayar' => $gbr['file_name']);
			$this->Training_model->update($where,$data);
			

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
			$this->email->to($emailadmin);
            // Subject of email
			$this->email->subject('Payment Verification');
            // Message in email
			$message = '<html>
			<link href="https://fonts.googleapis.com/css?family=Lato:700%7CMontserrat:400,600" rel="stylesheet">
			<body style="font-family:"Montserrat", sans-serif;">
			<center>
			<div style="border: 1px solid black;padding: 20px;border-radius: 10px">
			<h3>GTC EduSite</h3>
			<p>'.$namapeserta.' telah menyelesaikan pembayaran pada course <b>'.$namamodul.' </b>, dan menunggu verifikasi anda !.</p>
			<a href='.base_url().'admin/payment><button style="border:none;padding:12px 20px 12px 20px; background-color: green;color: white">Lihat</button></a>
			</div>
			</center>
			</body>
			</html>';
			$this->email->message($message);
			$this->email->send();

			redirect(base_url('homepage/startcourse/'.$slug));
		}
	}

	function show_forgotpwd(){
		$this->load->view('Client/Pages/v_forgotpwd');
	}

	function resetpassword(){
		$email = $this->input->post('email');

		$where = array('email' => $email);
		$cekpeserta = $this->Peserta_model->select_where($where)->num_rows();
		if($cekpeserta == 0){
			$this->session->set_flashdata('error','Reset password gagal, mungkin anda belum terdaftar.');

			redirect(base_url());
		}else{

			$length = 8;
			$characters = '0123456789ABCDEFGHIJKLMNOPQRSTUVWXYZ';
			$charactersLength = strlen($characters);
			$unique_kode = '';

			for ($i = 0; $i < $length; $i++) {
				$unique_kode .= $characters[rand(0, $charactersLength - 1)];
			}

			$where = array('email' => $email);
			$data = array('pass' => md5($unique_kode));
			$this->Peserta_model->update($where,$data);

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
			$this->email->subject('Reset Password');
            // Message in email
			$message = '<html>
			<link href="https://fonts.googleapis.com/css?family=Lato:700%7CMontserrat:400,600" rel="stylesheet">
			<body style="font-family:"Montserrat", sans-serif;">
			<center>
			<div style="border: 1px solid black;padding: 20px;border-radius: 10px">
			<h3>GTC EduSite</h3>
			<p>Anda telah berhasil mereset password anda.</p>
			<p>Email : <b>'.$email.'</b></p>
			<p>Password : <b>'.$unique_kode.'</b></p>
			<a href='.base_url().'><button style="border:none;padding:12px 20px 12px 20px; background-color: green;color: white">Login</button></a>
			</div>
			</center>
			</body>
			</html>';
			$this->email->message($message);
			$this->email->send();

			$this->session->set_flashdata('succes','Reset password berhasil, kami telah mengirim pesan ke email anda');

			redirect(base_url());
		}
	}

	function updatepassword(){
		if ($this->session->userdata('unique_code') != NULL) {
			$where = array(
			'unique_code' => $this->session->userdata('unique_code')
			);

			$data = array(
				'pass'	=> md5($this->input->post('pass')));
			$this->Peserta_model->update($where,$data);
			redirect(base_url('homepage/showprofile'));
		}
	}
}


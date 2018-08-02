<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Homepage extends CI_Controller {

	function __construct(){
		parent::__construct();
		$this->load->model(array('Peserta_model','Modul_model'));	
		$this->load->helper(array('form','url','file'));
		$this->load->library('pagination');
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
				'content'	=> 'client/pages/v_dashboard'
			);
			$this->load->view('client/layout/wrapper',$data);
		}else{
			$data['course'] = $this->Modul_model->select()->result();
			$this->load->view('client/pages/v_homepage',$data);
		}
	}

	function contact(){
		$where = array(
			'unique_code' => $this->session->userdata('unique_code')
		);
		if($this->session->userdata('status') == 'login'){
			$data['profile'] = $this->Peserta_model->select_where($where)->result();
			$this->load->view('client/pages/v_contact',$data);
		}else{
			$data['profile'] = null;
			$this->load->view('client/pages/v_contact',$data);
		}
		
	}

	function login(){
		$email = $this->input->post('email');
		$password = $this->input->post('pass');
		$where = array(
			'email' => $email,
			'pass' => md5($password)
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
			redirect(base_url());
		}
	}

	function login2(){
		$id_modul	= $this->input->post('id_modul');
		$email 		= $this->input->post('email');
		$password 	= $this->input->post('pass');
		$where = array(
			'email' => $email,
			'pass' => md5($password)
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
		redirect(base_url('homepage/startcourse/'.$id_modul));
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

		$length = 150;
		$characters = '0123456789ABCDEFGHIJKLMNOPQRSTUVWXYZabcdefghijklmnopqrstuvwxyz';
		$charactersLength = strlen($characters);
		$unique_kode = '';
		for ($i = 0; $i < $length; $i++) {
			$unique_kode .= $characters[rand(0, $charactersLength - 1)];
		}

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
			'img'			=> 'default.jpg'
		);

		$cek = $this->Peserta_model->input($data);
		redirect(base_url());
	}

	function detailcourse($slug){

		$where = array(
			'unique_code' => $this->session->userdata('unique_code')
		);
		$profile = $this->Peserta_model->select_where($where)->result();

		$where = array(
			'slug'    => $slug);


		$banner = $this->Modul_model->select_where($where)->row('nama');
		$modul = $this->Modul_model->select_where($where)->result();
		$category = $this->Modul_model->select_where($where)->row('category');

		$relatedcourse= $this->Modul_model->relatedcourse($category)->result();

		$data = array(
			'profile'    => $profile,
			'banner'    => $banner,
			'modul'        => $modul,
			'related'   => $relatedcourse,
			'content'    => 'client/pages/v_detailcourse'
		);
		$this->load->view('client/layout/wrapper',$data);
	}

	function showregister(){
		$this->load->view('client/pages/v_register');
	}

	function startcourse($slug){
		if($this->session->userdata('status') == 'login'){
			$where = array(
				'unique_code'	=> $this->session->userdata('unique_code'));
			$profile = $this->Peserta_model->select_where($where)->result();
			$where = array(
				'slug'	=> $slug);
			$banner = $this->Modul_model->select_where($where)->row('nama');
			$course = $this->Modul_model->selectcourse($slug)->result();
			$data = array(
				'content'	=> 'client/pages/v_course',
				'course'	=> $course,
				'banner'	=> $banner,
				'profile'	=> $profile
			);
			$this->load->view('client/layout/wrapper',$data);
		}else{
			$this->load->view('client/pages/v_login');
		}
	}

	function tes(){
		echo url_title('Title of Modul', 'dash', true);
	}

	function coursecatalog(){
		$category = $this->uri->segment(3);
		$limit_per_page = 4;
		if($this->uri->segment(4) == 0){
			$start_index = 0;
		}else{
			$start_index = $this->uri->segment(4) * 4 - 4;
		}
		$total_records = $this->Modul_model->countrow($category);
		if ($total_records > 0) 
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
		}


		$where = array(
			'unique_code' => $this->session->userdata('unique_code')
		);
		$profile = $this->Peserta_model->select_where($where)->result();
		$category = $this->Modul_model->selectcategory()->result();
		$recentpost= $this->Modul_model->recentpost($category)->result();
		$data = array(
			'profile'	=> $profile,
			'banner'	=> 'Course Catalog',
			'results'	=> $results,
			'links'		=> $links,
			'category'	=> $category,
			'recentpost'=> $recentpost,
			'content'	=> 'client/pages/v_coursecatalog'
		);
		$this->load->view('client/layout/wrapper',$data);
	}
}


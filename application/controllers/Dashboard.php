<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Dashboard extends CI_Controller {

	function __construct(){
		parent::__construct();
		$this->load->model(array('Peserta_model','Modul_model','Training_model'));
		$this->load->helper(array('form','url','file'));
		$status = $this->session->userdata("status");
		if($status !== "login"){
			redirect(base_url());
		}
	}

	function index()
	{
		$where = array('unique_code' => $this->session->userdata('unique_code'));
		$idpeserta = $this->Peserta_model->select_where($where)->row('id_peserta');

		$content = array(
			'title' 	=> 'Dashboard',
			'content' 	=> 'Pages/v_dashboard',
			'profile' 	=> $this->Peserta_model->select_where($where)->result(),
			'yourcourse'=> $this->Training_model->join_yourcourse($idpeserta)->result()
		);
		$this->load->view('Layout/Wrapper',$content);

	}

	function coursecatalog(){
		$where = array('unique_code' => $this->session->userdata('unique_code'));
		$content = array(
			'title' 	=> 'Course Catalog',
			'content'	=> 'Pages/v_coursecatalog',
			'profile' 	=> 	$this->Peserta_model->select_where($where)->result(),
			'modul'		=>	$this->Modul_model->select()->result());
		$this->load->view('Layout/Wrapper',$content);
	}

	function logout(){
		$this->session->sess_destroy();
		redirect(base_url());
	}

	function detailcourse($id){
		$where = array('unique_code' => $this->session->userdata('unique_code'));
		$idpeserta = $this->Peserta_model->select_where($where)->row('id_peserta');	
		$where2 = array(
			'id_modul' 		=> $id,
			'id_peserta'	=> $idpeserta
		);


		$content = array(
			'title'			=> 'Course Catalog',
			'content'  		=> 'Pages/v_detailcourse',
			'profile' 		=> $this->Peserta_model->select_where($where)->result(),
			'modul'			=> $this->Modul_model->select_where(array('id_modul' => $id))->result(),
			'cekregister'	=> $this->Training_model->cekregister($where2)->num_rows());
		$this->load->view('Layout/Wrapper',$content);
	}

	function course($idmodul){
		$where = array('unique_code' => $this->session->userdata('unique_code'));

		$content = array(
			'title'		=> 	'Course Catalog',
			'content'  	=> 	'Pages/v_course',
			'profile' 	=> 	$this->Peserta_model->select_where($where)->result(),
			'modul'		=>	$this->Modul_model->select()->result());
		$this->load->view('Layout/Wrapper',$content);
	}

	function registercourse($idmodul){
		$where = array('unique_code' => $this->session->userdata('unique_code'));
		$idpeserta = $this->Peserta_model->select_where($where)->row('id_peserta');	
		$data = array(
			'id_peserta'	=>	$idpeserta,
			'id_modul'		=>	$idmodul );
		$this->Training_model->input($data);

		redirect(base_url('dashboard/course/'.$idmodul));
	}

	function profile(){
		$where = array(
			'unique_code' => $this->session->userdata('unique_code')
		);
		$content = array(
			'title'		=> 'Profile',
			'content'	=> 'Pages/v_profile',
			'profile'	=> $this->Peserta_model->select_where($where)->result());

		$this->load->view('Layout/Wrapper',$content);

	}

	function editprofile($kode){
		$where = array(
			'unique_code' => $this->session->userdata('unique_code')
		);

		$content = array(
			'title' 	=> 'Profile',
			'content' 	=> 'Pages/v_editprofile',
			'profile' 	=> $this->Peserta_model->select_where($where)->result());
		$this->load->view('Layout/Wrapper',$content);
	}

	function editphoto($kode){
		$where = array(
			'unique_code' => $this->session->userdata('unique_code')
		);
		$content = array(
			'title' => 'Profile',
			'content' => 'Pages/v_editphotoprofile',
			'profile' => $this->Peserta_model->select_where($where)->result());
		$this->load->view('Layout/Wrapper',$content);
	}

	function uploadphoto(){ 
		$nama = $this->input->post('kode'); 
		$where = array( 'id_peserta' => $nama );
		$cekfoto = $this->Peserta_model->select_where($where)->result(); 
		foreach ($cekfoto as $c) {
			$hasil = $c->img;
		}
		if($hasil == ""){
			$config['upload_path']	= './assets/profile_photos/';
			$config['allowed_types'] = 'jpg|jpeg|png';
			$config['max_size'] = '2048';
			$config['max_width'] = '4048';
			$config['max_height'] = '4048';
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
				redirect(base_url('dashboard/profile'));
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

				echo "error";
			}else{
				$gbr = $this->upload->data();
				$format = str_replace('image', '',$gbr['file_type']);
				$where = array('id_peserta' => $nama);
				$data = array(
					'img' => $gbr['file_name']);
				$this->Peserta_model->insert_img($where,$data);
				redirect(base_url('dashboard/profile'));
			}
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
			'telp' 				=> $this->input->post('telepon'),
			'kantor' 			=> $this->input->post('nama_kantor'),
			'alamat_kantor' 	=> $this->input->post('alamat_kantor'),
			'telp_kantor' 		=> $this->input->post('telepon_kantor'),
			'biografi' 			=> $this->input->post('biografi')
		);

		$where 	= array('id_peserta' => $id);
		
		$this->Peserta_model->update($where,$data);
		redirect(base_url('dashboard/profile'));

	}
}

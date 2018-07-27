<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Dashboard extends CI_Controller {

	function __construct(){
		parent::__construct();
		$this->load->model('Peserta_model');

		$status = $this->session->userdata("status");
		if($status !== "login"){
			redirect(base_url());
		}
	}

	public function index()
	{
		$content = array(
			'title' => 'Dashboard',
			'content' => 'Pages/v_dashboard');
		$this->load->view('Layout/Wrapper',$content);

	}

	function coursecatalog(){
		$content = array(
			'title' 	=> 'Course Catalog',
			'content'	=> 'Pages/v_coursecatalog');
		$this->load->view('Layout/Wrapper',$content);
	}

	function logout(){
		$this->session->sess_destroy();
		redirect(base_url());
	}

	function detailcourse(){
		$content = array(
			'title'		=> 'Course Catalog',
			'content'  	=> 'Pages/v_detailcourse');
		$this->load->view('Layout/Wrapper',$content);
	}

	function course(){
		$content = array(
			'title'		=> 'Course Catalog',
			'content'  	=> 'Pages/v_course');
		$this->load->view('Layout/Wrapper',$content);
	}
}

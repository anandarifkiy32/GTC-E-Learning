<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Admin extends CI_Controller {

	function __construct(){
		parent::__construct();
		$this->load->model(array('Admin_model','Modul_model','Peserta_model','Training_model','Trainer_model','Company_model'));
	}

	function index()
	{
		$status = $this->session->userdata("status");
		if($status == "loginadmin"){
			redirect(base_url('Admin/Dashboard'));
		}else{
			$this->load->view('Admin/Login');
		}

	}

	function login(){
		$email = $this->input->post('email');
		$password = $this->input->post('pass');
		$where = array(
			'email' => $email,
			'pass' => md5($password)
		);
		$cek = $this->Admin_model->select_where($where)->num_rows();

		if($cek > 0){
			$data['session'] = $this->Admin_model->select_where($where)->result();
			foreach ($data['session'] as $s) {
				$nama    = $s->nama;
			}

			$data_session = array(
				'nama'    => $nama,
				'status'  => "loginadmin"
			);
			$this->session->set_userdata($data_session);
		redirect(base_url('Admin/Dashboard'));
		}else{
			$this->load->view('Admin/Login');
		}
	}

	function dashboard(){
		$content = array(
			'title' 	=> 'Dashboard',
			'subtitle'	=>'Dashboard',
			'content'	=> 'Admin/Pages/v_dashboard');
		$this->load->view('Admin/Layout/Wrapper',$content);
	}

	function peserta(){
		$peserta = $this->Peserta_model->select()->result();
		$content = array(
			'title' 	=> 'User',
			'subtitle' 	=> 'Peserta',
			'peserta' 	=> $peserta,
			'content'	=> 'Admin/Pages/v_peserta');
		$this->load->view('Admin/Layout/Wrapper',$content);
	}

	function show_peserta($unique_code){

        $where = array(
            'unique_code'    => $unique_code);

        $peserta = $this->Peserta_model->select_where($where)->result();
        $id_peserta = $this->Peserta_model->select_where($where)->row('id_peserta');
        $course = $this->Training_model->select_course($id_peserta)->result();
        $content = array(
            'title'       => 'User',
            'subtitle'    => 'Peserta',
            'id_peserta'  => $id_peserta,
            'peserta' 	  => $peserta,
            'course'	  => $course,
            'content'       => 'Admin/Pages/v_showpeserta'
        );
        $this->load->view('Admin/Layout/wrapper',$content);
    }

    function delete_peserta($unique_code){
    	$where = array(
    		'unique_code'	=> $unique_code);

    	$delete = $this->Peserta_model->delete($where);
		redirect('Admin/Peserta','refresh');
    }

	function trainer(){
		$trainer = $this->Trainer_model->select()->result();
		$content = array(
			'title' 	=> 'User',
			'subtitle' 	=> 'Trainer',
			'trainer'	=> $trainer,
			'content'	=> 'Admin/Pages/v_trainer');
		$this->load->view('Admin/Layout/Wrapper',$content);
	}

	function company(){
		$company = $this->Company_model->select()->result();
		$content = array(
			'title' 	=> 'User',
			'subtitle' 	=> 'Company',
			'company'	=> $company,
			'content'	=> 'Admin/Pages/v_company');
		$this->load->view('Admin/Layout/Wrapper',$content);
	}

	function modul(){
		$modul = $this->Modul_model->selectall()->result();
		$content = array(
			'title' 	=> 'Modul',
			'subtitle' 	=> '',
			'modul' 	=> $modul,
			'content'	=> 'Admin/Pages/v_modul');
		$this->load->view('Admin/Layout/Wrapper',$content);
	}

		

	 function logout(){
        $this->session->sess_destroy();
        redirect(base_url('Admin'));
    }
}
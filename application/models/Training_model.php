<?php 
class Training_model extends CI_Model{

	function select_where($where){
		return $this->db->get_where('training',$where);
	} 

	function select_course($where){
		$this->db->select('modul.nama as namamodul, modul.slug as slug');
		$this->db->from('training, peserta, modul');
		$this->db->where('peserta.id_peserta',$where);
		$this->db->where('training.id_modul = modul.id_modul AND training.id_peserta = peserta.id_peserta');
		return $this->db->get();
	}

	function update($where,$data){
		$this->db->where($where);
		$this->db->update('training',$data);
	}

	function select_peserta($where){
		$this->db->select('*');
		$this->db->from('training, peserta');
		$this->db->where('training.id_modul',$where);
		$this->db->where('training.id_peserta = peserta.id_peserta');
		return $this->db->get();
	}

	function input($data){
		$this->db->insert('training',$data);
	}

	function join_yourcourse($where){
		$this->db->select('*');
		$this->db->from('modul as m, training as t');
		$this->db->where('t.id_peserta',$where);
		$this->db->where('m.id_modul = t.id_modul');
		return $this->db->get();
	}

	function cekregister($where){
		return $this->db->get_where('training',$where);
	}

	function mycourses($id_peserta){
		$this->db->select('*');
		$this->db->from('training,modul');
		$this->db->where('training.id_peserta',$id_peserta);
		$this->db->where('training.id_modul = modul.id_modul');
		return $this->db->get();
	}

	function join_modul($where){
		$this->db->select('*');
		$this->db->where($where);
		$this->db->from('training, modul');
		return $this->db->get();
	}

	function detail_peserta($code){
		$this->db->select('*');
		$this->db->from('training, peserta');
		$this->db->where('training.code',$code);
		$this->db->where('training.id_peserta = peserta.id_peserta');
		return $this->db->get();
	}

	function delete($where){
		$this->db->where($where);
		$this->db->delete('training');
	}

	function select_peserta2(){
		$this->db->select('*');
		$this->db->from('training, peserta');
		$this->db->where('training.id_peserta = peserta.id_peserta');
		return $this->db->get();
	}

	function select_payment(){
		$this->db->select('training.code as code, peserta.nama as nama, modul.nama as namamodul, training.buktibayar as buktibayar');
		$this->db->from('training, modul, peserta');
		$this->db->where('training.status',0);
		$this->db->where('training.id_modul = modul.id_modul');
		$this->db->where('training.id_peserta = peserta.id_peserta');
		return $this->db->get();
	}

	function detail_payment($where){
		$this->db->select('training.code as code, peserta.nama as nama, modul.nama as namamodul, training.buktibayar as buktibayar,modul.biaya as biaya');
		$this->db->from('training, modul, peserta');
		$this->db->where('training.status',0);
		$this->db->where($where);
		$this->db->where('training.id_modul = modul.id_modul');
		$this->db->where('training.id_peserta = peserta.id_peserta');
		return $this->db->get();
	}
}
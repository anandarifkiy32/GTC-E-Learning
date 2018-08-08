<?php 
/**
 * 
 */
class Training_model extends CI_Model
{
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

	function select_where($where){
		return $this->db->get_where('training', $where);
	}

	function mycourses($id_peserta){
		$this->db->select('*');
		$this->db->from('training,modul');
		$this->db->where('training.id_peserta',$id_peserta);
		$this->db->where('training.id_modul = modul.id_modul');
		return $this->db->get();
	}

	function select_course($where){
		$this->db->select('modul.nama as namamodul');
		$this->db->from('training, peserta, modul');
		$this->db->where('peserta.id_peserta',$where);
		$this->db->where('training.id_modul = modul.id_modul AND training.id_peserta = peserta.id_peserta');
		return $this->db->get();
	}

	function select_peserta($where){
		$this->db->select('*');
		$this->db->from('training, peserta');
		$this->db->where('training.id_peserta = peserta.id_peserta');
		$this->db->where('training.id_modul',$where);
		return $this->db->get();
	}

	function detail_peserta($code){
		$this->db->select('*');
		$this->db->from('training, peserta');
		$this->db->where('training.code',$code);
		$this->db->where('training.id_peserta = peserta.id_peserta');
		return $this->db->get();
	}

	function join_modul($where){
		$this->db->select('*');
		$this->db->where($where);
		$this->db->from('training, modul');
		return $this->db->get();
	}

	function delete($where){
		$this->db->where($where);
		$this->db->delete('training');
	}

}
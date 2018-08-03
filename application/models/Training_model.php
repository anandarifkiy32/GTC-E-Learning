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

}
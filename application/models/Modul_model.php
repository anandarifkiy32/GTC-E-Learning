<?php

/**
 * 
 */
class Modul_model extends CI_Model
{
	
	function select(){
		$this->db->order_by('id_modul', 'DESC');
		$this->db->limit(8);
		return $this->db->get('modul');
	}

	function select_where($where){
		return $this->db->get_where('modul', $where);
	}

	function selectcourse($where){
		$this->db->select('mdl.nama as namamodul, mtr.judul as materi, mtr.description as description, mtr.konten as konten');
		$this->db->from('modul as mdl, materi as mtr');
		$this->db->where('mdl.id_modul',$where);
		$this->db->where('mdl.id_modul = mtr.id_modul');
		return $this->db->get();
	}
}
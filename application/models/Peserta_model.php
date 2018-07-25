<?php 
class Peserta_model extends CI_Model{

	function login($where){
		return $this->db->get_where('peserta', $where);
	}

}
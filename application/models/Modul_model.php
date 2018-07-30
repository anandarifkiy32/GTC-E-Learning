<?php

/**
 * 
 */
class Modul_model extends CI_Model
{
	
	function select(){
		return $this->db->get('modul');
	}

	function select_where($where){
		return $this->db->get_where('modul', $where);
	}



}
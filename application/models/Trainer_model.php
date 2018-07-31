<?php
class Trainer_model extends CI_Model{

	function select_where($where){
		return $this->db->get_where('trainer', $where);
	}

	function input($data){
		$this->db->insert('trainer',$data);
	} 
}
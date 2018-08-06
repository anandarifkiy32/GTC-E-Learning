<?php
class Result_model extends CI_Model{

	function select_where($where){
		return $this->db->get_where('result', $where);
	}

	function input($data){
		$this->db->insert('result',$data);
	} 
}
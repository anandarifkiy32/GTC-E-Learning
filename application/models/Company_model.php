<?php
class Company_model extends CI_Model{

	function select_where($where){
		return $this->db->get_where('company', $where);
	}

	function select(){
		return $this->db->get('company');
	}

	function input($data){
		$this->db->insert('company',$data);
	}
}
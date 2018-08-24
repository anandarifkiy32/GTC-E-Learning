<?php 
class Admin_model extends CI_Model{

	function select_where($where){
		return $this->db->get_where('admin', $where);
	}

}
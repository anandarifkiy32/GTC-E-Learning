<?php 
class Admin_model extends CI_Model{

	function select_where($where){
		return $this->db->get_where('admin', $where);
	}

	function select(){
		return $this->db->get('admin');
	}

	function update($where,$data){
		$this->db->where($where);
		$this->db->update('admin',$data);
	}

}
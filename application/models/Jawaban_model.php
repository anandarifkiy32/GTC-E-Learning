<?php
class Jawaban_model extends CI_Model{

	function select_where($where){
		return $this->db->get_where('jawaban', $where);
	}

	function input($data){
		$this->db->insert('jawaban',$data);
	}

	function update($where,$data){
		$this->db->where($where);
		$this->db->update('jawaban',$data);
	} 
}
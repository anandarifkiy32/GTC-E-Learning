<?php
class Jawaban_model extends CI_Model{

	function select_where($where){
		return $this->db->get_where('jawaban', $where);
	}


	function input($data){
		$this->db->insert('jawaban',$data);
	} 
}
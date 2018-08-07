<?php
class Soal_model extends CI_Model{

	function select_where($where){
		return $this->db->get_where('soal', $where);
	}


	function input($data){
		$this->db->insert('soal',$data);
	} 
}
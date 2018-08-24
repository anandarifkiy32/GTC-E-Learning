<?php 
class Soal_model extends CI_Model
{
	function input($data){
		$this->db->insert('soal',$data);
	} 

	function delete($where){
		$this->db->where($where);
		$this->db->delete('soal');
	}

	function update($where,$data){
		$this->db->where($where);
		$this->db->update('soal',$data);
	}

	function select_where($where){
		return $this->db->get_where('soal', $where);
	}

}
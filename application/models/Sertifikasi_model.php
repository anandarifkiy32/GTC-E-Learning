<?php 
class Sertifikasi_model extends CI_Model
{
	function select(){
		return $this->db->get('sertifikasi');
	}

	function select_where($where){
		return $this->db->get_where('sertifikasi',$where);
	}

	function update($where,$data){
		$this->db->where($where);
		$this->db->update('sertifikasi',$data);
	}

	function input($data){
		$this->db->insert('sertifikasi',$data);
	} 

	function delete($where){
		$this->db->where($where);
		$this->db->delete('sertifikasi');
	}
}
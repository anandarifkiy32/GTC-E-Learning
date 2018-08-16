<?php 
class Peserta_model extends CI_Model{

	function select_where($where){
		return $this->db->get_where('peserta', $where);
	}

	function select(){
		return $this->db->get('peserta');
	}

	function input($data){
		$this->db->insert('peserta',$data);
	} 

	function insert_img($where,$data){
		$this->db->where($where);
		$this->db->update('peserta',$data);
	}

	function update($where,$data){
		$this->db->where($where);
		$this->db->update('peserta',$data);
	}

	function delete($where){
		$this->db->where($where);
		$this->db->delete('peserta');
	}

}
<?php 
class Peserta_model extends CI_Model{

	function select_where($where){
		return $this->db->get_where('peserta', $where);
	}

	function input($data){
		$this->db->insert('peserta',$data);
	} 

	function update($where,$data){
		$this->db->where($where);
		$this->db->update('peserta',$data);
	}

	function select(){
		$this->db->order_by('id_peserta','DESC');
		return $this->db->get('peserta');
	}

	function delete($where){
		$this->db->where($where);
		$this->db->delete('peserta');
	}

	function insert_img($where,$data){
		$this->db->where($where);
		$this->db->update('peserta',$data);
	}

}
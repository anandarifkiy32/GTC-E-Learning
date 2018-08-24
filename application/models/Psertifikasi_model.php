<?php 
class Psertifikasi_model extends CI_Model
{
	function select(){
		return $this->db->get('psertifikasi');
	}

	function select_where($where){
		return $this->db->get_where('psertifikasi',$where);
	}

	function update($where,$data){
		$this->db->where($where);
		$this->db->update('psertifikasi',$data);
	}

	function input($data){
		$this->db->insert('psertifikasi',$data);
	} 

	function delete($where){
		$this->db->where($where);
		$this->db->delete('psertifikasi');
	}
}
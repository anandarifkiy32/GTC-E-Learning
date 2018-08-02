<?php 
/**
 * 
 */
class Materi_model extends CI_Model
{
	function select(){
		return $this->db->get('materi');
	}

	function select_where($where){
		return $this->db->get_where('materi',$where);
	}

	function update($where,$data){
		$this->db->where($where);
		$this->db->update('materi',$data);
	}

	function input($data){
		$this->db->insert('materi',$data);
	} 

	function delete($where){
		$this->db->where($where);
		$this->db->delete('materi');
	}
}
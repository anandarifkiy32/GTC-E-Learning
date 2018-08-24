<?php 
class Trainer_model extends CI_Model{

	function select(){
		$this->db->order_by('nama','DESC');
		return $this->db->get('trainer');
	}

	function select_where($where){
		return $this->db->get_where('trainer', $where);
	}

	function input($data){
		$this->db->insert('trainer',$data);
	} 
	function update($where,$data){
		$this->db->where($where);
		$this->db->update('trainer',$data);
	}

	function delete($where){
		$this->db->where($where);
		$this->db->delete('trainer');
	}

}

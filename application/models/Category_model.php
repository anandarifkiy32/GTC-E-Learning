<?php
class Category_model extends CI_Model{

	function select(){
		return $this->db->get('category');
	} 

	function input($data){
		$this->db->insert('category',$data);
	} 

	function delete($where){
		$this->db->where($where);
		$this->db->delete('category');
	}

	function update($where,$data){
		$this->db->where($where);
		$this->db->update('category',$data);
	}

	function select_where($where){
		return $this->db->get_where('category', $where);
	}

}
?>
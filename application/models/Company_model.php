<?php 
class Company_model extends CI_Model{

	function select(){
		$this->db->order_by('nama','DESC');
		return $this->db->get('company');
	}

	function select_where($where){
		return $this->db->get_where('company', $where);
	}

	function input($data){
		$this->db->insert('company',$data);
	} 

	function update($where,$data){
		$this->db->where($where);
		$this->db->update('company',$data);
	}

	function delete($where){
		$this->db->where($where);
		$this->db->delete('company');
	}
}
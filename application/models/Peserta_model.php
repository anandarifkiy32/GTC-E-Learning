<?php 
class Peserta_model extends CI_Model{

	function select_where($where){
		return $this->db->get_where('peserta', $where);
	}

	function input($data){
		$this->db->insert('peserta',$data);
	} 


}
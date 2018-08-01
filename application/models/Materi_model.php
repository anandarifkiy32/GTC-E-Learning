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
}
<?php 
class Event_model extends CI_Model{

	function select(){
		$this->db->order_by('id_event','DESC');
		$this->db->limit(4);
		return $this->db->get('event');
	}

	function select_where($where){
		return $this->db->get_where('event',$where);
	} 

	function select_all(){
		$this->db->order_by('id_event','DESC');
		return $this->db->get('event');
	}

}
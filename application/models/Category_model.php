<?php
class Category_model extends CI_Model{

	function select(){
		return $this->db->get('category');
	}
}
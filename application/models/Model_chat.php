<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Model_chat extends CI_Model {

	function getAll($where)
	{
		$this->db->where($where);
		$this->db->order_by("waktu","ASC");
		return $this->db->get("chat");
	}
	
	function getInsert($data){
		return $this->db->set($data)->insert("chat");
	}
	
	function getLastId($where){
		return $this->db->where($where)->order_by("id_chat","DESC")->limit(1)->get("chat")->row_array();
	}
}

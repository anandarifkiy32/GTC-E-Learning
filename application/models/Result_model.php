<?php
class Result_model extends CI_Model{

	function select_where($where){
		return $this->db->get_where('result', $where);
	}

	function input($data){
		$this->db->insert('result',$data);
	} 

	function select_quiz($where){
		$this->db->select('*');
		$this->db->from('result, materi, test');
		$this->db->where($where);
		$this->db->where('result.id_test = test.id_test');
		$this->db->where('test.id_materi = materi.id_materi');
		return $this->db->get();
		// return $this->db->query($where);
	}

	function join_jawaban_soal($where){
		$this->db->select('*');
		$this->db->where($where);
		$this->db->from('result, jawaban, soal');
		return $this->db->get();
	}

	function update($where,$data){
		$this->db->where($where);
		$this->db->update('result',$data);
	} 

}
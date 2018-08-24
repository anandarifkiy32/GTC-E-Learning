<?php
class Jawaban_model extends CI_Model{

	function select_where($where){
		return $this->db->get_where('jawaban', $where);
	}

	function input($data){
		$this->db->insert('jawaban',$data);
	}

	function update($where,$data){
		$this->db->where($where);
		$this->db->update('jawaban',$data);
	} 

	function delete($where){
		$this->db->where($where);
		$this->db->delete('jawaban');
	}

<<<<<<< HEAD
=======

>>>>>>> 7757c236da80c647f64a8b4fc19d07e5ae803fe3
	function join_soal($where){
		$this->db->select('*');
		$this->db->from('jawaban,soal');
		$this->db->where('jawaban.id_soal = soal.id_soal');
		$this->db->where($where);
		return $this->db->get();
	}
}
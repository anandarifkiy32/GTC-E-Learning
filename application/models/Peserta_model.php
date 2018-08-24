<?php 
class Peserta_model extends CI_Model{

	function select_where($where){
		return $this->db->get_where('peserta', $where);
	}

	function select(){
		return $this->db->get('peserta');
	}

	function input($data){
		$this->db->insert('peserta',$data);
	} 

<<<<<<< HEAD
	function update($where,$data){
=======
	function insert_img($where,$data){
>>>>>>> 7757c236da80c647f64a8b4fc19d07e5ae803fe3
		$this->db->where($where);
		$this->db->update('peserta',$data);
	}

<<<<<<< HEAD
	function select(){
		$this->db->order_by('id_peserta','DESC');
		return $this->db->get('peserta');
=======
	function update($where,$data){
		$this->db->where($where);
		$this->db->update('peserta',$data);
>>>>>>> 7757c236da80c647f64a8b4fc19d07e5ae803fe3
	}

	function delete($where){
		$this->db->where($where);
		$this->db->delete('peserta');
	}
<<<<<<< HEAD

	function insert_img($where,$data){
		$this->db->where($where);
		$this->db->update('peserta',$data);
	}
=======
>>>>>>> 7757c236da80c647f64a8b4fc19d07e5ae803fe3

}
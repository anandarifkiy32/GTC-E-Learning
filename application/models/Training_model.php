<?php 
<<<<<<< HEAD
class Training_model extends CI_Model{

	function select_where($where){
		return $this->db->get_where('training',$where);
	} 

	function select_course($where){
		$this->db->select('modul.nama as namamodul');
		$this->db->from('training, peserta, modul');
		$this->db->where('peserta.id_peserta',$where);
		$this->db->where('training.id_modul = modul.id_modul AND training.id_peserta = peserta.id_peserta');
		return $this->db->get();
	}

	function select_peserta($where){
		$this->db->select('*');
		$this->db->from('training, peserta');
		$this->db->where('training.id_modul',$where);
		$this->db->where('training.id_peserta = peserta.id_peserta');
		return $this->db->get();
	}

=======
/**
 * 
 */
class Training_model extends CI_Model
{
>>>>>>> 7757c236da80c647f64a8b4fc19d07e5ae803fe3
	function input($data){
		$this->db->insert('training',$data);
	}

	function join_yourcourse($where){
		$this->db->select('*');
		$this->db->from('modul as m, training as t');
		$this->db->where('t.id_peserta',$where);
		$this->db->where('m.id_modul = t.id_modul');
		return $this->db->get();
	}

	function cekregister($where){
		return $this->db->get_where('training',$where);
	}

<<<<<<< HEAD
=======
	function select_where($where){
		return $this->db->get_where('training', $where);
	}

>>>>>>> 7757c236da80c647f64a8b4fc19d07e5ae803fe3
	function mycourses($id_peserta){
		$this->db->select('*');
		$this->db->from('training,modul');
		$this->db->where('training.id_peserta',$id_peserta);
		$this->db->where('training.id_modul = modul.id_modul');
		return $this->db->get();
	}

<<<<<<< HEAD
	function join_modul($where){
		$this->db->select('*');
		$this->db->where($where);
		$this->db->from('training, modul');
=======
	function select_course($where){
		$this->db->select('modul.nama as namamodul');
		$this->db->from('training, peserta, modul');
		$this->db->where('peserta.id_peserta',$where);
		$this->db->where('training.id_modul = modul.id_modul AND training.id_peserta = peserta.id_peserta');
		return $this->db->get();
	}

	function select_peserta($where){
		$this->db->select('*');
		$this->db->from('training, peserta');
		$this->db->where('training.id_peserta = peserta.id_peserta');
		$this->db->where('training.id_modul',$where);
>>>>>>> 7757c236da80c647f64a8b4fc19d07e5ae803fe3
		return $this->db->get();
	}

	function detail_peserta($code){
		$this->db->select('*');
		$this->db->from('training, peserta');
		$this->db->where('training.code',$code);
		$this->db->where('training.id_peserta = peserta.id_peserta');
		return $this->db->get();
	}

<<<<<<< HEAD
=======
	function join_modul($where){
		$this->db->select('*');
		$this->db->where($where);
		$this->db->from('training, modul');
		return $this->db->get();
	}

>>>>>>> 7757c236da80c647f64a8b4fc19d07e5ae803fe3
	function delete($where){
		$this->db->where($where);
		$this->db->delete('training');
	}

}
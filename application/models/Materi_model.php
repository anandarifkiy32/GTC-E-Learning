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

	function update($where,$data){
		$this->db->where($where);
		$this->db->update('materi',$data);
	}

	function input($data){
		$this->db->insert('materi',$data);
	} 

	function delete($where){
		$this->db->where($where);
		$this->db->delete('materi');
	}

	function select_modul($where){
		$this->db->select('modul.nama as namamodul');
		$this->db->from('materi, modul');
		$this->db->where('materi.id_materi',$where);
		$this->db->where('materi.id_modul = modul.id_modul');
		return $this->db->get();
	}
}
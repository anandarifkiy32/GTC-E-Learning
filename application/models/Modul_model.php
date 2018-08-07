<?php

/**
 * 
 */
class Modul_model extends CI_Model
{
	
	function select(){
		$this->db->order_by('id_modul', 'DESC');
		$this->db->limit(8);
		return $this->db->get('modul');
	}

	function select_where($where){
		return $this->db->get_where('modul', $where);
	}

	function selectcourse($where){
		$this->db->select('mdl.nama as namamodul, mtr.judul as materi, mtr.description as description, mtr.konten as konten, mtr.id_materi as id_materi, mtr.slug as slug');
		$this->db->from('modul as mdl, materi as mtr');
		$this->db->where('mdl.slug',$where);
		$this->db->where('mdl.id_modul = mtr.id_modul');
		return $this->db->get();
	}

	function countrow($where){
		if($where == 'all'){
			$where = '';
		}else{
			$this->db->where('category',$where);
		}
		
		return $this->db->get('modul')->num_rows();
	}

	function delete($where){
		$this->db->where($where);
		$this->db->delete('modul');
	}

	function get_current_page_records($where,$limit, $start) 
	{
		$this->db->limit($limit, $start);
		$this->db->select('trainer.nama as namatrainer, modul.nama as namamodul, modul.img as img, modul.slug as slug');
		$this->db->order_by('id_modul', 'DESC');
		if($where == 'all'){
			$where = '';
		}else{
			$this->db->where('modul.category',$where);	
		}
		$this->db->where('modul.id_trainer = trainer.id_trainer');
		$this->db->from('trainer, modul');
		return $this->db->get();
	}

	function relatedcourse($where){
		$this->db->select('mdl.nama as namamodul, mdl.img as image, tnr.nama as namatrainer,mdl.slug as slug');
		$this->db->from('modul as mdl, trainer as tnr');
		$this->db->limit(4);
		$this->db->where('mdl.category',$where);
		$this->db->where('mdl.id_trainer = tnr.id_trainer');
		return $this->db->get();
	}

	function recentpost(){
		$this->db->select('trainer.nama as namatrainer, modul.nama as namamodul, modul.img as img, modul.slug as slug, modul.img as img');
		$this->db->order_by('id_modul', 'DESC');
		$this->db->limit(4);
		$this->db->from('trainer, modul');
		$this->db->where('trainer.id_trainer = modul.id_trainer');

		return $this->db->get('');
	}

	function selectcategory(){
		$this->db->select('category as category, COUNT(nama) as jumlah');
		$this->db->group_by('category');
		$this->db->limit(4);
		return $this->db->get('modul');
	}

	function update($where,$data){
		$this->db->where($where);
		$this->db->update('modul',$data);
	}

	function selectall(){
		$this->db->select('trainer.nama as namatrainer, modul.nama as namamodul, modul.category as category, modul.slug');
		$this->db->from('trainer, modul');
		$this->db->where('modul.id_trainer = trainer.id_trainer');
		$this->db->order_by('id_modul','DESC');
		return $this->db->get();
	}

	function input($data){
		$this->db->insert('modul',$data);
	}

	function join_trainer($where){
		$this->db->select('*');
		$this->db->where($where);
		$this->db->from('modul, trainer');
		return $this->db->get();
	}

}
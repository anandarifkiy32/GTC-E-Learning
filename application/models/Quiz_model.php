<?php
class Quiz_model extends CI_Model{

	function select_where($where){
		return $this->db->get_where('test',$where);
	} 

	function soal($where){
		$this->db->select('soal.pertanyaan as soal, trainer.nama as namatrainer, COUNT(soal.pertanyaan) as totalsoal, materi.judul as namamateri, materi.slug as slug, test.waktu as waktu');
		$this->db->from('test, soal, trainer, materi');
		$this->db->where('test.id_test',$where);
		$this->db->where('test.id_test = soal.id_test AND trainer.id_trainer = test.id_trainer AND test.id_materi = materi.id_materi');
		return $this->db->get();
	}

	function cekquiz($id_materi){
		$this->db->select('DISTINCT(modul.nama),materi.judul, test.waktu, count(soal.id_soal) as jml_soal, materi.slug as slug');
		$this->db->from('test,materi,modul,soal');
		$this->db->where('test.id_materi',$id_materi);
		$this->db->where('test.id_materi = materi.id_materi and modul.id_modul = materi.id_modul and soal.id_test = test.id_test');
		return $this->db->get();
	}

	function getsoal($slug){
		$this->db->select('soal.id_soal, soal.pertanyaan');
		$this->db->from('test,materi,soal');
		$this->db->where('materi.slug',$slug);
		$this->db->where('test.id_materi = materi.id_materi');
		$this->db->where('test.id_test = soal.id_test');
		return $this->db->get();
	}

	function pertanyaan($where){
		$this->db->select('soal.pertanyaan as soal, soal.tipe as tipe, soal.id_soal as id_soal');
		$this->db->from('soal, test');
		$this->db->where('test.id_test',$where);
		$this->db->where('test.id_test = soal.id_test');
		return $this->db->get();
	}



}
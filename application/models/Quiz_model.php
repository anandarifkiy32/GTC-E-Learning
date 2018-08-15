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

	function cekquiz($code,$kategori){
		$this->db->select('DISTINCT(modul.nama),materi.judul, test.waktu, count(soal.id_soal) as jml_soal, materi.slug as slug, test.code as code');
		$this->db->from('test,materi,modul,soal');
		$this->db->where('test.code',$code);
		$this->db->where('test.kategori',$kategori);
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

	function quizkategori($where){
		$this->db->select('test.kategori as kategori, test.waktu as waktu, test.id_test as id_test, materi.id_materi, test.tipesoal as tipesoal, test.code as code');
		$this->db->from('materi, test');
		$this->db->where('test.id_materi',$where);
		$this->db->where('test.id_materi = materi.id_materi');
		return $this->db->get();
	}

	function pertanyaan($where){
		$this->db->select('soal.pertanyaan as pertanyaan, soal.a as a, soal.b as b, soal.c as c, soal.benar as benar, test.waktu as waktu, test.kategori as kategori, test.tipesoal as tipesoal, soal.id_soal as id_soal, soal.bobot_a as bobot_a, soal.bobot_b as bobot_b, soal.bobot_c as bobot_c');
		$this->db->from('soal, test');
		$this->db->where('test.id_test',$where);
		$this->db->where('test.id_test = soal.id_test');
		return $this->db->get();
	}



}
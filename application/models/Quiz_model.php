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
}
<<<<<<< HEAD
<?php 
class Test_model extends CI_Model
{
	function input($data){
		$this->db->insert('test',$data);
	} 


	function select_where($where){
		return $this->db->get_where('test',$where);
	}

	function select($where){
		$this->db->select('materi.judul as judul, trainer.nama as namatrainer, test.waktu as waktu, test.id_materi as id_materi, test.id_trainer as id_trainer');
		$this->db->from('materi, trainer, test');
		$this->db->where('test.id_test',$where);
		$this->db->where('test.id_materi = materi.id_materi AND test.id_trainer = trainer.id_trainer');
		return $this->db->get();
	}

	function update($where,$data){
		$this->db->where($where);
		$this->db->update('test',$data);
	}

	function delete($where){
		$this->db->where($where);
		$this->db->delete('test');
	}

	function cekpretes($where){
		$this->db->select('*');
		$this->db->from('test,result');
		$this->db->where($where);
		return $this->db->get();
	}
=======
<?php
class Test_model extends CI_Model
{
    function input($data){
        $this->db->insert('test',$data);
    }

    function select_where($where){
        return $this->db->get_where('test',$where);
    }

    function select($where){
        $this->db->select('materi.judul as judul, trainer.nama as namatrainer, test.waktu as waktu, test.id_materi as id_materi, test.id_trainer as id_trainer');
        $this->db->from('materi, trainer, test');
        $this->db->where('test.id_test',$where);
        $this->db->where('test.id_materi = materi.id_materi AND test.id_trainer = trainer.id_trainer');
        return $this->db->get();
    }

    function update($where,$data){
        $this->db->where($where);
        $this->db->update('test',$data);
    }

    function delete($where){
        $this->db->where($where);
        $this->db->delete('test');
    }

    function join_soal($where){
        $this->db->select('*');
        $this->db->from('test, soal');
        $this->db->where($where);
        return $this->db->get();
    }

    function cekpretes($where){
        $this->db->select('*');
        $this->db->from('test,result');
        $this->db->where($where);
        return $this->db->get();
    }
>>>>>>> 7757c236da80c647f64a8b4fc19d07e5ae803fe3
}
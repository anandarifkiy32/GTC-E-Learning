<<<<<<< HEAD
<?php 
class Soal_model extends CI_Model
{
	function input($data){
		$this->db->insert('soal',$data);
	} 

	function delete($where){
		$this->db->where($where);
		$this->db->delete('soal');
	}

	function update($where,$data){
		$this->db->where($where);
		$this->db->update('soal',$data);
	}

	function select_where($where){
		return $this->db->get_where('soal', $where);
	}

=======
<?php
class Soal_model extends CI_Model
{
function input($data){
$this->db->insert('soal',$data);
}

function delete($where){
    $this->db->where($where);
    $this->db->delete('soal');
}

function update($where,$data){
    $this->db->where($where);
    $this->db->update('soal',$data);
}

function select_where($where){
    return $this->db->get_where('soal', $where);
}
function select_soal($where){
	$this->db->order_by('title','RANDOM');
    return $this->db->get_where('soal', $where);
}
>>>>>>> 7757c236da80c647f64a8b4fc19d07e5ae803fe3
}
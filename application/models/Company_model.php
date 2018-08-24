<<<<<<< HEAD
<?php 
class Company_model extends CI_Model{

	function select(){
		$this->db->order_by('nama','DESC');
		return $this->db->get('company');
	}

=======
<?php
class Company_model extends CI_Model{

>>>>>>> 7757c236da80c647f64a8b4fc19d07e5ae803fe3
	function select_where($where){
		return $this->db->get_where('company', $where);
	}

<<<<<<< HEAD
	function input($data){
		$this->db->insert('company',$data);
	} 

	function update($where,$data){
		$this->db->where($where);
		$this->db->update('company',$data);
	}

	function delete($where){
		$this->db->where($where);
		$this->db->delete('company');
=======
	function select(){
		return $this->db->get('company');
	}

	function input($data){
		$this->db->insert('company',$data);
>>>>>>> 7757c236da80c647f64a8b4fc19d07e5ae803fe3
	}
}
<<<<<<< HEAD
<?php 
class Trainer_model extends CI_Model{

	function select(){
		$this->db->order_by('nama','DESC');
		return $this->db->get('trainer');
	}

=======
<?php
class Trainer_model extends CI_Model{

>>>>>>> 7757c236da80c647f64a8b4fc19d07e5ae803fe3
	function select_where($where){
		return $this->db->get_where('trainer', $where);
	}

	function input($data){
		$this->db->insert('trainer',$data);
	} 
<<<<<<< HEAD
=======

	function select(){
		$this->db->order_by('nama','DESC');
		return $this->db->get('trainer');
	}
>>>>>>> 7757c236da80c647f64a8b4fc19d07e5ae803fe3
	function update($where,$data){
		$this->db->where($where);
		$this->db->update('trainer',$data);
	}
<<<<<<< HEAD

	function delete($where){
		$this->db->where($where);
		$this->db->delete('trainer');
	}

}
=======
}
>>>>>>> 7757c236da80c647f64a8b4fc19d07e5ae803fe3

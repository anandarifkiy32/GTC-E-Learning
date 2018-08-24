<?php
class Category_model extends CI_Model{

	function select(){
		return $this->db->get('category');
<<<<<<< HEAD
	} 

	function input($data){
		$this->db->insert('category',$data);
	} 

	function delete($where){
		$this->db->where($where);
		$this->db->delete('category');
=======
>>>>>>> 7757c236da80c647f64a8b4fc19d07e5ae803fe3
	}

	function update($where,$data){
		$this->db->where($where);
		$this->db->update('category',$data);
	}

	function select_where($where){
		return $this->db->get_where('category', $where);
	}

<<<<<<< HEAD
}
?>
=======
	function input($data){
		$this->db->insert('category',$data);
	}

	function delete($where){
		$this->db->where($where);
		$this->db->delete('category');
	}
}
>>>>>>> 7757c236da80c647f64a8b4fc19d07e5ae803fe3

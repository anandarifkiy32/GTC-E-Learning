<<<<<<< HEAD
<?php 
=======
<?php
>>>>>>> 7757c236da80c647f64a8b4fc19d07e5ae803fe3
class Admin_model extends CI_Model{

	function select_where($where){
		return $this->db->get_where('admin', $where);
	}
<<<<<<< HEAD

=======
>>>>>>> 7757c236da80c647f64a8b4fc19d07e5ae803fe3
}
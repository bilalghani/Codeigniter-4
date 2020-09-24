<?php  

class Csv_import_model extends CL_Model
{

	function select(){
		$this->db->order_by('id','DESC');
	$query = $this->db->get('tbl_user');
	return $query;
	}

	

}


?>
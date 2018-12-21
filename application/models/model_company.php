<?php

Class model_company extends CI_Model {

		function insert_data($data){
		$this->db->insert("db_company",$data);
	}

	function delete_data($id){
		$this->db->where("id_perusahaan",$id);
		$this->db->delete("db_company");

	}

	function fetch_single_data($id)
	{
		$this->db->where("id_perusahaan",$id);
		$query = $this->db->get("db_company");
		return $query;
		//SELECT * FROM operator where id = '$id'
	}


	function fetch_data(){

		$query = $this->db->get("db_company");

		return $query;
	}


	function update_data($data,$id)
	{
		$this->db->where("id_perusahaan",$id);
		$this->db->update("db_company",$data);

		//UPDATE operator SET * where id = $id
	}

}

?>
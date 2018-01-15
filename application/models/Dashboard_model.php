<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Dashboard_model extends CI_Model {

	public function __construct()
	{
		$this->load->database();
	}

 	public function getmatkuldosen()
 	{
 		$username=$this->session->userdata('username');
 		
		$query = $this->db->query("select * from tb_matakuliah where nik='$username' group by id_matakuliah");
		return $query->result_array();	
 	}

 	public function getmatkulmahasiswa()
 	{
 		$username=$this->session->userdata('username');
 		$where=array('nim'=>$username);
		$query = $this->db->get_where('tb_matakuliah',$where);
		return $query->result_array();	
 	}

 

}

/* End of file Dashboard_model.php */
/* Location: ./application/models/Dashboard_model.php */

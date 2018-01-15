<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Absensi_model extends CI_Model {

	public function __construct()
	{
		$this->load->database();
	}

	public function get_mahasiswa()
	{
		$query = $this->db->get('tb_mahasiswa');
		return $query->result_array();
	}

	public function get_matakuliah($id_matakuliah){
		$query = $this->db->get_where('tb_matakuliah',array('id_matakuliah'=>$id_matakuliah));
		return $query->row_array();
	}

}

/* End of file Absensi_model.php */
/* Location: ./application/models/Absensi_model.php */

 
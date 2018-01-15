<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Admin_model extends CI_Model {

	public function __construct()
	{
		$this->load->database();
	}

 	public function addmhs()
 	{
 			$data = array(
 					 'nim'=> $this->input->post('nim'),
 					 'nama' => $this->input->post('nama'),
 					 'password'=> $this->input->post('nim'),
 					 'fakultas'=>$this->input->post('fakultas'),
 					 'prodi'=> $this->input->post('prodi')
 				   );
 			return $this->db->insert('tb_mahasiswa',$data);
 	}

 	public function creatematkul()
 	{
 		$data = array(
 				'id_matakuliah' =>$this->input->post('id_matkul'),
 				'nama_matakuliah' =>$this->input->post('nama_matkul'),
 				'hari' => $this->input->post('hari'),
 				'ruangan'=>$this->input->post('ruangan'),
 				'nik'=>$this->input->post('nik'),
 				'nim'=>$this->input->post('nim'),
 				'fakultas'=>$this->input->post('fakultas'),
 				'prodi'=>$this->input->post('prodi'),
 				'waktu'=>$this->input->post('waktu')
 		);

 		return $this->db->insert('tb_matakuliah',$data);
 	}

 	public function getmhs($nim = FALSE)
 	{
 		if ($nim == FALSE) {
			$query = $this->db->get('tb_mahasiswa');
			return $query->result_array();	
 		}else{
 			$query = $this->db->get_where('tb_mahasiswa',array('nim'=>$nim));
 			return $query->row_array();
 		}
 		
 	}

 	public function deletemhs($nim)
 	{
 		return $this->db->delete('tb_mahasiswa',array('nim'=>$nim));
 	}

 	public function update_mhs($nim)
 	{
 		$data = array (
 				'nama' => $this->input->post('nama'),
 				'fakultas'=>$this->input->post('fakultas'),
 				'prodi'=>$this->input->post('prodi'),
 		);

 		$this->db->where('nim',$nim);
 		return $this->db->update('tb_mahasiswa',$data);
 	}

 	public function adddosen()
 	{
 			$data = array(
 					 'nik'=> $this->input->post('nik'),
 					 'nama' => $this->input->post('nama'),
 					 'password'=> $this->input->post('nik'),
 					 'fakultas'=>$this->input->post('fakultas'),
 					 'prodi'=> $this->input->post('prodi')
 				   );
 			return $this->db->insert('tb_dosen',$data);
 	}

 	public function getdosen($nik = FALSE)
 	{
 		if ($nik === FALSE) {
			$query = $this->db->get('tb_dosen');
			return $query->result_array();	
 		}else{
 			$query = $this->db->get_where('tb_dosen',array('nik'=>$nik));
 			return $query->row_array();
 		}
 		
 	}

 	public function deletedosen($nik)
 	{
 		return $this->db->delete('tb_dosen',array('nik'=>$nik));
 	}

 	public function update_dosen($nik)
 	{
 		$data = array (
 				'nama' => $this->input->post('nama'),
 				'fakultas'=>$this->input->post('fakultas'),
 				'prodi'=>$this->input->post('prodi'),
 		);

 		$this->db->where('nik',$nik);
 		return $this->db->update('tb_dosen',$data);
 	}

 	public function rowmahasiswa()
 	{
 		return $this->db->count_all_results('tb_mahasiswa');
 	}

 	public function rowdosen()
 	{
 		return $this->db->count_all_results('tb_dosen');
 	}

 	public function getbukti()
 	{
 		$query = $this->db->query("SELECT bp.nim,mhs.nama,bp.picture FROM tb_buktipembayaran bp JOIN
 			tb_mahasiswa mhs ON bp.nim = mhs.nim");
 		return $query->result_array();
 	}

 	public function getmatkul()
 	{
 		$query = $this->db->query("SELECT DISTINCT nama_matakuliah,hari,waktu,ruangan,fakultas,prodi FROM tb_matakuliah");

 		return $query->result_array();
 	}

}

/* End of file Admin_model.php */
/* Location: ./application/models/Admin_model.php */

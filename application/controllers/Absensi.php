<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Absensi extends CI_Controller {

	function __construct(){
		parent::__construct();
		if ($this->session->userdata('role') != 'dosen') {
			redirect('login');
		}
	}
	public function pertemuan($pertemuan,$idmatkul)
	{	
		// $idmatkul=$this->uri->segment(4);
		$data['idmatkul'] 	= $idmatkul;
		$data['matkul'] 		= $this->absensi_model->get_matakuliah($idmatkul);
		$data['pertemuan']	= $pertemuan;
		$data['mahasiswa'] 	= $this->absensi_model->get_mahasiswa();
		$this->load->view('templates/header_v');
		$this->load->view('sia/edit_absensi_v',$data);
		$this->load->view('templates/footer2_v');
	}

	public function update_absensi()
	{
		$row				=	$this->input->post("row");
		$idmatkul		=	$this->input->post("idmatkul");
		$infokelas	=	$this->input->post("infokelas");
		$pertemuan	=	$this->input->post("pertemuan");
		$tanggal	=	$this->input->post("tanggal");
		$jenispertemuan	=	$this->input->post("jenispertemuan");
		for ($i=1; $i <$row ; $i++) { 

			$nim				=	$this->input->post("nim$i");
			$kehadiran	=	$this->input->post("kehadiran$i");
			$keaktifan	=	$this->input->post("keaktifan$i");
			$ketepatan	=	$this->input->post("ketepatan$i");

			// delete
			$where=array('nim'=>$nim,'id_matakuliah'=>$idmatkul,'pertemuan'=>$pertemuan);
			$this->db->delete('tb_absensi',$where);

			// insert
			$data=array('nim'=>$nim,'id_matakuliah'=>$idmatkul,'pertemuan'=>$pertemuan,
									'kehadiran'=>$kehadiran,'keaktifan'=>$keaktifan,'ketepatan'=>$ketepatan,
									'tanggal'=>$tanggal,'jenis_pertemuan'=>$jenispertemuan);

			$this->db->insert('tb_absensi',$data);
			$this->session->set_flashdata('info', $infokelas);
			$data['matakuliah'] = $this->dashboard_model->getmatkuldosen();
			
		}
		$this->load->view('templates/header_v');
		$this->load->view('sia/dashboarddosen_v',$data);
		$this->load->view('templates/footer2_v');
	}

}

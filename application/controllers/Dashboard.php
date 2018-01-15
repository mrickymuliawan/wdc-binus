<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Dashboard extends CI_Controller {

	function __construct(){
	parent::__construct();
		if (!$this->session->has_userdata('role')) {
			redirect('login');
		}
	}
	public function mahasiswa()
	{	
		$data['matakuliah'] = $this->dashboard_model->getmatkulmahasiswa();
		$this->load->view('templates/header_v');
		$this->load->view('sia/dashboardmahasiswa_v',$data);
		$this->load->view('templates/footer2_v');
	}

	public function dosen()
	{	
		$data['matakuliah'] = $this->dashboard_model->getmatkuldosen();
		$this->load->view('templates/header_v');
		$this->load->view('sia/dashboarddosen_v',$data);
		$this->load->view('templates/footer2_v');
	}

	public function faq()
	{	
		// $data['matakuliah'] = $this->dashboard_model->getmatkuldosen();
		$this->load->view('templates/header_v');
		$this->load->view('sia/faq_v');
		$this->load->view('templates/footer2_v');
	}
	public function aboutus()
	{	
		// $data['matakuliah'] = $this->dashboard_model->getmatkuldosen();
		$this->load->view('templates/header_v');
		$this->load->view('sia/aboutus_v');
		$this->load->view('templates/footer2_v');
	}
}

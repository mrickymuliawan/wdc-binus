<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Tagihan extends CI_Controller {
	function __construct(){
		parent::__construct();
		if ($this->session->userdata('role') != 'mahasiswa') {
			redirect('login');
		}
	}

	public function index()
	{
		$this->load->view('templates/header_v');
		$this->load->view('sia/tagihanmahasiswa_v',array('error'=>''));
		$this->load->view('templates/footer2_v');
	}



}

/* End of file Tagihan.php */
/* Location: ./application/controllers/Tagihan.php */

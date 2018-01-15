<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Login extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
	}

	public function index()
	{
		if ($this->session->has_userdata('role')) {
			if ($this->session->userdata('role') == 'admin') {
				redirect('admin');
			}else if($this->session->userdata('role') == 'dosen'){
				redirect(base_url('dashboard/dosen'));
			}else if($this->session->userdata('role')=='mahasiswa'){
				redirect(base_url('dashboard/mahasiswa'));
			}
		}
		else{
			$this->load->view('templates/header_v' );
			$this->load->view('login/loginas_v' );	
		}
	}


	public function validationloginadmin()
	{
		$username 	= $this->input->post('username');
		$password 	= $this->input->post('password');
		$where 			= array(
			'username'=>$username,
			'password'=>$password
		);

		$cek = $this->login_model->ceklogin('tb_admin',$where)->num_rows();
		if ($cek>0) {
			$result = $this->db->get_where('tb_admin',$where)->row_array();
			$data_session = array(
				'nama'=>$result['nama'],
				'username'=>$username,
				'role'=>'admin'
			);
		  $this->session->set_userdata($data_session);
		  $this->load->view('templates/header_v');
		  $this->load->view('login/loginface');
		}
		else{
			$this->session->set_flashdata('info','true');
			redirect('login?login=admin');
		}
	}

	public function validationlogindosen()
	{
		$nik	  		= $this->input->post('username');
		$password 	= $this->input->post('password');
		$where 			= array(
			'nik'=>$nik,
			'password'=>$password
		);

		$cek = $this->login_model->ceklogin('tb_dosen',$where)->num_rows();
		if ($cek>0) {
			$result = $this->db->get_where('tb_dosen',$where)->row_array();
			$data_session = array(
				'nama'=>$result['nama'],
				'username'=>$nik,
				'fakultas'=>$result['fakultas'],
				'role'=>'dosen'
			);
		  $this->session->set_userdata($data_session);
		  $this->load->view('templates/header_v');
		  $this->load->view('login/loginface');
		}
		else{
			$this->session->set_flashdata('info','true');
			redirect('login?login=dosen');
		}
	}

	public function validationloginmhs()
	{
		$nim = $this->input->post('username');
		$password = $this->input->post('password');
		$where	  = array(
			'nim'=>$nim,
			'password'=>$password
		);

		$cek = $this->login_model->ceklogin('tb_mahasiswa',$where)->num_rows();
		if ($cek>0) {
			$result = $this->db->get_where('tb_mahasiswa',$where)->row_array();
			$data_session = array(
				'nama'=>$result['nama'],
				'username'=>$nim,
				'fakultas'=>$result['fakultas'],
				'role'=>'mahasiswa'
			);
		  $this->session->set_userdata($data_session);
		  $this->load->view('templates/header_v');
		  $this->load->view('login/loginface');
			}
		else{
			$this->session->set_flashdata('info','true');
			redirect('login?login=mahasiswa');
		}
	}

	public function logout()
	{
		$this->session->sess_destroy();
		redirect('login');
	}

}

/* End of file Login.php */
/* Location: ./application/controllers/Login.php */

 ?>
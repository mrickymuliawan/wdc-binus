<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Admin extends CI_Controller {

	function __construct(){
		parent::__construct();
		if ($this->session->userdata('role') != 'admin') {
			redirect('login');
		}
	}
 

	public function index()
	{
		$data['mahasiswa'] = $this->admin_model->rowmahasiswa();
		$data['dosen'] = $this->admin_model->rowdosen();
		$this->load->view('admin/header');
		$this->load->view('admin/asidebar');
		$this->load->view('admin/dashboard',$data);
		$this->load->view('admin/footer');
	}

	public function datamhs()
	{
		$data['mahasiswa'] = $this->admin_model->getmhs();

		$this->load->view('admin/header');
		$this->load->view('admin/asidebar');
		$this->load->view('admin/mahasiswa/datamahasiswa',$data);
		$this->load->view('admin/footer');
	}



	public function createmhs()
	{

		$this->form_validation->set_rules('nama','Nama','trim|required|min_length[4]',array('required'=>'You must provide a %s.'));

		if ($this->form_validation->run()===FALSE) {
			$this->load->view('admin/header');
			$this->load->view('admin/asidebar');
			$this->load->view('admin/mahasiswa/tambahmhs');
			$this->load->view('admin/footer');
		}else{
			$this->admin_model->addmhs();
			redirect('admin/datamhs');	
		}
		
	}

	public function hapusmhs($nim)
	{
		
		$this->admin_model->deletemhs($nim);
		redirect('admin/datamhs');	
	}


	public function updatemhs($nim)
	{
		$this->form_validation->set_rules('nama','Nama','trim|required|min_length[4]',array('required'=>'You must provide a %s.'));

		if ($this->form_validation->run() === FALSE) {
			$data['mahasiswa'] = $this->admin_model->getmhs($nim);
			$this->load->view('admin/header');
			$this->load->view('admin/asidebar');
			$this->load->view('admin/mahasiswa/editmhs',$data);
			$this->load->view('admin/footer');
		} else {
			$this->admin_model->update_mhs($nim);
			redirect('admin/datamhs');	
		}

		
	} 

	

	public function datadosen()
	{
		$data['dosen'] = $this->admin_model->getdosen();
		
		$this->load->view('admin/header');
		$this->load->view('admin/asidebar');
		$this->load->view('admin/dosen/datadosen',$data);
		$this->load->view('admin/footer');
	}

	

	public function createdosen()
	{
		$this->form_validation->set_rules('nama','Nama','trim|required|min_length[4]',array('required'=>'You must provide a %s.'));
		

		if ($this->form_validation->run()===FALSE) {
			$this->load->view('admin/header');
			$this->load->view('admin/asidebar');
			$this->load->view('admin/dosen/tambahdosen');
			$this->load->view('admin/footer');
		}else{
			$this->admin_model->adddosen();
			redirect('admin/datadosen');	
		}
	}

	public function hapusdosen($nik)
	{;
		$this->admin_model->deletedosen($nik);
		redirect('admin/datadosen');	
	}

	public function updatedosen($nik)
	{
		$this->form_validation->set_rules('nama','Nama','trim|required|min_length[4]',array('required'=>'You must provide a %s.'));
		

		if ($this->form_validation->run()===FALSE) {
			 
			 $data['dosen'] = $this->admin_model->getdosen($nik);
			 $this->load->view('admin/header');
			 $this->load->view('admin/asidebar');
			 $this->load->view('admin/dosen/editdosen',$data);
			 $this->load->view('admin/footer');
		}else{
			
			$this->admin_model->update_dosen($nik);
			redirect('admin/datadosen');
		}
	}

	public function creatematkul()
	{
		$this->load->view('admin/header');
		$this->load->view('admin/asidebar');
		$this->load->view('admin/matakuliah/tambahmatkul');
		$this->load->view('admin/footer');	
	} 

	public function storematkul()
	{
		$this->admin_model->creatematkul();
		redirect('admin/datamatkul');	
	}

	public function buktipembarayan()
	{
		$data['buktipembarayan'] = $this->admin_model->getbukti();
		$this->load->view('admin/header');
		$this->load->view('admin/asidebar');
		$this->load->view('admin/buktipembayaran/buktipembayaran_v',$data);
		$this->load->view('admin/footer');
	}

	public function datamatkul()
	{
		$data['datamatkul'] = $this->admin_model->getmatkul();
		$this->load->view('admin/header');
		$this->load->view('admin/asidebar');
		$this->load->view('admin/matakuliah/datamatkul',$data);
		$this->load->view('admin/footer');
	}

}

/* End of file Admin.php */
/* Location: ./application/controllers/Admin.php */





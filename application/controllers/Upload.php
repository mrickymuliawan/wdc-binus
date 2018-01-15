<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Upload extends CI_Controller {

	public function do_upload()
	{
		$config['upload_path'] = './assets/img/uploadbukti/';
		$config['allowed_types'] = 'gif|jpg|png';
		// $config['max_size']  = '2048';
		// $config['max_width']  = '1024';
		// $config['max_height']  = '1024';
		
		$this->load->library('upload', $config);
		
		if ( ! $this->upload->do_upload('uploadbukti')){
			$error = array('error' => $this->upload->display_errors());
			$this->load->view('templates/header_v');
			$this->load->view('sia/tagihanmahasiswa_v',$error);
		}
		else{
			$data=$this->upload->data();
			$picture=$data['file_name'];
			$username = $this->session->userdata('username');
			$this->upload_model->deleteupload($username);
      		$this->upload_model->upload($picture);
      		$this->session->set_flashdata('info', 'true');
      		$this->load->view('templates/header_v');
			$this->load->view('sia/tagihanmahasiswa_v',array('error' => $this->upload->display_errors()));
		}
	}

}

/* End of file Upload.php */
/* Location: ./application/controllers/Upload.php */

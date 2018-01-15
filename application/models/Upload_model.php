
<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Upload_model extends CI_Model {

	public function __construct()
	{
		parent::__construct();
	}

	public function upload($picture){
		$data = array('picture' => $picture,
					  'nim'=>$this->session->userdata('username')
					  );
		$this->db->insert('tb_buktipembayaran', $data);
	}	

	public function deleteupload($username)
	{
		return $this->db->delete('tb_buktipembayaran',array('nim'=>$username));
	}

}

/* End of file Upload_model.php */
/* Location: ./application/models/Upload_model.php */


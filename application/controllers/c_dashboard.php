<?php 
defined('BASEPATH') OR exit('No direct script access allowed');

class C_dashboard extends CI_Controller {

	public function index(){
		$this->load->view('back/v_admin');
	}


}

/* End of file c_dashboard.php */
/* Location: ./application/controllers/c_dashboard.php */
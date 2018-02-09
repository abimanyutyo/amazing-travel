<?php 

/**
* 
*/
class Login extends CI_Controller
{
	function __construct(){
		parent:: __construct();

		$this->load->model('m_login');
	}
	
	function index(){
		$this->cek_sessiontrue();
		$status = $this->session->userdata("status");
		if($status == "login"){
			redirect(base_url('c_rute'));
		}
		$this->load->view('login');
	}

	function cek_login(){
		$data = array(
			'username' => $this->input->post('username', TRUE),
			'password' => $this->input->post('password', TRUE),
			);

		$hasil = $this->m_login->GetData($data);
		if ($hasil->num_rows() == 1) {
			foreach ($hasil->result() as $sess) {
				$sess_data['id'] = $sess->id;
				$sess_data['username'] = $sess->username;
				$sess_data['nama'] = $sess->nama;
				$sess_data['status'] = 'login';
			}
			$this->session->set_userdata($sess_data);
				redirect(base_url().'c_rute');
		}
		else {
			$info='<div style="color:red">PERIKSA KEMBALI USERNAME DAN PASSWORD ANDA!</div>';
			$this->session->set_userdata('info',$info);

			redirect(base_url().'login');

		}
	}

	function logout()
	{
		$this->session->sess_destroy();
		redirect(base_url('welcome'));
	}
	public function cek_sessiontrue(){
    	$sesion = $this->session->status;
    	if(!empty($sesion)){ 
    	  	redirect(base_url().'c_rute');
    	}
    }
    public function cek_session(){
    	$sesion = $this->session->status;
    	if(empty($sesion)){ 
    	  	return 0;
    	}else{
    		return 1;
    	}
  	}
    public function cek_sessionfalse(){
    	$sesion = $this->session->status;
    	if(empty($sesion)){ 
      		redirect(base_url().'login');
         }
     }
}


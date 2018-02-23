<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Landing extends CI_Controller {

	function __construct(){
		parent::__construct();
		$this->load->helper(array('url'));
		$this->load->model("m_user");
		$this->load->model('m_rute');
	}

	public function index()
	{
		$this->cek_sessiontrue();
		$data['dari'] = $this->m_rute->dari()->result();
		$data['ke'] = $this->m_rute->ke()->result();
		$this->load->view('front/index',$data);
	}

	public function booking($idrute, $idtrans){
		$data['idrute'] = $idrute;
		$data['idtrans'] = $idtrans;
		$this->load->view('booking', $data);
	}

	public function seat($idrute, $idtrans){

		$data['idrute'] = $idrute;
		$data['idtrans'] = $idtrans;
		$data['seat_code'] = $this->m_rute->get_conditions('transportation', array('id'=>$idtrans))->result_array();

		$this->load->view('seat', $data);
	}

	function reservasi(){
		$idrute = $this->input->post('idrute');
		$idtrans = $this->input->post('idtrans');
		
		

	}

	public function adduser(){
		$this->cek_sessiontrue();
		$op = $this->input->post('op');
		$id = $this->input->post('id');
		$nama = $this->input->post('nama');
		$username = $this->input->post('username');
		$hp = $this->input->post('hp');
		$email = $this->input->post('email');
		$password = $this->input->post('password');

		$data = array(
			
			'nama' => $nama,
			'username' => $username,
			'hp' => $hp,
			'email' => $email,
			'password' => md5($password),

			);
		
			$this->m_user->adduser($data);
	
		redirect('landing');
	}
	public function savecust(){
		$name = $this->input->post('name');
		$address = $this->input->post('address');
		$phone = $this->input->post('phone');
		$email = $this->input->post('email');
		$gender = $this->input->post('gender');
		$idrute = $this->input->post('idrute');
		$idtrans = $this->input->post('idtrans');
		$data = array(
			'name' => $name, 
			'address' => $address, 
			'phone' => $phone, 
			'email' => $email,
			'gender' => $gender, 
			);
		$this->m_user->addcust($data);
		redirect(base_url('landing/seat/'.$idrute.'/'.$idtrans));
	}
	function logout()
	{
		$this->session->sess_destroy();
		redirect(base_url('landing'));
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

     public function carirute(){
     	$from = $this->input->get('dari');
     	$to = $this->input->get('ke');

     	$where = array(
     		'rute_from' => $from,
     		'rute_to' => $to
     		);

     	$data['rute'] = $this->m_rute->cari($where)->result();
     	$this->load->view('front/hasil', $data);

     }

}

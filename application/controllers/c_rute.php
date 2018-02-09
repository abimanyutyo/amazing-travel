<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class C_rute extends CI_Controller {

	function __construct(){
		parent::__construct();
		$this->load->helper(array('url'));
		$this->load->model("m_rute");
	}

	public function index(){
		$this->cek_sessionfalse();
		
		$this->load->database();
		$jumlah_data = $this->m_rute->jumlah_data();
		$this->load->library('pagination');

		$config['base_url'] = base_url().'index.php/c_rute/index/';
		$config['total_rows'] = $jumlah_data;
		$config['per_page'] = 5;

		$config['full_tag_open'] = '<ul class="pagination">';
		$config['full_tag_close'] = '</ul>';

		$config['first_tag_open'] = '<li>';
		$config['last_tag_open'] = '<li>';

		$config['next_tag_open'] = '<li>';
		$config['prev_tag_open'] = '<li>';

		$config['num_tag_open'] = '<li>';
		$config['num_tag_close'] = '</li>';

		$config['first_tag_close'] = '</li>';
		$config['last_tag_close'] = '</li>';

		$config['next_tag_close'] = '</li>';
		$config['prev_tag_close'] = '</li>';

		$config['cur_tag_open'] = "<li class=\"active\"><span><b>";
		$config['cur_tag_close'] = "</b></span></li>";

		$this->pagination->initialize($config);

		$from = $this->uri->segment(3);
		$this->pagination->initialize($config);		
		$data['rute'] = $this->m_rute->data($config['per_page'],$from);
		
		$this->load->view('back/rute', $data);
	}

	public function inputrute(){
		$this->cek_sessionfalse();
		$op = $this->input->post('op');
		$id = $this->input->post('id');
		$from = $this->input->post('asal');
		$to = $this->input->post('tujuan');
		$depart_at = $this->input->post('waktu');
		$price = $this->input->post('harga');

		$data = array(
			
			'rute_from' => $from,
			'rute_to' => $to,
			'depart_at' => $depart_at,
			'price' => $price,

			);
		if($op=="tambah"){
			$this->m_rute->addrute($data);
		}
		else{
			$this->m_rute->update($id,$data);
		}
	
		redirect('c_rute');
	}

	public function hapus($id){
		$this->cek_sessionfalse();
		$this->m_rute->hapus($id);
		redirect('c_rute');
	}

	public function edit($id){
		$this->cek_sessionfalse();
		$data['op'] = 'edit';
		$data['sql'] = $this->m_rute->edit($id);

		$this->load->view('back/edit_rute',$data);	
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
}
?>

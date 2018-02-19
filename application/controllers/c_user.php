<?php
/**
* 
*/
class C_User extends CI_Controller
{
	
	function __construct()
	{
		parent::__construct();
		$this->load->helper(array('url'));
		$this->load->model("m_user");
	}

	public function index(){
		
		$this->load->database();
		$jumlah_data = $this->m_user->jumlah_data();
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
		$data['user'] = $this->m_user->data($config['per_page'],$from);
		
		$this->load->view('back/user', $data);
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
		$this->m_user->hapus($id);
		redirect('c_user');
	}

	public function edit($id){
		$this->cek_sessionfalse();
		$data['op'] = 'edit';
		$data['sql'] = $this->m_rute->edit($id);

		$this->load->view('back/edit_rute',$data);	
	}
}
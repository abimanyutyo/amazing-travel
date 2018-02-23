<?php
/**
* 
*/
class C_Rute extends CI_Controller
{
	
	function __construct()
	{
		parent::__construct();
		$this->load->helper(array('url'));
		$this->load->model("m_rute");
	}

	public function index(){
		
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
		$op = $this->input->post('op');
		$id = $this->input->post('id');
		$rute_from = $this->input->post('asal');
		$rute_to = $this->input->post('tujuan');
		$depart_at = $this->input->post('depart');
		$landing_at = $this->input->post('landing');
		$price = $this->input->post('price');

		$data = array(
			
			'rute_from' => $rute_from,
			'rute_to' => $rute_to,
			'depart_at' => $depart_at,
			'landing_at' =>$landing_at,
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
		$this->m_rute->hapus($id);
		redirect('c_rute');
	}

	public function edit($id){
		$data['op'] = 'edit';
		$data['sql'] = $this->m_rute->edit($id);

		$this->load->view('back/edit_rute',$data);	
	}
}
<?php
/**
* 
*/
class C_Transport extends CI_Controller
{
	
	function __construct()
	{
		parent::__construct();
		$this->load->helper(array('url'));
		$this->load->model("m_transport");
	}

	public function index(){
		
		$this->load->database();
		$jumlah_data = $this->m_transport->jumlah_data();
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
		$data['transport'] = $this->m_transport->data($config['per_page'],$from);
		
		$this->load->view('back/transport', $data);
	}

	public function inputtransport(){
		$op = $this->input->post('op');
		$id = $this->input->post('id');
		$code = $this->input->post('code');
		$description = $this->input->post('description');
		$seat_qty = $this->input->post('seat_qty');

		$data = array(
			
			'code' => $code,
			'description' => $description,
			'seat_qty' => $seat_qty

			);
		if($op=="tambah"){
			$this->m_transport->addtransport($data);
		}
		else{
			$this->m_transport->update($id,$data);
		}
	
		redirect('c_transport');
	}

	public function hapus($id){
		$this->m_transport->hapus($id);
		redirect('c_transport');
	}

	public function edit($id){
		$data['op'] = 'edit';
		$data['sql'] = $this->m_transport->edit($id);

		$this->load->view('back/edit_transport',$data);	
	}
}
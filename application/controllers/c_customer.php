<?php
/**
* 
*/
class C_Customer extends CI_Controller
{
	
	function __construct()
	{
		parent::__construct();
		$this->load->helper(array('url'));
		$this->load->model("m_customer");
	}

	public function index(){
		
		$this->load->database();
		$jumlah_data = $this->m_customer->jumlah_data();
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
		$data['customer'] = $this->m_customer->data($config['per_page'],$from);
		
		$this->load->view('back/customer', $data);
	}

	public function inputcustomer(){
		$op = $this->input->post('op');
		$id = $this->input->post('id');
		$name = $this->input->post('name');
		$address = $this->input->post('address');
		$phone = $this->input->post('phone');
		$gender = $this->input->post('gender');
		$email = $this->input->post('email');

		$data = array(
			
			'name' => $name,
			'address' => $address,
			'phone' => $phone,
			'gender' => $gender,
			'email' => $email,

			);
		if($op=="tambah"){
			$this->m_customer->addcustomer($data);
		}
		else{
			$this->m_customer->update($id,$data);
		}
	
		redirect('c_customer');
	}

	public function hapus($id){
		$this->m_customer->hapus($id);
		redirect('c_customer');
	}

	public function edit($id){
		$data['op'] = 'edit';
		$data['sql'] = $this->m_customer->edit($id);

		$this->load->view('back/edit_customer',$data);	
	}
}
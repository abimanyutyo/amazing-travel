<?php
/**
* 
*/
class C_Reservation extends CI_Controller
{
	
	function __construct()
	{
		parent::__construct();
		$this->load->helper(array('url'));
		$this->load->model("m_reservation");
	}

	public function index(){
		
		$this->load->database();
		$jumlah_data = $this->m_reservation->jumlah_data();
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
		$data['reservation'] = $this->m_reservation->data($config['per_page'],$from);
		
		$this->load->view('back/reservation', $data);
	}

	public function input(){
		$op = $this->input->post('op');
		$id = $this->input->post('id');
		$reservation_code = $this->input->post('reservation_code');
		$reservation_at = $this->input->post('reservation_at');
		$reservation_date = $this->input->post('reservation_date');
		$seat_code = $this->input->post('seat_code');
		$customer_id = $this->input->post('customer_id');
		$rute_id = $this->input->post('rute_id');
		$depart_at = $this->input->post('depart_at');
		$price = $this->input->post('price');
		$user_id = $this->input->post('user_id');

		$data = array(
			
			'reservation_code' => $reservation_code,
			'reservation_at' => $reservation_at,
			'reservation_date' => $reservation_date,
			'seat_code' => $seat_code,
			'customer_id' => $customer_id,
			'rute_id' => $rute_id,
			'depart_at' => $depart_at,
			'price' => $price,
			'user_id' => $user_id
			);
		if($op=="tambah"){
			$this->m_reservation->add($data);
		}	
		else{
			$this->m_reservation->update($id,$data);
		}
	
		redirect('c_reservation');
	}

	public function hapus($id){
		$this->m_reservation->hapus($id);
		redirect('c_reservation');
	}

	public function edit($id){
		$data['op'] = 'edit';
		$data['sql'] = $this->m_reservation->edit($id);

		$this->load->view('back/edit_reservation',$data);	
	}
}
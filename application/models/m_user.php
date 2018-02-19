<?php 
defined('BASEPATH') OR exit('No direct script access allowed');

class M_user extends CI_Model {

	public function adduser($data){
    	$this->db->insert('user',$data);
    }

    function data($number,$offset){
        return $query = $this->db->get('user',$number,$offset)->result();       
    }

    public function showuser(){
    	return $this->db->get('user')->result();
    }

    public function hapus($id){
    	$this->db->where("id",$id);
    	$this->db->delete('user');
    }

    function jumlah_data(){
        return $this->db->get('user')->num_rows();
    }

}

/* End of file m_user.php */
/* Location: ./application/models/m_user.php */

?>
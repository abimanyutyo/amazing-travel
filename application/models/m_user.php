<?php 
defined('BASEPATH') OR exit('No direct script access allowed');

class M_user extends CI_Model {

	public function adduser($data){
    	$this->db->insert('user',$data);
    }

}

/* End of file m_user.php */
/* Location: ./application/models/m_user.php */

?>
<?php 
defined('BASEPATH') OR exit('No direct script access allowed');

class M_rute extends CI_Model {

	public function addrute($data){
   $this->db->insert('rute',$data);
 }

 function data($number,$offset){
  return $query = $this->db->get('rute',$number,$offset)->result();       
}

function jumlah_data(){
  return $this->db->get('rute')->num_rows();
}

public function hapus($id){
 $this->db->where("id",$id);
 $this->db->delete('rute');
}

public function showedit(){
 return $this->db->get('rute')->result();
}

public function edit($id){
 $this->db->where("id",$id);
 return $this->db->get('rute');
}

public function update($id,$data){
 $this->db->where("id",$id);
 $this->db->update('rute',$data);
}

public function dari(){
  $this->db->select('distinct(rute_from)');
  $this->db->from('rute');
  return $this->db->get();
}

public function ke(){
  $this->db->select('distinct(rute_to)');
  $this->db->from('rute');
  return $this->db->get();
}

public function cari($where){
  return $this->db->get_where('rute',$where);
}
  function get_conditions($from, $where){
    return $this->db->get_where($from, $where);
  }
}

/* End of file m_user.php */
/* Location: ./application/models/m_user.php */

?>
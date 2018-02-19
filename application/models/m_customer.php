<?php
/**
* 
*/
class M_Customer extends CI_Model
{

	public function addcustomer($data){
    	$this->db->insert('customer',$data);
    }

    function data($number,$offset){
        return $query = $this->db->get('customer',$number,$offset)->result();       
    }

    function jumlah_data(){
        return $this->db->get('customer')->num_rows();
    }

    public function hapus($id){
    	$this->db->where("id",$id);
    	$this->db->delete('customer');
    }

    public function showedit(){
    	return $this->db->get('customer')->result();
    }

    public function edit($id){
    	$this->db->where("id",$id);
    	return $this->db->get('customer');
    }

    public function update($id,$data){
    	$this->db->where("id",$id);
    	$this->db->update('customer',$data);
    }
}
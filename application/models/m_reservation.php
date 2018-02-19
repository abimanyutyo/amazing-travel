<?php
/**
* 
*/
class M_Reservation extends CI_Model
{

	public function add($data){
    	$this->db->insert('reservation',$data);
    }

    function data($number,$offset){
        return $query = $this->db->get('reservation',$number,$offset)->result();       
    }

    function jumlah_data(){
        return $this->db->get('reservation')->num_rows();
    }

    public function hapus($id){
    	$this->db->where("id",$id);
    	$this->db->delete('reservation');
    }

    public function showedit(){
    	return $this->db->get('reservation')->result();
    }

    public function edit($id){
    	$this->db->where("id",$id);
    	return $this->db->get('reservation');
    }

    public function update($id,$data){
    	$this->db->where("id",$id);
    	$this->db->update('reservation',$data);
    }
}
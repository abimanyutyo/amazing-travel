<?php
/**
* 
*/
class M_Transport extends CI_Model
{

	public function addtransport($data){
    	$this->db->insert('transportation',$data);
    }

    function data($number,$offset){
        return $query = $this->db->get('transportation',$number,$offset)->result();       
    }

    function jumlah_data(){
        return $this->db->get('transportation')->num_rows();
    }

    public function hapus($id){
    	$this->db->where("id",$id);
    	$this->db->delete('transportation');
    }

    public function showedit(){
    	return $this->db->get('transportation')->result();
    }

    public function edit($id){
    	$this->db->where("id",$id);
    	return $this->db->get('transportation');
    }

    public function update($id,$data){
    	$this->db->where("id",$id);
    	$this->db->update('transportation',$data);
    }
}
<?php

class Itempostmodel extends CI_Model {
  public function _construct(){
    $this->load->database();
  }
  
  public function create_post(){
      $file= base64_encode(file_get_contents(addslashes($_FILES['image']['tmp_name'])));
      $user = $this->session->userdata('username');
      $id=$this->db->where('AccountName',$user)->get('accbio')->row_array()['AccountID'];
      $field= array(
                'petype'=>$this->input->post('category'),
                'image'=>$file,
                'AccountID'=>$id,
                'itemdesc'=>$this->input->post('description'),
                'itemprc'=>$this->input->post('price'),
                'cont'=>$this->input->post('contact'),
                'loc'=>$this->input->post('location')
      );
      $query=$this->db->insert('item',$field);
      return true;
      
  }
  public function getData(){
	  $this->db->order_by('ItemID', 'desc');
      $query=$this->db->get('item');
      return $query->result();
  }

  public function getPost(){
	    $this->db->order_by('ItemID', 'desc');
	    $query = $this->db->get('item');
	    if($query->num_rows() > 0){
	      	return $query->result();
	    }
	    else{
	      	return false;
	    }
  	}
        
    	public function getBlogByIdp($id){
	    $this->db->where('id', $id);
	    $query = $this->db->get('service');
	    if($query->num_rows() > 0){
	      	return $query->row();
	    }
	    else{
	      	return false;
	    }
  	}

  	public function deletepost($id){
	    $this->db->where('ItemID', $id);
	    $this->db->delete('item');
	    if($this->db->affected_rows() > 0){
	      return true;
	    }
	    else{
	      return false;
	    }
  	}	

  	
}



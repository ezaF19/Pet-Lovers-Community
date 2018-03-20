<?php

class Itempostmodel extends CI_Model {
  public function _construct(){
    $this->load->database();
  }
  
  public function create_post(){
      $file= base64_encode(file_get_contents(addslashes($_FILES['image']['tmp_name'])));
      $field= array(
                'petype'=>$this->input->post('category'),
                'image'=>$file,
                'itemdesc'=>$this->input->post('description'),
                'itemprc'=>$this->input->post('price'),
                'cont'=>$this->input->post('contact'),
                'loc'=>$this->input->post('location')
      );
      $query=$this->db->insert('itempost',$field);
      return true;
      
  }
  public function getData(){
	  $this->db->order_by('itempostid', 'desc');
      $query=$this->db->get('itempost');
      return $query->result();
  }

  public function getPost(){
	    $this->db->order_by('itempostid', 'desc');
	    $query = $this->db->get('itempost');
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
	    $this->db->where('itempostid', $id);
	    $this->db->delete('itempost');
	    if($this->db->affected_rows() > 0){
	      return true;
	    }
	    else{
	      return false;
	    }
  	}	

  	
}



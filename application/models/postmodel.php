<?php

class Register_model extends CI_Model {
  public function _construct(){
    $this->load->database();
  }
  
  public function getPost(){
	    $this->db->order_by('id', 'desc');
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
	    $query = $this->db->get('itempost');
	    if($query->num_rows() > 0){
	      	return $query->row();
	    }
	    else{
	      	return false;
	    }
  	}

  	public function deletepost($id){
	    $this->db->where('id', $id);
	    $this->db->delete('itempost');
	    if($this->db->affected_rows() > 0){
	      return true;
	    }
	    else{
	      return false;
	    }
  	}	

  	public function updatetpost($id){
	    $id = $this->input->post('id_hidden');
	    $field = array(
	      'desc'=>$this->input->post('desc'),
	      'price'=>$this->input->post('prc'),
              'cont'=>$this->input->post('cont'),
	      'loc'=>$this->input->post('loc')
	      
	      );
	    $this->db->where('id', $id);
	    $this->db->update('itempost', $field);
	    echo $this->db->last_query();extit;
	    if($this->db->affected_rows() > 0){
	      return true;
	    }else{
	      return false;
	    }
	}    
}



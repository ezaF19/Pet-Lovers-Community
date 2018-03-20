<?php

class Adoptmodel extends CI_Model {
  public function _construct(){
    $this->load->database();
  }
  
  public function create_post(){
      $file= base64_encode(file_get_contents(addslashes($_FILES['image']['tmp_name'])));
      $field= array(
                'PetBreed'=>$this->input->post('petbreed'),
                'PetPic'=>$file,
                'PetType'=>$this->input->post('petype'),
                'PetName'=>$this->input->post('petname'),
                'PetAge'=>$this->input->post('petage'),
                'PetRecord'=>$this->input->post('petrecord'),
                'PetSize'=>$this->input->post('petsize'),
                'PetGender'=>$this->input->post('petgender')
      );
      $query=$this->db->insert('pet',$field);
      return true;
      
  }
  public function getData(){
	  $this->db->order_by('PetID', 'desc');
      $query=$this->db->get('pet');
      return $query->result();
  }

  public function getPost(){
	    $this->db->order_by('PetID', 'desc');
	    $query = $this->db->get('pet');
	    if($query->num_rows() > 0){
	      	return $query->result();
	    }
	    else{
	      	return false;
	    }
  	}

  	public function deletepost($id){
	    $this->db->where('PetID', $id);
	    $this->db->delete('pet');
	    if($this->db->affected_rows() > 0){
	      return true;
	    }
	    else{
	      return false;
	    }
  	}	

  	
}



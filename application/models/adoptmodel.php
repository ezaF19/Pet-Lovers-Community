<?php

class Adoptmodel extends CI_Model {
  public function _construct(){
    $this->load->database();
  }

  public function create_post(){
    $user = $this->session->userdata('username');

    $conn = new mysqli('localhost', 'root', '', 'plc_db');
    $query = 'Select AccountID from accbio where AccountName = "'.$user.'"';
    $result = $conn->query($query);
    if($result->num_rows>0){
      while($row = $result->fetch_assoc()){
        $id = $row['AccountID'];
        $file= base64_encode(file_get_contents(addslashes($_FILES['image']['tmp_name'])));
        $field= array(
                  'AccountID' => $id,
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
    }
  }
  public function getData(){
    $this->db->select('pet.*, accbio.*');
    $this->db->from('pet');
    $this->db->join('accbio', 'accbio.AccountID=pet.AccountID');
	  $this->db->order_by('PetID', 'desc');
    $query=$this->db->get();
    return $query->result_array();
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

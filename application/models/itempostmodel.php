<?php

class Itempostmodel extends CI_Model {
  public function _construct(){
    $this->load->database();
  }

  public function create_post(){
      $file= base64_encode(file_get_contents(addslashes($_FILES['image']['tmp_name'])));
      $field= array(
                'ItemType'=>$this->input->post('category'),
                'ItemPic'=>$file,
                'ItemInfo'=>$this->input->post('description'),
                'ItemPrice'=>$this->input->post('price'),
                'ItemContact'=>$this->input->post('contact'),
                'ItemLocation'=>$this->input->post('location')
      );
      $this->db->insert('item', $field);
      return true;

  }
  public function getData(){
    $this->db->select('item.*, accbio.*');
    $this->db->from('item');
    $this->db->join('accbio', 'item.AccountID=accbio.AccountID');
	  $this->db->order_by('ItemID', 'desc');
      $query=$this->db->get();
      return $query->result_array();
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

<?php

class donate_model extends CI_Model {
  public function _construct(){
    $this->load->database();
  }
  
  public function create_post(){
      $field= array(
                'donateamount'=>$this->input->post('category'),
                'donatefn'=>$this->input->post('firstname'),
                'donateln'=>$this->input->post('lastname'),
                'donateemail'=>$this->input->post('email'),
                'donatecn'=>$this->input->post('contactnumber'),
                'donatecomment'=>$this->input->post('comment')
      );
      $query=$this->db->insert('donation',$field);
      return true;
      
  }
  public function getData(){
	  $this->db->order_by('DonateID', 'desc');
      $query=$this->db->get('donation');
      return $query->result();
  }
}



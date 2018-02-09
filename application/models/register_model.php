<?php

class Register_model extends CI_Model {
  public function _construct(){
    $this->load->database();
  }

  public function success(){
    $data = array(
      'f_name' => $this->input->post('first_name'),
      'l_name' => $this->input->post('last_name'),
      'email' => $this->input->post('email'),
      'password' => $this->input->post('password')
    );
    return $this->db->insert('account', $data);
  }
}
?>

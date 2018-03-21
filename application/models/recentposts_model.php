<?php

class recentposts_model extends CI_Model {
  public function _construct(){
    $this->load->database();
  }
  public function posts(){
    $this->db->Select('*');
    $this->db->from('post');
    $this->db->order_by('PostDate', 'Desc');
    $query = $this->db->get();
    return $query->result_array();
    }
}
?>

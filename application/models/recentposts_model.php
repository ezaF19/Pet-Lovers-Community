<?php

class recentposts_model extends CI_Model {
  public function _construct(){
    $this->load->database();
  }
  public function posts(){
    $this->db->Select('post.PostComment, post.PostDate, accbio.AccountName, post.PostID');
    $this->db->from('post');
    $this->db->join('accbio', 'post.AccountID = accbio.AccountID');
    $this->db->order_by('post.PostDate', 'Desc');
    $query = $this->db->get();
    return $query->result_array();
    }
}
?>

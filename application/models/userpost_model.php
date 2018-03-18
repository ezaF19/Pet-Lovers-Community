<?php

class userpost_model extends CI_Model {
  public function _construct(){
    $this->load->database();
  }
  public function save_post(){
    $user = $this->session->userdata('username');
    $conn = new mysqli('localhost', 'root', '', 'plc_db');
		$query = 'Select AccountID from accbio where AccountName = "'.$user.'"';
		$result = $conn->query($query);
		if($result->num_rows > 0){
			while($row = $result->fetch_assoc()){
        $accid = $row['AccountID'];
      }
      $field = array(
        'AccountID' => $accid,
        'PostComment'=>$this->input->post('usrpst')
      );
      $this->db->insert('post', $field);
    }
  }
  public function disp_post(){
    $this->db->order_by('PostDate', 'Desc');
    $query = $this->db->get('post');
    return $query->result();
  }
}
?>

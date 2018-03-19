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
    $user = $this->session->userdata('username');
    $conn = new mysqli('localhost', 'root', '', 'plc_db');
		$query = 'Select AccountID from accbio where AccountName = "'.$user.'"';
		$result = $conn->query($query);
		if($result->num_rows > 0){
			while($row = $result->fetch_assoc()){
        $accid = $row['AccountID'];
      }
      $this->db->Select('PostDate, PostComment');
      $this->db->from('post');
      $this->db->where('AccountID', $accid);
      $this->db->order_by('PostDate', 'Desc');
      $query=$this->db->get();
      return $query->result();
    }
  }
  // public function save_pet(){
  //   $user = $this->session->userdata('username');
  //   $conn = new mysqli('localhost', 'root', '', 'plc_db');
	// 	$query = 'Select AccountID from accbio where AccountName = "'.$user.'"';
	// 	$result = $conn->query($query);
	// 	if($result->num_rows > 0){
	// 		while($row = $result->fetch_assoc()){
  //       $accid = $row['AccountID'];
  //     }
  //     $field = array(
  //       'AccountID' => $accid,
  //       'PetBreed' => $this->input->post('ptbrd'),
  //       'PetType' => $this->input->post('pttyp'),
  //       'PetName' => $this->input->post('ptnm'),
  //       'PetAge' => $this->input->post('ptage'),
  //       'PetGender' => $this->input->post('ptgndr')
  //     );
  //     $this->db->insert('pet', $field);
  // }
  // }
  // public function save_post_pet(){
  //   $conn = new mysqli('localhost', 'root', '', 'plc_db');
	// 	$query = 'Select AccountID from accbio where AccountName = "'.$user.'"';
	// 	$result = $conn->query($query);
	// 	if($result->num_rows > 0){
	// 		while($row = $result->fetch_assoc()){
  //       $accid = $row['AccountID'];
  //     }
  //       $conn = new mysqli('localhost', 'root', '', 'plc_db');
  //   		$query = 'Select PetID from pet where AccountID = "'.$accid.'"';
  //   		$result = $conn->query($query);
  //   		if($result->num_rows > 0){
  //   			while($row = $result->fetch_assoc()){
  //           $petid = $row['PetID'];
  //         }
  //         $field = array(
  //           'AccountID' => $accid,
  //           'PetID' => $petid,
  //           'PostComment' => $this->input->post('usrpst')
  //         );
  //         $this->db->insert('post', $field);
  //       }
  //   }
  // }
}
?>

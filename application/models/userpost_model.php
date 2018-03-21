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
      $this->db->Select('PostDate, PostComment, PostID');
      $this->db->from('post');
      $this->db->where('AccountID', $accid);
      $this->db->order_by('PostDate', 'Desc');
      $query=$this->db->get();
      return $query->result_array();
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
  //     return "true";
  // }
  // }
  public function save_post_pet(){
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
          'PetBreed' => $this->input->post('ptbrd'),
          'PetType' => $this->input->post('pttyp'),
          'PetName' => $this->input->post('ptnm'),
          'PetAge' => $this->input->post('ptage'),
          'PetGender' => $this->input->post('ptgndr')
        );
        $this->db->insert('pet', $field);
    }
    $conn = new mysqli('localhost', 'root', '', 'plc_db');
		$query = 'Select AccountID from accbio where AccountName = "'.$user.'"';
		$result = $conn->query($query);
		if($result->num_rows > 0){
			while($row = $result->fetch_assoc()){
        $accid = $row['AccountID'];
      }
        $conn = new mysqli('localhost', 'root', '', 'plc_db');
    		$query = 'Select PetID from pet where AccountID = "'.$accid.'"';
    		$result = $conn->query($query);
    		if($result->num_rows > 0){
    			while($row = $result->fetch_assoc()){
            $petid = $row['PetID'];
          }
          $field = array(
            'AccountID' => $accid,
            'PetID' => $petid,
            'PostComment' => $this->input->post('usrpst')
          );
          $this->db->insert('post', $field);
          return "true";
        }
    }
  }

  public function save_post_item()  {
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
        'ItemType' => $this->input->post('itmtyp'),
        'ItemPrice' => $this->input->post('itmprc'),
        'ItemInfo' => $this->input->post('itminf')
      );
      $this->db->insert('item', $field);
  }
  $conn = new mysqli('localhost', 'root', '', 'plc_db');
  $query = 'Select AccountID from accbio where AccountName = "'.$user.'"';
  $result = $conn->query($query);
  if($result->num_rows > 0){
    while($row = $result->fetch_assoc()){
      $accid = $row['AccountID'];
    }
      $conn = new mysqli('localhost', 'root', '', 'plc_db');
      $query = 'Select ItemID from item where AccountID = "'.$accid.'"';
      $result = $conn->query($query);
      if($result->num_rows > 0){
        while($row = $result->fetch_assoc()){
          $petid = $row['ItemID'];
        }
        $field = array(
          'AccountID' => $accid,
          'ItemID' => $petid,
          'PostComment' => $this->input->post('usrpst')
        );
        $this->db->insert('post', $field);
        return "true";
      }
  }
  }

  public function save_post_serv()  {
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
        'ServType' => $this->input->post('srvctyp'),
        'ServContact' => $this->input->post('srvccntct'),
        'ServAddress' => $this->input->post('srvcadd'),
        'ServName' => $this->input->post('srvcnm')
      );
      $this->db->insert('service', $field);
  }
  $conn = new mysqli('localhost', 'root', '', 'plc_db');
  $query = 'Select AccountID from accbio where AccountName = "'.$user.'"';
  $result = $conn->query($query);
  if($result->num_rows > 0){
    while($row = $result->fetch_assoc()){
      $accid = $row['AccountID'];
    }
      $conn = new mysqli('localhost', 'root', '', 'plc_db');
      $query = 'Select ServiceID from service where AccountID = "'.$accid.'"';
      $result = $conn->query($query);
      if($result->num_rows > 0){
        while($row = $result->fetch_assoc()){
          $petid = $row['ServiceID'];
        }
        $field = array(
          'AccountID' => $accid,
          'ServiceID' => $petid,
          'PostComment' => $this->input->post('usrpst')
        );
        $this->db->insert('post', $field);
        return "true";
      }
  }
  }
  public function get_delete($id){
    $this->db->where('PostID', $id);
    $this->db->delete('post');
    return true;
  }

  public function read($id){
    $conn = new mysqli('localhost', 'root', '', 'plc_db');
    $query = 'Select PetID, ServiceID, ItemID from post where PostID = "'.$id.'"';
    $result = $conn->query($query);
    if($result->num_rows > 0){
      while($row = $result->fetch_assoc()){
        $petid = $row['PetID'];
        $servid = $row['ServiceID'];
        $itemid = $row['ItemID'];
        if($petid =='0'){
          if($servid == '0'){
            if($itemid != '0'){
              $this->db->select('*');
              $this->db->from('item');
              $this->db->where('ItemID', $itemid);
              $query = $this->db->get();
              $this->session->set_userdata('id', 'ItemID');
              return $query->result_array();
            }
          }
          else{
            $this->db->select('*');
            $this->db->from('service');
            $this->db->where('ServiceID', $servid);
            $query = $this->db->get();
            $this->session->set_userdata('id', 'ServID');
            return $query->result_array();
          }
        }
        else{
          $this->db->select('*');
          $this->db->from('pet');
          $this->db->where('PetID', $petid);
          $query = $this->db->get();
          $this->session->set_userdata('id', 'PetID');
          return $query->result_array();
        }
      }
    }
  }
}
?>

<?php

class Register_model extends CI_Model {
  public function _construct(){
    $this->load->database();
  }

  public function success(){
  $fname = $this->input->post('form-first-name');
  $lname = $this->input->post('form-last-name');
  $name = $fname.' '.$lname;
  $aname = $this->input->post('form-email-address');
  $pass = $this->input->post('form-password');
  $user = $this->input->post('form-username');

  $encryptedpass = password_hash($pass, PASSWORD_DEFAULT, ['cost' => 12]);

  $acc = array(
    'AccountUser' => $user,
    'AccountPass' => $encryptedpass
  );
  $this->db->insert('account', $acc);

    $conn = new mysqli('localhost', 'root', '', 'plc_db');
		$query = 'Select AccountID from account where AccountUser = "'.$user.'"';
		$result = $conn->query($query);
		if($result->num_rows > 0){
			while($row = $result->fetch_assoc()){
          $bio = $row['AccountID'];
				}

    $data = array(
      'AccountID' => $bio,
      'AccountName' => $name
    );

    $this->db->insert('accbio', $data);
    return $name;
  }
}
}
?>

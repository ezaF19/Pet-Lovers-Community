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

  $encryptedpass = password_hash($pass, PASSWORD_DEFAULT, ['cost' => 12]);

    $acc = array(
      'AccountName' => $name,
      'AccountContact' => $aname
    );
    $this->db->insert('accbio', $acc);

    $conn = new mysqli('localhost', 'root', '', 'plc_db');
		$query = 'Select BioID from accbio where AccountName = "'.$name.'"';
		$result = $conn->query($query);
		if($result->num_rows > 0){
			while($row = $result->fetch_assoc()){
          $bio = $row['BioID'];
				}

    $data = array(
      'BioID' => $bio,
      'AccountUser' => $this->input->post('form-username'),
      'AccountPass' => $encryptedpass
    );

    $this->db->insert('account', $data);
    return $name;
  }
}
}
?>

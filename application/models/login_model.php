<?php

class Login_model extends CI_Model {
  public function _construct(){
    $this->load->database();
  }

  public function check_em(){
  	$email = $this->input->post('em_add');
  	$pass = $this->input->post('pass');
    $conn = new mysqli('localhost', 'root', '', 'plc_db');
		$query = 'Select password, username from account where email = "'.$email.'"';
		$result = $conn->query($query);
		if($result->num_rows > 0){
			while($row = $result->fetch_assoc()){
				if($row['password'] === $pass){
          $username = $row['username'];
          return $username;
				}
				else{
					$err = 'Mismatch!';
					return $err;
				}
			}
		}
	}

}
?>

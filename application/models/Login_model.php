<?php

class Login_model extends CI_Model {
  public function _construct(){
    $this->load->database();
  }

  public function check_em($user){
  	$pass = $this->input->post('password');
    $conn = new mysqli('localhost', 'root', '', 'plc_db');
		$query = 'Select AccountPass from account where AccountUser = "'.$user.'"';
		$result = $conn->query($query);
		if($result->num_rows > 0){
			while($row = $result->fetch_assoc()){
				if($row['AccountPass'] === $pass){
          return $user;
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

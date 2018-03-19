<?php

class Login_model extends CI_Model {
  public function _construct(){
    $this->load->database();
  }

  public function check_em(){
    $err = 'Mismatch!';
    $user = $this->input->post('usrnm');
  	$pass = $this->input->post('psswrd');
    $conn = new mysqli('localhost', 'root', '', 'plc_db');
		$query = 'Select AccountPass, AccountID from account where AccountUser = "'.$user.'"';
		$result = $conn->query($query);
		if($result->num_rows > 0){
			while($row = $result->fetch_assoc()){
        $boolean = password_verify($pass, $row['AccountPass']);
				if($boolean == 'true'){
          $bio = $row['AccountID'];
          $query_next = 'Select AccountName, AccountID from accbio where AccountID = "'.$bio.'"';
      		$result_next = $conn->query($query_next);
      		if($result_next->num_rows > 0){
      			while($row_next = $result_next->fetch_assoc()){
      				if($row_next['AccountID'] === $bio){
                echo "<script>alert('hi');</script>";
                $res_name = $row_next['AccountName'];
                return $res_name;
				      }
            }
          }
        }
				else{
					return $err;
				}
			}
		}
    else{
      return $err;
    }
	}

}
?>

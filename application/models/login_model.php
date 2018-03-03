<?php

class Login_model extends CI_Model {
  public function _construct(){
    $this->load->database();
  }

  public function check_em(){
    $err = 'Mismatch!';    
    $user = $this->input->post('username');
  	$pass = $this->input->post('password');
    $conn = new mysqli('localhost', 'root', '', 'plc_db');
		$query = 'Select AccountPass, BioID from account where AccountUser = "'.$user.'"';
		$result = $conn->query($query);
		if($result->num_rows > 0){
			while($row = $result->fetch_assoc()){
				if($row['AccountPass'] === $pass){
          $bio = $row['BioID'];
          $query_next = 'Select AccountName, BioID from accbio where BioID = "'.$bio.'"';
      		$result_next = $conn->query($query_next);
      		if($result_next->num_rows > 0){
      			while($row_next = $result_next->fetch_assoc()){
      				if($row_next['BioID'] === $bio){
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
        
    public function canlogin($email,$pass){
        $this->db->where('AccountUser',$email);
        $this->db->where('AccountPass',$pass);
        $query = $this->db->get('account');
        if($query->num_rows() >0){
            return true;
        }
        else{
            return false;
        }
    }

}
?>

<?php

class Register_model extends CI_Model {
  public function _construct(){
    $this->load->database();
  }

  public function success(){
  $fname = $this->input->post('first_name');
  $lname = $this->input->post('last_name');
  $name = $fname.', '.$lname;
  $aname = $this->input->post('address');
  $cname = $this->input->post('city');
  $sname = $this->input->post('state');
  $add = $aname.', '.$cname.', '.$sname;

    $acc = array(
      'AccountName' => $name,
      'AccountContact' => $this->input->post('number'),
      'AccountAddress' => $add
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
      'AccountUser' => $this->input->post('username'),
      'AccountPass' => $this->input->post('password')
    );
    
    $this->db->insert('account', $data);
    return $this->input->post('username');
  }
}
}
?>

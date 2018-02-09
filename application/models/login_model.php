<?php

class login_model extends CI_Model {
    
    function login($username,$password){
		$this->db->where('AccountUser',$username);
		
		$this->db->where('AccountPass',$password);
		
		$query = $this->db->get('account');
		
		if($query->num_rows() > 0)
			return true;
    	else
			return false;
	}
	
}
?>
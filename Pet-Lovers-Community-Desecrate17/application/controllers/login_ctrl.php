<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class homepage extends CI_Controller {

	public function index()
	{
		$this->load->view('register');
	}
	
	public function login_checker(){
    $data = array(
    $this->load->model('login_model');
    $username = $this->input->post('username');
    $password = $this->input->post('password');
		if($this->login_model->customerlogin($username,$password))
			echo "Welcome, "+username;
		else
			echo "Something Went Wrong :(";
    }
}
?>	
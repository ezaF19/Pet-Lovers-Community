<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class homepage extends CI_Controller {

	public function index()
	{
		$this->load->view('register');
	}
	
	public function register_checker(){
    $data = array(
    "AccountUsername" => $this->input->post("username"),
    "AccountPassword" => $this->input->post("password"),
    "AccountName" => $this->input->post("name"),
    "AccountAddress" => $this->input->post("address"),
    "AccountContact" => $this->input->post("email"),
	"AccountEmail" => $this->input->post("contact")
    );
	
    $this->load->model('register_model');
	  
    $this->register_model->registercustomer($data);
	  
    echo "Account Registration Successful!";
    }
}
?>	
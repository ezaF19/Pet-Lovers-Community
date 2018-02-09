<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Register extends CI_Controller {

	public function index(){
		$data['title'] = 'Register';

		$this->form_validation->set_rules('first_name', 'First Name', 'required');
		$this->form_validation->set_rules('last_name', 'Last Name', 'required');
		$this->form_validation->set_rules('email', 'Email', 'required');
		$this->form_validation->set_rules('password', 'Password', 'required');

		if($this->form_validation->run() === FALSE){
			$this->load->view('template/header');
			$this->load->view('pages/register', $data);
			$this->load->view('template/footer');
		}
		else{
			$result['username'] = $this->register_model->success();
			$this->load->view('template/header');
			$this->load->view('pages/user', $result);
			$this->load->view('template/footer');
		}
	}

	// public function register_checker(){
  //   $data = array(
  //   "AccountUsername" => $this->input->post("username"),
  //   "AccountPassword" => $this->input->post("password"),
  //   "AccountName" => $this->input->post("name"),
  //   "AccountAddress" => $this->input->post("address"),
  //   "AccountContact" => $this->input->post("email"),
	// "AccountEmail" => $this->input->post("contact")
  //   );
  //
  //   $this->load->model('register_model');
  //
  //   $this->register_model->registercustomer($data);
  //
  //   echo "Account Registration Successful!";
  //   }
}
?>

<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Register extends CI_Controller {
	public function _construct(){
		parent::_construct();

	}

	public function index(){
		$data = array();
		if($_SERVER['REQUEST_METHOD'] == "POST"){
		$validate = array(
			array('field'=>'first_name','label'=>'First Name','rules'=>'trim|required',array('required' => 'You must provide a %s.')),
			array('field'=>'last_name','label'=>'Last Name','rules'=>'trim|required'),
			array('field'=>'address','label'=>'Address','rules'=>'trim|required'),
			array('field'=>'city','label'=>'City','rules'=>'trim|required'),
			array('field'=>'state','label'=>'State','rules'=>'trim|required'),
			array('field'=>'number','label'=>'Phone Number','rules'=>'trim|required'),
			array('field'=>'username','label'=>'Username','rules'=>'trim|required'),
			array('field'=>'password','label'=>'Password','rules'=>'trim|required')
	);

	$this->form_validation->set_rules($validate);


		if($this->form_validation->run() === FALSE){
			$this->form_validation->set_message('user', 'The {user} field is required');
			$data['errors'] = validation_errors();
		}
		else{
			$result = $this->register_model->success();
			$this->session->set_userdata('username', $result);
			$this->load->view('template/header');
			redirect('user');
			$this->load->view('template/footer');
		}
	}
			$this->load->view('pages/register', $data);
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

<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Register extends CI_Controller {
	public function _construct(){
		parent::_construct();

	}
	public function index(){
		$validate = array(
			array('field'=>'first_name','label'=>'First Name','rules'=>'trim|required',array('required' => 'You must provide a %s.')),
			array('field'=>'last_name','label'=>'Last Name','rules'=>'trim|required'),
			array('field'=>'username','label'=>'Username','rules'=>'trim|required'),
			array('field'=>'email_address','label'=>'Email Address','rules'=>'trim|required'),
			array('field'=>'password','label'=>'Password','rules'=>'trim|required')
	);

	$this->form_validation->set_rules($validate);
	$pass = trim($_POST['password']);
	$phone = trim($_POST['number']);

		if($this->form_validation->run() === FALSE){
			//error message
			$this->form_validation->set_message('user', 'The {user} field is required');
			$data['errors'] = validation_errors();
		}
		else{

		}
		$this->load->view('pages/register', $data);
	}

}
?>

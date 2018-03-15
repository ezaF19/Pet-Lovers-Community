<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Register extends CI_Controller {
	public function _construct(){
		parent::_construct();

	}
	public function index(){
		$data = array();
		$validate = array(
			array('field'=>'form-first-name','label'=>'First Name','rules'=>'trim|required',array('required' => 'You must provide a %s.')),
			array('field'=>'form-last-name','label'=>'Last Name','rules'=>'trim|required'),
			array('field'=>'form-username','label'=>'Username','rules'=>'trim|required'),
			array('field'=>'form-email-address','label'=>'Email Address','rules'=>'trim|required'),
			array('field'=>'form-password','label'=>'Password','rules'=>'trim|required')
	);

	$this->form_validation->set_rules($validate);
	$pass = trim($this->input->post('form-password'));
		if($this->form_validation->run() === FALSE){
			//error message
			$this->form_validation->set_message('user', 'The {user} field is required');
			$data['errors'] = validation_errors();
		}
		else{
		if(strlen($pass) < 8){
			echo "<script>
				alert('Password must be 8 characters!');
				window.location.href='error';
				</script>";
		}
		else{
			$result = $this->register_model->success();
			$this->session->set_userdata('username', $result);
			$this->load->view('template/header');
			redirect('user');
			$this->load->view('template/footer');
		}
	}
		$this->load->view('template/header');
		$this->load->view('pages/register', $data);
		$this->load->view('template/footer');
	}

	public function error()
	{
		redirect('register');
	}
}
?>

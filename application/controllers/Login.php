<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Login extends CI_Controller {
	public function index(){
		$data['title'] = 'Login';

		$result = $this->login_model->check_em();
		$user['username'] = $result;
		if($result === 'Mismatch!'){
			echo $result;
		}
		else{
			$this->load->view('template/header');
			$this->load->view('pages/user', $user);
			$this->load->view('template/footer');
		}
	}
}
?>

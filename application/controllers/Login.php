<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Login extends CI_Controller {
	public function index(){
		if ( $_SERVER['REQUEST_METHOD']=='POST' ){
			$name = $this->input->post('username');

			$this->session->set_userdata('username', $name);
			$result = $this->login_model->check_em($name);
			$user['username'] = $result;
			if($result === 'Mismatch!'){
				echo $result;
			}
			else{
				$this->load->view('template/header');
				redirect('user');
				$this->load->view('template/footer');
			}
		}
	}
}
?>

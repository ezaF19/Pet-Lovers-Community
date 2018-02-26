<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Login extends CI_Controller {
	public function index(){
		if ( $_SERVER['REQUEST_METHOD']=='post' ){
			$result = $this->login_model->check_em();
			$user['username'] = $result;
			$this->session->set_userdata('username', $result);
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

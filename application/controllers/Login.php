<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Login extends CI_Controller {
	public function index(){
		if($this->input->post('usrnm') == 'Admin'){
			if($this->input->post('psswrd') == 'admin'){
				$this->session->set_userdata('admin', $this->input->post('usrnm'));
				redirect('admin');
			}
		}
		else{
			$result = $this->login_model->check_em();
			$user['username'] = $result;
			$this->session->set_userdata('username', $result);
			if($result != 'Mismatch!'){

				$this->load->view('template/header');
				redirect('user');
				$this->load->view('template/footer');
			}
			else{
			echo "<script>
					alert('Mismatch!');
					window.location.href='sign';
					</script>";
			}
	}
}
	public function sign(){
		redirect('sign');
	}
}
?>

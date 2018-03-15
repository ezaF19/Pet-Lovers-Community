<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Login extends CI_Controller {
	public function index(){
			$result = $this->login_model->check_em();
			$user['username'] = $result;
			$this->session->set_userdata('username', $result);
			if($result === 'Mismatch!'){
				echo "<script>
					alert('$result');
					window.location.href='sign';
					</script>";
			}
			else{
				$this->load->view('template/header');
				redirect('user');
				$this->load->view('template/footer');
			}
	}
	public function sign(){
		redirect('sign');
	}
}
?>

<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Login extends CI_Controller {
	public function index(){
            $email = $this->input->post('email');
            $pass = $this->input->post('password');
            if($email == 'joven@gmail.com' && $pass == '12345'){
                redirect(base_url().'login/users');
            }
            else{
                echo 'Mismatch!';
            }
            /*if ( $_SERVER['REQUEST_METHOD']=='post' ){
			$result = $this->login_model->check_em();
			$user['username'] = $result;
			$this->session->set_userdata('username', $result);
			if($result === 'Mismatch!'){
				echo $result;
			}
			else{
				$this->load('users');
			}
		}*/
	}
        public function users(){
            $email = $this->input->post('email');
            $pass = $this->input->post('password');
            $this->load->model('Login_model');
            if($this->Login_model->canlogin($email,$pass)){
                $this->load->view('template/header');
                $this->load->view('pages/user');
                $this->load->view('template/footer');
            }
            else{
                echo 'Mismatch!';
            }
            
        }
}
?>

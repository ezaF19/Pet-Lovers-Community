<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class User extends CI_Controller {
  public function posts(){
  $this->load->model('userpost_model');
  $data['post']=$this->userpost_model->disp_post();
  $this->load->view('template/header');
  $this->load->view('pages/user', $data);
  $this->load->view('template/footer');
}
  public function plcpost(){
    redirect('user');
  }
}
?>

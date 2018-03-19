<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Plcpost extends CI_Controller {
  public function posting(){
    if($_SERVER['REQUEST_METHOD'] == 'POST'){
    $pst = $this->input->post('usrpst');
    if($pst == ''){
      redirect('user');
    }
    else{
      $this->load->model('userpost_model');
      $this->userpost_model->save_post();
      redirect(base_url() . 'user/posts');
    }
  }
}
}
 ?>

<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class plcrecent extends CI_Controller {
  public function posts(){
    if($_SERVER['REQUEST_METHOD'] == 'POST'){
      $this->load->model('recentposts_model');
      $data['pst']=$this->recentposts_model->posts();
      $this->load->view('template/header');
      $this->load->view('pages/recent', $data);
      $this->load->view('template/footer');
    }
  }
}
?>

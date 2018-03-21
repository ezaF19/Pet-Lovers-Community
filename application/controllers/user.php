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

  public function delete($cntnt){
    $this->load->model('userpost_model');
    $result = $this->userpost_model->get_delete($cntnt);
    if($result == true){
      redirect('user');
    }
  }

  public function read($id){
    $this->load->model('userpost_model');
    $result['data'] = $this->userpost_model->read($id);
    $this->load->view('pages/see_more', $result);
  }
  // public function savepet(){
  //   $stmt = $this->input->post('usrpst');
  //   echo "<script>alert('$stmt');</script>";
  //   $this->load->model('userpost_model');
  //   $result = $this->userpost_model->save_pet();
  //   if($result == "true"){
  //     $too = $this->userpost_model->save_post_pet($stmt);
  //     if($too == "true"){
  //       redirect('user');
  //     }
  //   }
  // }
}
?>

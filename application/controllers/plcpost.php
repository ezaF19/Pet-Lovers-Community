<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Plcpost extends CI_Controller {
  public function posting(){
    if($_SERVER['REQUEST_METHOD'] == 'POST'){
    $pst = $this->input->post('usrpst');
    $ctgry = $this->input->post('category');
    if($pst == ''){
      redirect('user');
    }
    else if($ctgry == 'Choose...'){
      redirect('user');
    }
    else{
      if($ctgry == 'Pet'){
        $this->load->model('userpost_model');
        $this->userpost_model->save_post_pet();
        redirect(base_url() . 'user/posts');
      }
      else if($ctgry == 'Item'){
      $this->load->model('userpost_model');
      $this->userpost_model->save_post_item();
      redirect(base_url() . 'user/posts');
    }
    else if($ctgry == 'Service'){
    $this->load->model('userpost_model');
    $this->userpost_model->save_post_serv();
    redirect(base_url() . 'user/posts');
  }
}
  }
  }

public function save_adopt()
{
  $this->load->model('userpost_model');
  $this->userpost_model->save_post_pet();
  redirect(base_url() . 'user/posts');
}

public function save_item()
{
  $this->load->model('userpost_model');
  $this->userpost_model->save_post_item();
  redirect(base_url() . 'user/posts');
}

  public function service_post()
  {
  $this->load->model('userpost_model');
  $this->userpost_model->save_post_serv();
  redirect(base_url() . 'user/posts');
  }

  public function user(){
    redirect(base_url().'user/savepet');
  }
}
 ?>

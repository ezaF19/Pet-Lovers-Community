<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Register extends CI_Controller {
	public function _construct(){
		parent::_construct();

	}

     public function create_post(){
          if ($this->session->userdata('u_id')=='2') {
              $result = $this->m->create_post();
              if($result){
                  $this->session->set_flashdata('success_msg', 'Post added successfully.');
              }
              else{
                  $this->session->set_flashdata('error_msg', 'Post failed to add!');
              }
              redirect(base_url() . 'dashboard/user');
          }
          elseif($this->session->userdata('u_id')=='1'){
              redirect(base_url() . 'admin/admin');
          }
          else{
              redirect(base_url());
          }

    }

    public function editpost($id){
        if ($this->session->userdata('u_id')=='2') {
            $data['post'] = $this->m->getBlogByIdp($id);
            $this->load->view('userpage/editpost', $data);
        }
        elseif($this->session->userdata('u_id')=='1'){
            redirect(base_url() . 'admin/admin');
        }
        else{
            redirect(base_url());
        }
    }

    public function deletepost($id){
        $result = $this->m->deletepost($id);
        redirect(base_url('dashboard/user'));
    } 

    public function viewprofile(){
        if ($this->session->userdata('u_id')=='2') {
            $data['posts'] = $this->m->getPost();
            $this->load->view('userpage/viewprofile',$data); 
        }
        elseif($this->session->userdata('u_id')=='1'){
            redirect(base_url() . 'admin/admin');
        }
        else{
            redirect(base_url());
        }
    }

    public function create_post_in_profile(){
      if ($this->session->userdata('u_id')=='2') {
          $result = $this->m->create_post();
          if($result){     
              $this->session->set_flashdata('success_msg', 'Post added successfully.');
          }
          else{
              $this->session->set_flashdata('error_msg', 'Post failed to add!');
          }
          redirect(base_url() . 'dashboard/viewprofile');
      }
      elseif($this->session->userdata('u_id')=='1'){
            redirect(base_url() . 'admin/admin');
      }
      else{
            redirect(base_url());
      }
    }

    public function editpost_inprofile($id){
        if ($this->session->userdata('u_id')=='2') {
            $data['post'] = $this->m->getBlogByIdp($id);
            $this->load->view('userpage/editpost_inprofile', $data);
        }
         elseif($this->session->userdata('u_id')=='1'){
            redirect(base_url() . 'admin/admin');
        }
        else{
            redirect(base_url());
        }
    }

    public function deletepost_inprofile($id){
        $result = $this->m->deletepost($id);
        redirect(base_url('dashboard/viewprofile'));
    }

    public function updatepost_inprofile(){
        if ($this->session->userdata('u_id')=='2') {
          $result = $this->m->updatepost();
          redirect(base_url('dashboard/viewprofile'));
        }
        elseif($this->session->userdata('u_id')=='1'){
            redirect(base_url() . 'admin/admin');
        }
        else{
            redirect(base_url());
        }
    }

    public function updatepost(){
        if ($this->session->userdata('u_id')=='2') {
            $result = $this->m->updatepost();
            redirect(base_url('dashboard/user'));
        }
        elseif($this->session->userdata('u_id')=='1'){
            redirect(base_url() . 'admin/admin');
        }
        else{
            redirect(base_url());
        }
    }    
    
}
    
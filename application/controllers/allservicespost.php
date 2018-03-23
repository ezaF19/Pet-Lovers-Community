<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Allservicespost extends CI_Controller {
	function _construct(){
		parent::_construct();
                $this->load->model('postmodel');

	}

     public function create_post(){
               $this->load->model('postmodel');
               $this->postmodel->create_post();
                $this->session->set_flashdata('posted', 'You successfully posted an post!'); 
              redirect(base_url() . 'allservices/index');
          }
    public function deletepost(){
        $this->load->model('postmodel');
        $this->postmodel->deletepost($this->input->post('ServiceID'));
         $this->session->set_flashdata('deleted', 'You successfully deleted a post!');
         redirect(base_url() . 'allservices/index');
    }
    
   
    
}
    
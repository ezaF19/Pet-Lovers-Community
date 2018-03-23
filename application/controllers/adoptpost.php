<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Adoptpost extends CI_Controller {
	function _construct(){
		parent::_construct();

	}

     public function create_post(){
               $this->load->model('adoptmodel');
               $this->adoptmodel->create_post();

 $this->session->set_flashdata('posted', 'You successfully posted an post!'); 
              redirect(base_url() . 'adoptsales/sales');
          }
          public function deletepost(){
        $this->load->model('adoptmodel');
        $this->adoptmodel->deletepost($this->input->post('PetID'));
         $this->session->set_flashdata('deleted', 'You successfully deleted an post!');
         redirect(base_url() . 'adoptsales/sales');
    }





}

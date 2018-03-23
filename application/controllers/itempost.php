<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Itempost extends CI_Controller {
	function _construct(){
		parent::_construct();

	}

     public function create_post(){
               $this->load->model('itempostmodel');
               $this->itempostmodel->create_post();
              
              $this->session->set_flashdata('posted', 'You successfully posted an post!'); 
              redirect(base_url() . 'itemsales/sales');
          }

    public function deletepost(){
        $this->load->model('itempostmodel');
        $this->itempostmodel->deletepost($this->input->post('ItemID'));
         $this->session->set_flashdata('deleted', 'You successfully deleted an post!');
         redirect(base_url() . 'itemsales/sales');
    }
   
    
}
    
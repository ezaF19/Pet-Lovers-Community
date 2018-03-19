<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Itempost extends CI_Controller {
	function _construct(){
		parent::_construct();

	}

     public function create_post(){
               $this->load->model('postmodel');
               $this->postmodel->create_post();
              
              
              redirect(base_url() . 'itemsales/sales');
          }

    
   
    
}
    
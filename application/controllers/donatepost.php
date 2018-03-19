<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class donatepost extends CI_Controller {
	function _construct(){
		parent::_construct();

	}
     public function create_post(){		
            $this->load->model('donate_model');
            $this->donate_model->create_post();
            redirect(base_url() . 'donations');
			
			}

    
   
    
}
    
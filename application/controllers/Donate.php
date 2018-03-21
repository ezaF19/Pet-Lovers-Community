<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Donate extends CI_Controller {

    public function donates(){
        $this->load->model('donate_model');
         $data['item']=$this->donate_model->getData();
         $this->load->view('pages/donations', $data);
		
    }

}

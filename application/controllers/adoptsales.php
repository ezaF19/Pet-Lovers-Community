<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Adoptsales extends CI_Controller {

    public function sales(){
        $this->load->model('adoptmodel');
         $data['item']=$this->adoptmodel->getData();
         $this->load->view('template/header');
         $this->load->view('pages/adoptions', $data);
         $this->load->view('template/footer');

    }
}

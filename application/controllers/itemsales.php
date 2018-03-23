<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Itemsales extends CI_Controller {

    public function sales(){
        $this->load->model('itempostmodel');
         $data['item']=$this->itempostmodel->getData();
         $this->load->view('template/header');
         $this->load->view('pages/itemsales', $data);
         $this->load->view('template/footer');

    }
	public function featured(){
        redirect('featured');

    }
	public function recent(){
        redirect('recent');

    }
	public function adoptions(){
        redirect('adoptions');

    }
	public function donations(){
        redirect('donations');

    }
    public function allservices()
    {
      redirect('allservices');
    }
}

<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Dashboard extends CI_Controller {

    public function __construct() {
        parent::__construct();
       // $this->load->helper(array('getmenu','url'));
         $this->load->library(array('session'));
         if(!$this->session->userdata('is_loged')){
             redirect('login');
         }
         
    }

    public function index() {
        $this->load->view('dashboard');
    }
    
}


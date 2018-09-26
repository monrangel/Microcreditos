<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Entregas extends CI_Controller{
    public function __construct() {
        parent::__construct();
        $this->load->helper('url');
        
       // $this->load->model('Index');
         //$this->load->library('form_validation');
         //$this->load->helper(array('auth/login_rules'));
        
    }
    public function index() {
        $this->load->view('entregas');   
    }
}

<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Clientes extends CI_Controller{
    public function __construct() {
        parent::__construct();
        $this->load->helper('url');
        $this->load->model('MClientes');
     
         //$this->load->library('form_validation');
         //$this->load->helper(array('auth/login_rules'));
        
    }
    public function index() {
        $this->load->view('clientes');   
    }
    
    public function create(){
        
    }
}

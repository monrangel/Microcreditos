<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Login extends CI_Controller {

    public function __construct() {
        parent::__construct();
       // $this->load->helper(array('getmenu','url'));
        $this->load->model('Usuarios');
         //$this->load->library(array('session','form_validation'));
         //$this->load->library(array('session','form_validation'));
         $this->load->library('form_validation');
         $this->load->helper(array('auth/login_rules'));
         //$this->load->model('Auth');
    }

    public function index() {
        //$data['menu']=main_menu();
        //$this->load->view('login',$data);
        $this->load->view('login');
        
    }
    public function validate(){
        //var_dump(getLoginRules());
        //$this->form_validation->set_error_delimiters('<div class="error', '</div>');
        $this->form_validation->set_error_delimiters('', '');
       $rules=  getLoginRules();
       $this->form_validation->set_rules($rules);
       if($this->form_validation->run()===FALSE){
           //$this->load->view('login');
           // echo "test";
           $errors=array(
               'email'=>form_error('email'),
               'password'=>  form_error('password')
           );
           echo json_encode($errors);
           //$this->output->set_status_header(400);
       }else{
           
       }
       
        
        
//        $email = $this->input->post('email');
//        $password = $this->input->post('password');
//        //var_dump($username,$email,$password,$password_confirm);
//        $config = array(
//            array(
//                'field' => 'email',
//                'label' => 'Correo Electrónico',
//                'rules' => 'required|valid_email',
//                'errors' => array(
//                    'required' => 'El %s es invalido.',
//                    'valid_email'=> "El formato de %s es inválido"
//                ),
//            ),
//            array(
//                'field' => 'password',
//                'label' => 'Contraseña',
//                'rules' => 'required',
//                'errors' => array(
//                    'required' => 'La %s es requerida.',
//                ),
//            ),
//        );
//
//        $this->form_validation->set_rules($config);
//
//        if ($this->form_validation->run() == FALSE) {
//            //$data['menu'] = main_menu();
//            $this->load->view('login');
//        } else {
//            $dataq = array(
//                
//                'email' => $email,
//                'password' => $password,
//                    //'contrasena_confirm' => $password_confirm,
//            );
//
//            //$data['menu'] = main_menu();
//            $dataValidUser=$this->Usuarios->select($dataq);
//            if ($dataValidUser == null) {
//                $data['msg'] = 'Ocurrio un error al ingresar los datos... intente mas tarde...';
//                $this->load->view('login', $data);
//            } else {
//                $this->load->view('dashboard', $dataValidUser);
//            };
//        }
        
    }

}

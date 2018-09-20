<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Registro extends CI_Controller {

    public function __construct() {
        parent::__construct();
        $this->load->helper(array('getmenu', 'url'));
        $this->load->database();
        $this->load->model('Usuarios');
        $this->load->library(array('form_validation'));
    }

    public function index() {
        $data['menu'] = main_menu();
        $this->load->view('registro', $data);
        $query = $this->db->get('tr_usuarios');
        //var_dump($query->result());
    }

    public function create() {
        $username = $this->input->post('username');
        $email = $this->input->post('email');
        $password = $this->input->post('password');
        $password_confirm = $this->input->post('password_confirm');
        //var_dump($username,$email,$password,$password_confirm);
        $config = array(
            array(
                'field' => 'username',
                'label' => 'Nombre de Usuario',
                'rules' => 'required|alpha_numeric'
            ),
            array(
                'field' => 'email',
                'label' => 'correo',
                'rules' => 'required|valid_email',
                'errors' => array(
                    'required' => 'El %s es invalido.',
                ),
            ),
        );

        $this->form_validation->set_rules($config);

        if ($this->form_validation->run() == FALSE) {
            $data['menu'] = main_menu();
            $this->load->view('registro',$data);
        } else {
            $dataq = array(
                'nombre_usuario' => $username,
                'correo' => $email,
                'contrasena' => $password,
                    //'contrasena_confirm' => $password_confirm,
            );

            $data['menu'] = main_menu();
            if (!$this->Usuarios->create($dataq)) {
                $data['msg'] = 'Ocurrio un error al ingresar los datos... intente mas tarde...';
                $this->load->view('registro', $data);
            } else {
                $data['msg'] = 'Registrado correctamente!';
                $this->load->view('registro', $data);
            };
        }
    }

}

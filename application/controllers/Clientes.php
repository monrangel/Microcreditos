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
        $nombre=$this->input->post('nombre');
        $a_paterno=$this->input->post('a_paterno');
        $a_materno=$this->input->post('a_materno');
        $calle=$this->input->post('calle');
        $num_int=$this->input->post('num_int');
        $num_ext=$this->input->post('num_ext');
        $entidad_nacimiento=$this->input->post('entidad_nacimiento');
        $municipio_nacimiento=$this->input->post('municipio_nacimiento');
        $localidad_radicacion=$this->input->post('localidad_radicacion');
        $telefono=$this->input->post('telefono');
        $curp=$this->input->post('curp');
        $rfc=$this->input->post('rfc');
        $fecha_nacimiento=$this->input->post('fecha_nacimiento');
        $nombre=$this->input->post('nombre');
        $colonia=$this->input->post('colonia');
        $pais_nacimiento=$this->input->post('pais_nacimiento');
        $entidad_radicacion=$this->input->post('entidad_radicacion');
        $municipio_radicacion=$this->input->post('municipio_radicacion');
        $pais_radicacion=$this->input->post('pais_radicacion');
        $data=array(
            'nombre'=>$nombre,
            'a_paterno'=>$a_paterno,
            'a_materno'=>$a_materno,
            'calle'=>$calle,
            'num_int'=>$num_int,
            'entidad_nacimiento'=>$entidad_nacimiento,
            'municipio_nacimiento'=>$municipio_nacimiento,
            'localidad_radicacion'=>$localidad_radicacion,
            'telefono'=>$telefono,
            'curp'=>$curp,
            'rfc'=>$rfc,
            'fecha_nacimiento'=>$fecha_nacimiento,
            'estatus_cliente'=>0,
            'colonia'=>$colonia,
            'pais_nacimiento'=>$pais_nacimiento,
            'entidad_radicacion'=>$entidad_radicacion,
            'municipio_radicacion'=>$municipio_radicacion,
            'pais_radicacion'=>$pais_radicacion,
            
        );
        $this->MClientes->create($data);
        
    }
}

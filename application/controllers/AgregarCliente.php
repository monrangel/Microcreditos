<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class AgregarCliente extends CI_Controller{
    public function __construct() {
        parent::__construct();
        $this->load->helper('url');
        $this->load->database();
        $this->load->model('MClientes');
        $this->load->library(array('form_validation'));

 
    }
    public function index() {
        //$query = $this->db->get('tr_clientes');
        $this->load->view('agregarCliente');   
        
    }
    
    public function create(){
        $nombre=$this->input->post('nombre');
        $a_paterno=$this->input->post('a_paterno');
        $a_materno=$this->input->post('a_materno');
        $calle=$this->input->post('calle');
        $interior=$this->input->post('interior');
        $exterior=$this->input->post('exterior');
        $entidad_nacimiento=$this->input->post('entidad_nacimiento');
        $municipio_nacimiento=$this->input->post('municipio_nacimiento');
        $localidad_radicacion=$this->input->post('localidad_radicacion');
        $telefono=$this->input->post('telefono');
        $curp=$this->input->post('curp');
        $rfc=$this->input->post('rfc');
        $fecha_nacimiento=$this->input->post('fecha_nacimiento');
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
            'interior'=>$interior,
            'exterior'=>$exterior,
            'entidad_nacimiento'=>$entidad_nacimiento,
            'municipio_nacimiento'=>$municipio_nacimiento,
            'localidad_radicacion'=>$localidad_radicacion,
            'telefono'=>$telefono,
            'curp'=>$curp,
            'rfc'=>$rfc,
            'fecha_nacimiento'=>$fecha_nacimiento,
            'estatus_cliente'=>1,
            'colonia'=>$colonia,
            'pais_nacimiento'=>$pais_nacimiento,
            'entidad_radicacion'=>$entidad_radicacion,
            'municipio_radicacion'=>$municipio_radicacion,
            'pais_radicacion'=>$pais_radicacion,
            
        );
       // $this->MClientes->create($data);
        if ($this->MClientes->create($data)) {
            $data['msg']='Registrado Correctamente.';
        $this->load->view('clientes',$data);
        
            //return true;
        }else{
            $data['msg']='Ocurrio un error al ingresar los datos.';
            $this->load->view('agregarCliente',$data);
        }
        
        
    }
    
    public function traePaises() {
        
    }
    public function traeEstados() {
        
    }
    public function traeMunicipios() {
        
    }
}

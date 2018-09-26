<?php

/**
 * Description of Usuarios
 *
 * @author RAMON.RANGEL
 */
class Usuarios extends CI_Model {
    function __construct() {
        $this->load->database();
        //parent::__construct();
    }
    
    public function create($data) {
        $data=array(
            'nombre_usuario' => $data['nombre_usuario'],
            'usuario' => $data['email'],
            'password' => $data['password'],
            'estatus' => 1,
            'rango' => 2,
        );
        if ($this->db->insert('tr_usuarios',$data)) {
            return true;
        }
        return true;
    }
    
    public function select($data) {
        $rs = $this->db->get_where('tr_usuarios', array('usuario' => $data['email'],'password'=>$data['password']))->result_array();
        return $rs;
    }
}

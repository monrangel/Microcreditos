<?php

/**
 * Description of Usuarios
 *
 * @author RAMON.RANGEL
 */
class Auth extends CI_Model {

    function __construct() {
        $this->load->database();
        //parent::__construct();
    }

    public function create($data) {
        $data = array(
            'nombre_usuario' => $data['nombre_usuario'],
            'correo' => $data['correo'],
            'contrasena' => $data['contrasena'],
            'estatus' => 1,
            'rango' => 2,
        );
        if ($this->db->insert('tr_usuarios', $data)) {
            return true;
        }
        return true;
    }

    

}

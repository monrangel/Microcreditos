<?php

/**
 * Description of Usuarios
 *
 * @author RAMON.RANGEL
 */
class MAcceso extends CI_Model {
    function __construct() {
        $this->load->database();
        //parent::__construct();
    }
    
    public function create($data) {
        $data=array(
            'id_perfil' => $data['id_perfil'],
            'id_modulo' => $data['id_modulo'],
            'id_empleado' => $data['id_empleado'],
            'id_tipo_acceso' => $data['id_tipo_acceso'],
        );
        if ($this->db->insert('tr_acceso',$data)) {
            return true;
        }
        return true;
    }
    
    public function select($data) {
        $rs = $this->db->get_where('tr_acceso', array('id_empleado' => $data['id_empleado']))->result_array();
        return $rs;
    }
}

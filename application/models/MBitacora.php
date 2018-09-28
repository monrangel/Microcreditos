<?php

/**
 * Description of Usuarios
 *
 * @author RAMON.RANGEL
 */
class MBitacora extends CI_Model {
    function __construct() {
        $this->load->database();
        //parent::__construct();
    }
    
    public function create($data) {
        $data=array(
            'id_empleado' => $data['id_empleado'],
            'id_modulo' => $data['id_modulo'],
            'id_solicitud' => $data['id_solicitud'],
            'id_cliente' => $data['id_cliente'],
            'actividad' => $data['actividad'],
            'fecha' => $data['fecha'],
            'query' => $data['query'],
            
        );
        if ($this->db->insert('tr_bitacora',$data)) {
            return true;
        }
        return true;
    }
    
    public function select($data) {
        $rs = $this->db->get_where('tr_bitacora', array('id_empleado' => $data['id_empleado']))->result_array();
        return $rs;
    }
}

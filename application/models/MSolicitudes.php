<?php

/**
 * Description of Usuarios
 *
 * @author RAMON.RANGEL
 */
class MSolicitudes extends CI_Model {
    function __construct() {
        $this->load->database();
        //parent::__construct();
    }
    
    public function create($data) {
        $data=array(
            'folio' => $data['folio'],
            'id_cliente' => $data['id_cliente'],
            'id_empleado_vendedor' => $data['id_empleado_vendedor'],
            'id_estatus_solicitud' => $data['id_estatus_solicitud'],
            'id_tipo_solicitud' => $data['id_tipo_solicitud'],
            'fecha_solicitud' => $data['fecha_solicitud'],
            'fecha_control' => $data['fecha_control'],
            'monto_solicitado' => $data['monto_solicitado'],
            'monto_liquidar' => $data['monto_liquidar'],
            'monto_pagado' => $data['monto_pagado'],
            'id_empleado_supervisor' => $data['id_empleado_supervisor'],
            'id_empleado_ejecutivo' => $data['id_empleado_ejecutivo'],
            'id_empleado_autoriza' => $data['id_empleado_autoriza'],
            
        );
        if ($this->db->insert('tr_solicitudes',$data)) {
            return true;
        }
        return true;
    }
    
    public function select($data) {
        $rs = $this->db->get_where('tr_solicitudes', array('id_solicitud' => $data['id_solicitud']))->result_array();
        return $rs;
    }
}

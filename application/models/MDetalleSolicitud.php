<?php

/**
 * Description of Usuarios
 *
 * @author RAMON.RANGEL
 */
class MDetalleSolicitud extends CI_Model {
    function __construct() {
        $this->load->database();
        //parent::__construct();
    }
    
    public function create($data) {
        $data=array(
            'id_solicitud' => $data['id_solicitud'],
            'id_semana' => $data['id_semana'],
            'fecha_pago' => $data['fecha_pago'],
            'monto' => $data['monto'],
            'tipo_monto' => $data['tipo_monto'],
            'id_estatus_semana' => $data['id_estatus_semana'],
            'fecha_control' => $data['fecha_control'],
               
        );
        if ($this->db->insert('tr_detalle_solicitudes',$data)) {
            return true;
        }
        return true;
    }
    
    public function select($data) {
        $rs = $this->db->get_where('tr_detalle_solicitudes', array('id_solicitud' => $data['id_solicitud']))->result_array();
        return $rs;
    }
}

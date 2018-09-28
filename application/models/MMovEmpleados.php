<?php

/**
 * Description of Usuarios
 *
 * @author RAMON.RANGEL
 */
class MMovEmpleados extends CI_Model {
    function __construct() {
        $this->load->database();
        //parent::__construct();
    }
    
    public function create($data) {
        $data=array(
            'id_empleado' => $data['id_empleado'],
            'id_movimiento' => $data['id_movimiento'],
            'observaciones' => $data['observaciones'],
                
        );
        if ($this->db->insert('tr_mov_empleados',$data)) {
            return true;
        }
        return true;
    }
    
    public function select($data) {
        $rs = $this->db->get_where('tr_mov_empleados', array('id_empleado' => $data['id_empleado']))->result_array();
        return $rs;
    }
}

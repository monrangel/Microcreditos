<?php

/**
 * Description of Usuarios
 *
 * @author RAMON.RANGEL
 */
class MEmpleados extends CI_Model {
    function __construct() {
        $this->load->database();
        //parent::__construct();
    }
    
    public function create($data) {
        $data=array(
            'nombre' => $data['nombre'],
            'a_paterno' => $data['a_paterno'],
            'a_materno' => $data['a_materno'],
            'calle' => $data['calle'],
            'num_int' => $data['num_int'],
            'entidad_nacimiento' => $data['entidad_nacimiento'],
            'municipio_nacimiento' => $data['municipio_nacimiento'],
            'localidad_radicacion' => $data['localidad_radicacion'],
            'telefono' => $data['telefono'],
            'curp' => $data['curp'],
            'rfc' => $data['rfc'],
            'fecha_nacimiento' => $data['fecha_nacimiento'],
            'estatus_cliente' => $data['estatus_cliente'],
            'colonia' => $data['colonia'],
            'pais_nacimiento' => $data['pais_nacimiento'],
            'entidad_radicacion' => $data['entidad_radicacion'],
            'municipio_radicacion' => $data['municipio_radicacion'],
            'pais_radicacion' => $data['pais_radicacion'],
        );
        if ($this->db->insert('tr_empleados',$data)) {
            return true;
        }
        return true;
    }
    
    public function select($data) {
        $rs = $this->db->get_where('tr_empleados', array('id_empleado' => $data['id_empleado']))->result_array();
        return $rs;
    }
}

<?php

/**
 * Description of Usuarios
 *
 * @author RAMON.RANGEL
 */
class MClientes extends CI_Model {
    function __construct() {
        $this->load->database();
        //parent::__construct();
    }
    
    function trae_paises(){
        echo ("Entra a trae paises en el modelo");
        $this->db->order_by('descripcion','ASC');
        $query=$this->db->get('tc_paises');
        return $query->result();
    }
    function trae_entidades($id_pais){
        echo 'SIIII';
        echo $id_pais;
        $this->db->where('pais',$id_pais);
         $this->db->order_by('entidad','ASC');
        $query=$this->db->get('tc_entidades');
        $output='<option value="">Selecciona la entidad...</option>';
        foreach ($query->result() as $row){
            $output.='<option value="'.$row->id_entidad.'">'.$row->entidad.'</option>';
        }
        return $output;
    }
    
    
    public function create($data) {
        $data=array(
            'nombre' => $data['nombre'],
            'a_paterno' => $data['a_paterno'],
            'a_materno' => $data['a_materno'],
            'calle' => $data['calle'],
            'interior' => $data['interior'],
            'exterior' => $data['exterior'],
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
        if ($this->db->insert('tr_clientes',$data)) {
            return true;
        }
        return true;
    }
    
    public function select($data) {
        $rs = $this->db->get_where('tr_clientes', array('id_cliente' => $data['id_cliente']))->result_array();
        return $rs;
    }
}

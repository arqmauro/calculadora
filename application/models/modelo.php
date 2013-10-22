<?php

class modelo extends CI_Model {

    function guardarDatos($num1, $oper, $num2, $resultado) {
        $data = array("num1" => $num1, "num2" => $num2, "oper" => $oper, "res" => $resultado);
        $this->db->insert("calculos", $data);
    }

    function consultar() {
        $this->db->select('*');
        return $this->db->get('calculos');
    }

    function eliminar($id) {
        $this->db->where('idoperacion', $id);
        $this->db->delete('calculos');
    }

}

?>

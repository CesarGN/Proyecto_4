<?php

class Modelo extends Conexion {

    public $db;

    function Modelo() {
        parent::Conexion();
    }

    public function sql($sql, $error) {

        $rs = $this->db->Execute($sql);
        $this->get_error($rs, $error);
        return $rs;
    }

    public function get_error($result, $error) {
        if ($result === false) {
            die('Error en ' . $error);
            return false;
        } else {
            return true;
        }
    }

    public function alerta($mensaje) {
       echo "<script>alert(\"$mensaje\");</script>";                       
    }

}
?>

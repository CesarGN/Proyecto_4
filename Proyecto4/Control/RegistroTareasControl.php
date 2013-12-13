<?php

class RegistroTareasControl extends Modelo {

    public function registra_proyecto($datos, $id_usu) {
        $nombre = $datos['nombre'];
        $fecha_ini = $datos['fechai'];
        $fecha_fin = $datos['fechaf'];
        $materia = $datos['materia'];
        $estatus = $datos['estatus'];
        $sql = "INSERT INTO proyectos (id_usuario,nombre,materia,fecha_inicio,fecha_final,estatus)
                values ('" . $id_usu . "','" . $nombre . "','" . $materia . "','" . $fecha_ini . "','" . $fecha_fin . "','" . $estatus . "')";
        $this->sql($sql, 'RegistroTareasControl registra_proyecto');
        $this->alerta("TAREA REGISTRADA");
    }

}

?>

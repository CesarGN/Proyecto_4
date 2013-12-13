<?php

class BorrarControl extends Modelo {

    function borrar_tarea($id_tarea) {
        $sql = "DELETE FROM proyectos WHERE id_proyecto ='" . $id_tarea."'";
        print_r($sql);
        $rs = $this->sql($sql, "BorrarControl borrar tarea");
    }
}
?>

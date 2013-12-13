<?php

class VerControl extends Modelo {

    function regresa_tareas($id_usuario) {
        $sql = "select * from proyectos where id_usuario ='" . $id_usuario . "'";
        $rs = $this->sql($sql, "VerControl  regresa_tareas");
        $rows = $rs->GetArray();
       // if (count($rows) > 0) {
         //   $this->alerta("NO TIENES TAREAS");
           // return false;
        //}
        return $rows;
    }

}

?>

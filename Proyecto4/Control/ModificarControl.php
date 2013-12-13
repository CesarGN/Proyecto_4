<?php

class ModificarControl extends Modelo{

    function regresa_tarea($id_tarea) {
        $sql = "select nombre,materia,fecha_inicio,fecha_final,estatus from proyectos where id_proyecto='" . $id_tarea . "'";
        $rs=$this->sql($sql, "ModificarControl regresa_tarea");
        return $rs->GetArray();      
    }
    
    function actualiza($datos,$id_tarea){
        $sql="UPDATE proyectos SET nombre='".$datos['nombre']."',materia='".$datos['materia']."',fecha_inicio='".$datos['fechai']."',fecha_final='".$datos['fechaf']."',estatus='".$datos['estatus']."' WHERE id_proyecto = ".$id_tarea;
        $rs=$this->sql($sql, "ModificarControl actualiza");
        $this->alerta("ACTUALIZACIÓN HECHA");
        }

}
?>

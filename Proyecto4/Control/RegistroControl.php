<?php

class RegistroControl extends Modelo {
    
    
    function registrar($datos) {
        if($datos['password']==$datos['password2']){
             $sql="INSERT INTO usuario (nombre,usuario,contrasena) VALUES ('".$datos['nombre']."','".$datos['usuario']."','".$datos['password']."')";
             $this->sql($sql,"RegistroControl registrar");
             $this->alerta("Registro correcto");
        }
        $this->alerta("Registro incorrecto revisar contraseñas");    
    }
}
?>

<?php

class RegistroControl extends Modelo {
    
    
    function registrar($datos) {
        if($datos['password']==$datos['password2']){
             $sql="INSERT INTO usuario (nombre,usuario,contrasena) VALUES ('".$datos['nombre']."','".$datos['usuario']."','".$datos['password']."')";
             $this->sql($sql,"RegistroControl registrar");
             return 1;//regresa 1 si se registro correctamente
        }
        return 0;//regresa 0 si no son contraseñas iguales       
    }
}
?>

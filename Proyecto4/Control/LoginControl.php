<?php

class LoginControl extends Modelo {

    function valida($datos) {
        $sql = "SELECT id_usuario,contrasena FROM usuario WHERE usuario = '" . $datos['usuario'] . "'";
        $rs = $this->sql($sql, "LoginControl valida");
        $rows = $rs->GetArray();
        if(count($rows)==0){
            return 0;//regresa 0 si no existe el usuario
        }else{
            if($datos['password']==$rows[0][1]){
                $this->inicia_sesion($datos['usuario'],$rows[0][0]);
                header("Location: Menu.php");
            }else{
                return 1;//regresa 1 si no es la contraseña correcta
            }
        }
        
    }

    function inicia_sesion($usuario, $id_usuario) {
        $_SESSION['usuario'] = $usuario;
        $_SESSION['id_usuario'] = $id_usuario;
    }

}
?>

<?php

include ('../Lib/adodb5/adodb-pager.inc.php');
include ('../Lib/adodb5/adodb.inc.php');
include("../Modelo/Conexion.php");
include("../Modelo/Modelo.php");
include("../Control/RegistroControl.php");

if (isset($_POST['entrar'])) {
    $RC = new RegistroControl();
    $RC->registrar($_POST);
    
}
?>

<!DOCTYPE html>
<html>
    <head>
        <title></title>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <link href="../CSS/General.css" rel="stylesheet">
        <link href="../CSS/Registro.css" rel="stylesheet">
    </head>
    <body>
        <div id="imagen"></div>
        <div id="formulario">
            <div id="titulo"> <h3>Registrate!!!</h3> </div>
            <form   method="post" >
                <div class="centro">

                    <table>
                        <tr>
                            <td><label for="nombre">Nombre</label></td>
                            <td><input id = "nombre" name = "nombre" type="text"/></td>
                        </tr>
                        <tr>
                            <td><label for="nombre">Usuario</label></td>
                            <td><input id = "usuario" name = "usuario" type="text"/></td>
                        </tr>
                        <tr>
                            <td><label for="password">Password</label></td>
                            <td><input id = "password" name = "password" type="password"/></td>
                        </tr>
                        <tr>
                            <td><label for="password2">Confirma password</label></td>
                            <td><input id = "password2" name = "password2" type="password"/></td>
                        </tr>
                        <tr>
                            <td></td>
                            <td><div></div><button id="entrar" name="entrar" type="submit" value="Entrar" class="entrar">Entrar</button></td>
                        </tr>
                    </table>    
                </div>
            </form>
        </div>
    </body>
</html>
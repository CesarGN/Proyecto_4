<?php
session_start();
if (!isset($_SESSION['usuario'])) {
    header("Location: Login.php");
}
?>

<!DOCTYPE html>
<html>
    <head>
        <title></title>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <link href="../CSS/General.css" rel="stylesheet">
        <link href="../CSS/Menu.css" rel="stylesheet">
        <script src="../Js/sincroniza.js"></script>

    </head>
    <body>
        <div id="Principal">
            <h5>Men&uacute;!!!</h5></div>

        <div id="fmenu">

            <div class="centro">
                <table>
                    <tr>
                        <td><a href="RegistroTareas.php"> <button  class="crear">Crear Tarea</button></a></td>
                    </tr>
                    <tr>
                        <td> <a href="Ver.php"><button class="crear"> Ver Tarea</button></a></td>
                    </tr>
                    <tr> 
                        <td><a href=""> <button id="sincroniza"class="crear"> Sincronizar</button></a></td>
                    </tr>
                </table>    
            </div>

        </div>

        <div id="imagenmenu"></div>

        <div id="creditos" >
             INTEGRANTES EQUIPO :       

        </div>
         <div id="creditos"> * Garcia Noyola Cesar Fernando</div>
         <div id="creditos"> * Alvarez Miranda Omar </div>
         <div id="creditos"> * Gomez Lopez Elias</div>
    </body>
</html>
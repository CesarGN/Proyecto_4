<?php 
session_start();
if(!isset($_SESSION['usuario'])){
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
        
    </head>
    <body>
        <div id="Principal">
            <h5>Men&uacute;!!!</h5></div>
        
        <div id="fmenu">
           
            <div class="centro">
                <table>
                    <tr>
                        <td>
                    <button class="crear">
                        Crear Tarea
                    </button>
                            </td>
                    </tr>
                    <tr>
                        <td>
                    <button class="crear">
                        Ver Tarea   
                    </button>
                            </td>
                    </tr>
                    <tr>
                        <td>
                    <button class="crear">
                        Sincronizar
                    </button>
                            </td>
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
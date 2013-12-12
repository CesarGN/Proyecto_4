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
        <link href="../CSS/Botones.css" rel="stylesheet">
    </head>
    <body>
        <div id="Principal">
            <h5>Men&uacute;!!!</h5></div>
        
        <div id="formulario">
           
            <div class="centro">
                <table>
                    <tr>
                        <a href="#" class="crear">CREAR</a>
                    <button>
                        Crear tarea
                    </button>
                    </tr>
                    <tr>
                    <button>
                        Revisar
                    </button>
                    </tr>
                    <tr>
                    <button>
                        
                    </button>
                    </tr>
                </table>    
            </div>

        </div>
    </body>
</html>
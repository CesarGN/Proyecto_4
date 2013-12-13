<?php
session_start();
if (!isset($_SESSION['usuario'])) {
    header("Location: Login.php");
}

include ('../Lib/adodb5/adodb-pager.inc.php');
include ('../Lib/adodb5/adodb.inc.php');
include("../Modelo/Conexion.php");
include("../Modelo/Modelo.php");
include("../Control/ModificarControl.php");
$AC = new ModificarControl();
if (isset($_POST['actualiza'])) {
    //print_r($_POST);
    $AC->actualiza($_POST,$_GET['id_pro']);
}

$datos = $AC->regresa_tarea($_GET['id_pro']);
?>
<html>
    <head>
        <title></title>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <link href="../CSS/General.css" rel="stylesheet">
        <link href="../CSS/RegistroTareas.css" rel="stylesheet">
        <script src="../Js/funciones.js"></script>
        <script src="../Js/insertar.js"></script>
    </head>
    <body>
        <div id="Principal">
            <h5>Actualiza Tarea!!!</h5>
        </div>
        <div id="sesion"><a href="../Modelo/Cerrar.php">Cerrar sesion</a></div>
        <div id="imagen2"></div>
        <div id="formulario">
            <div id="titulo"> <h3>Datos :</h3> </div>
            <form method="post" >
                <div class="centro">

                    <table>
                        <tr>
                            <td><label for="nombre">Nombre</label></td>
                            <td><input class="texto" id = "nombre" name = "nombre" type="text" value="<?php echo $datos[0][0]; ?>"/></td>
                        </tr>
                        <tr>
                            <td><label  for="materia">Materia</label></td>
                            <td> <input class="texto" list="materias" name="materia" id="materia" value="<?php echo $datos[0][1]; ?>">
                                <datalist id="materias">
                                    <option value="TOPICOS AVANZADOS DE PROGRAMACION WEB">
                                    <option value="PROGRAMACION WEB">
                                    <option value="ESTRUCTURA DE DATOS">
                                    <option value="POO">
                                    <option value="fUNDAMENTOS DE PROGRAMACION">
                                    <option value="TOPICOS DE PROGRAMACION">
                                </datalist>
                            </td>
                        </tr>
                        <tr>
                            <td><label  for="fechai">Fecha inicio</label></td>
                            <td><input  type="date" name="fechai" id="fechai" value="<?php echo $datos[0][2]; ?>"></td>
                        </tr>
                        <tr>
                            <td><label  for="fechaf">Fecha final</label></td>
                            <td><input  type="date" name="fechaf" id="fechaf" value="<?php echo $datos[0][3]; ?>"></td>
                        </tr>
                        <tr>
                            <td><label  for="estatus">Estatus</label></td>
                            <td><select  id="estatus" name="estatus" value="<?php echo $datos[0][4]; ?>">
                                    <option>Por iniciar</option>
                                    <option>En proceso</option>
                                    <option>Cancelado</option>
                                    <option>Terminado</option>
                                </select>
                            </td>
                        </tr>

                        <tr>
                            <td></td>   
                            <td>
                                <div></div>

                                <button type="submit" class="btn-danger" id="actualiza" id="actualiza" name="actualiza">Actualiza</button>

                            </td>
                        </tr>
                    </table>    
                </div>
            </form>
        </div>
    </body>
</html>
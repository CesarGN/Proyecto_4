<?php
session_start();
if (!isset($_SESSION['usuario'])) {
    
    header("Location: Login.php");
}
print_r($_SESSION);
include ('../Lib/adodb5/adodb-pager.inc.php');
include ('../Lib/adodb5/adodb.inc.php');
include("../Modelo/Conexion.php");
include("../Modelo/Modelo.php");
include("../Control/RegistroTareasControl.php");

if (isset($_POST['nombre'])) {
    $RT = new RegistroTareasControl();
    $RT->registra_proyecto($_POST, $_SESSION['id_usuario']);
    
}
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
        <div id="imagen"></div>
        <div id="formulario">
            <div id="titulo"> <h3>Registra Tarea!!!</h3> </div>
            <form method="post" >
                <div class="centro">

                    <table>
                        <tr>
                            <td><label for="nombre">Nombre</label></td>
                            <td><input class="texto" id = "nombre" name = "nombre" type="text"/></td>
                        </tr>
                        <tr>
                            <td><label  for="materia">Materia</label></td>
                            <td> <input class="texto" list="materias" name="materia" id="materia">
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
                            <td><input  type="date" name="fechai" id="fechai"></td>
                        </tr>
                        <tr>
                            <td><label  for="fechaf">Fecha final</label></td>
                            <td><input  type="date" name="fechaf" id="fechaf"></td>
                        </tr>
                        <tr>
                            <td><label  for="estatus">Estatus</label></td>
                            <td><select  id="estatus" name="estatus">
                                    <option>Por iniciar</option>
                                    <option>En proceso</option>
                                    <option>Cancelado</option>
                                    <option>Terminado</option>
                                </select>
                            </td>
                        </tr>
                        <tr><td></td>
                            <td>
                                <select class="" id="opc" name="opc" onChange="ocultar_insertar()">
                                    <option >Con conexion</option>
                                    <option >Sin conexion</option>
                                </select>
                            </td>
                        </tr>


                        <tr>
                            <td></td>   
                            <td>
                                <div></div>
                                <input type= "hidden" id="id_usuario" name="id_usuario" value= "<?php echo $_SESSION['id_usuario']; ?>">
                                <button type="submit" class="btn-danger" id="guardar1" name="guardar1">Registrar2</button>
                                <input  type="button" class="btn-danger" id="guardar2" name="guardar2"value="Registrar" style="visibility: hidden;">
                            </td>
                        </tr>
                    </table>    
                </div>
            </form>
        </div>
    </body>
</html>
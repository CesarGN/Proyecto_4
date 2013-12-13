<?php
session_start();
if (!isset($_SESSION['usuario'])) {
    header("Location: Login.php");
}
include ('../Lib/adodb5/adodb-pager.inc.php');
include ('../Lib/adodb5/adodb.inc.php');
include("../Modelo/Conexion.php");
include("../Modelo/Modelo.php");
include("../Control/VerControl.php");

$VC = new VerControl();
$proyectos = $VC->regresa_tareas($_SESSION['id_usuario']);
$url_m = "";
$id_usu = $_SESSION['id_usuario'];
?>
<!DOCTYPE html>
<html>
    <head>
        <title></title>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <link href="../CSS/Ver.css" rel="stylesheet">
    </head>
    <body>
        <div id="imagen">Imagen</div>
        <div id="titulo">Ve, actualiza y borra tus tareas</div>
        <div id="tabla">
            <div class="centro">
                <table >
                    <thead>
                        <tr>
                            <th>NOMBRE</th>
                            <th>MATERIA</th>
                            <th>FECHA INICIO</th>
                            <th>FECHA TERMINO</th>
                            <th>ESTATUS</th>
                            <th>MODIFICAR</th>
                            <th>BORRAR</th>
                        </tr>
                    </thead>
                    <tbody>
                      
                        <?php 
//                        echo '<pre>';
//                        print_r($proyectos);
//                        echo '</pre>';
//                        
                        foreach ($proyectos as $key => $value) : ?>
                            <tr id="iconos">
                                <td><?php echo $proyectos[$key]['nombre']; ?></td>
                                <td><?php echo $proyectos[$key]['materia']; ?></td>
                                <td><?php echo $proyectos[$key]['fecha_inicio']; ?></td>
                                <td><?php echo $proyectos[$key]['fecha_final']; ?></td>
                                <td><?php echo $proyectos[$key]['estatus']; ?></td>

                                <?php $url_m = "Modificar.php?id_pro=" . $proyectos[$key]['id_proyecto'] ?>
                                <?php $url_b = "Borrar.php?id_pro=" . $proyectos[$key]['id_proyecto'] ?>

                                <td><a class="icono" id="modificar" href="<?php  echo $url_m; ?>"></a></td>
                                <td><a class="icono" id="borrar"    href="<?php  echo $url_b; ?>"></a></td>   
                            </tr>
                        <?php endforeach; ?>
                    </tbody>
                </table>

            </div>

        </div>

    </body>
</html>

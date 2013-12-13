<?php
session_start();
if (!isset($_SESSION['usuario'])) {
    header("Location: Login.php");
}
include ('../Lib/adodb5/adodb-pager.inc.php');
include ('../Lib/adodb5/adodb.inc.php');
include("../Modelo/Conexion.php");
include("../Modelo/Modelo.php");
include("../Control/BorrarControl.php");

$BC=new BorrarControl();
$BC->borrar_tarea($_GET['id_pro']);
header("Location: Ver.php");
?>

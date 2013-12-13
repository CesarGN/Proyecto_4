<?php
session_start();
print_r($_SESSION);
unset($_SESSION);
session_destroy();
print_r($_SESSION);
//header("Location: ../Vistas/Login.php");
?>

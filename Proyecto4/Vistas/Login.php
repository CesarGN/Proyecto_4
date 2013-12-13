<?php
session_start();
include ('../Lib/adodb5/adodb-pager.inc.php');
include ('../Lib/adodb5/adodb.inc.php');
include("../Modelo/Conexion.php");
include("../Modelo/Modelo.php");
include("../Control/LoginControl.php");

if (isset($_POST['entrar'])) {
    $LC = new LoginControl();
    $LC->valida($_POST);
}
?>
<!DOCTYPE html>
<html>
    <head>
        <link rel="stylesheet" type="text/css" href="../CSS/login.css" />
    </head>
    <body>
        <div id="logins">
            <h2>INGRESA A TU AGENDA</h2>
            <div class="centro">
                <form id="form" action="" method="post">
                    <fieldset>
                        <p>
                            <label for="usuario">Usuario</label>
                            <input id="usuario" name="usuario" type="text" class="text"/>
                        </p>

                        <p>
                            <label for="password">Password</label>
                            <input id="password" name="password" type="password" class="text"/>
                        </p>


                        <button id="entrar" type="submit" name="entrar" value="Entrar">Entrar</button>

                    </fieldset>
                </form>
            </div>
        </div>

        <div id="loginsimagen">

            <form id="form" action="" method="post">

            </form>
        </div>
    </body>
</html>
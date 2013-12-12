<?php

class Conexion {

   function Conexion(){
        $this->db = ADONewConnection('mysql');
        $this->db->debug = false;
        $this->db->Connect('localhost','root','','proyecto3');
    }

}

?>

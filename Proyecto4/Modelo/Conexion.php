<?php

class Conexion {

   function Conexion(){
        $this->db = ADONewConnection('mysql');
        $this->db->debug = false;
        $this->db->Connect('localhost','root','len21se13','proyecto3');
    }

}

?>

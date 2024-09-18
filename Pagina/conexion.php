<?php
    function MiConexion(){
            $enlace = mysqli_connect("localhost:3307","root","");
            if (!$enlace) {
                exit;
            }
            $BaseDatos=mysqli_select_db($enlace,"pcc");
            if (!$BaseDatos){
                exit;
            }
            return $enlace;
            
            }
?>
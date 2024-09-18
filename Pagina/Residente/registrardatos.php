<?php
    require_once("/Conexion/conexion.php");
    $MiEnlace=MiConexion();
    $Sql="insert into users (Tipo_Documento,ID,Nombre,Apellido,Telefono,Correo,Contrasena,Rol_id) values ('".$_POST["opcion1"]."','".$_POST["doc"]."','".$_POST["Nombres"]."','".$_POST["Apellidos"]."','".$_POST["phone"]."', '".$_POST["correo"]."','".$_POST["pass"]."','".$_POST["opcion2"]."')";
    mysqli_query($MiEnlace, $Sql); 
    header("Location: ./index.php");
?>
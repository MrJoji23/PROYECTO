<html>
<head>
<title>Reporte Nacional de Clientes</title>
</head>
<body>
<h1>Reporte Clientes AmericanLines</h1>
<form action="" method="post">
<TABLE>
<tr>
    <td>Nombre:</td>
    <td><input type="text" name="nombre" size="20" maxlength="30"></td>
</tr>
<tr>
    <td>Direccion:</td>
    <td><input type="text" name="direccion" size="20" maxlength="30"></td>
</tr>
<tr>
    <td>Telefono:</td>
    <td><input type="text" name="telefono" size="20" maxlength="30"></td>
</tr>
<tr>
    <td>Correo Electrónico:</td>
    <td><input type="text" name="email" size="20" maxlength="30"></td>
</tr>
</TABLE>
<input type="submit" name="accion" value="Listar">
</FORM>
<hr>

<?php
    require_once("Conexion.php");
    $Mienlace=MiConexion();
   $result= mysqli_query($Mienlace, "select * from cliente");
?>
<table border="1" cellspacing="2" cellpadding="2" style="margin: 0 auto;">
    <tr>
        <td>&nbsp;Nombre&nbsp;</td>
        <td>&nbsp;Dirección&nbsp;</td>
        <td>&nbsp;Teléfono&nbsp;</td>
        <td>&nbsp;Correo Electrónico&nbsp;</td>
    </tr>
<?php      
    while($row = mysqli_fetch_array($result)) {
        printf("<tr> <td> &nbsp;%s </td><td> &nbsp; %s&nbsp; </td><td> &nbsp;%s&nbsp; </td><td> &nbsp;%s&nbsp; </td></tr>",
            $row["nombre"], $row["direccion"], $row["telefono"], $row["email"]);
}
mysqli_free_result($result);
?>

</table>
</body>
</html>
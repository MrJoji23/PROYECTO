<?php
include("/Conexion/conexion.php")
$Mienlace=MiConexion();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulario de los residentes</title>
    <link rel="stylesheet" type="text/css" href="style.css">
    <script src="script.js"></script>
</head>
<body>
<form action="registrardatos.php" method="post">
<section>
<div class="gen">
    <h1>REGISTRO DE LOS RESIDENTES DEL CONJUNTO ****** </h1>
    <h2>Datos personales</h2> 
    <label for="Nombres">Tipo de documento </label>
    <select name="opcion1" id="opcion"><br>
        <option value="0">Seleccione una opccion</option><br>
        <option value="C.C">Cedula de ciudadania</option><br>
        <option value="T.I">Tarjeta de identidad</option><br>
        <option value="C.E">Cedula de ciuadania</option><br>
        <option value="PPT">Permiso de Permanencia Temporal </option><br>
    </select><br><br>
    <label for="doc">Ingrese su Numero de documento</label>
    <input type="text" name="doc" id="doc"  required placeholder="Numero de documentos" class="P1" >
<label for="Nombres">Nombres </label>
    <input type="text" name="Nombres" value="" placeholder="Ingrese el nombre" class="P1" id="Nombres" required>
<label for="Apellidos">Apellidos</label>
    <input type="text" id="Apellidos" name="Apellidos "value="" placeholder="Ingrese apellido" class="P1"  required>
    <label for="text">Ingrese su telefono </label>
    <input type="tel" name="phone" id="phone"  pattern="[0-9]{10}" required placeholder="Numero de telefono" class="P1" >
<label for="Correo">Correo electronico</label>
    <input type="email" id="Correo" name="Correo" value="" placeholder="Ingrese correo electronico" class="P1" required>
<label for="pass">Contraseña</label>
    <input type="password" id="pass" name="pass" value="" placeholder="Ingrese la Contraseña" class="P1" required>
<label for="Correo">Repita la contraseña</label>
    <input type="password" id="pass" name="pass" value="" placeholder="Ingrese la Contraseña" class="P1" required>
 <label for="Rol">Escoga su rol </label>
    <select name="opcion2" id="opcion"><br>
        <option value="0">Seleccione una opccion</option><br>
        <option value="3">Residente</option><br>
        <option value="4">Visitante</option><br>
        <option value="2">Guardia de seguridad</option><br>
        <option value="1">Administracion </option><br>
    </select><br><br>
</div>
</section>
<div class="gen">
<h2>Información del Apartamento</h2>
<label for="Apartamento">Bloque del conjunto </label>
    <input type="number" name="Apartamento" id="Apartamento" required placeholder="Bloque del conjunto" class="P1">
<label for="Apartamento">Numero de Apartamento</label>
    <input type="number" name="Apartamento" id="Apartamento" required placeholder="Numero apartamento " class="P1" >



</div>
<div class="gen">
    <h2>Información adicional</h2>
    <h4>¿Usted tiene vehiculo?</h4>
    <p class="opc"><input type="radio" name="op"  value="yes"onclick="toggleQuestions()">SI<br></p>
    <p class="opc"><input type="radio" name="op" value="nop"onclick="toggleQuestions()">NO<br><br></p>
    <div id="additional-questions" style="display: none;">
        <h3>¿Qué vehiculo posee?</h3>
        <p class="opc"><input type="radio" name="op2" value="yes" onclick="toggleQuestions2()">CARRO <br></p>
        <p class="opc"><input type="radio" name="op2" value="yes" onclick="toggleQuestions2()">MOTO<br><br></p>
        </div>
   
    <div id="additional-questions2" style="display: none;">
        <h3>Información del vehiculo</h3>
        <label for="Apellidos">Placa</label>
    <input type="text" id="Placa" name="Placa" value="" placeholder="Ingrese su placa" class="P1"  required>
    <label for="Apellidos">MARCA</label>
    <input type="text" id="Marca" name="Marca" value="" placeholder="Ingrese su Marca" class="P1"  required>
    <label for="Apellidos">Color</label>
    <input type="text" id="Color" name="Color" value="" placeholder="Ingrese su Color" class="P1"  required>

    </div>
</div>
    
   
</div>
<div class="gen">
    <input type="submit" value="ENVIAR" class="P2">
</div>
</form>
    

</body>
</html>
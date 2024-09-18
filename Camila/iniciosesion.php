<?php
include ('conexion.php');
$enlace= conexxion();
?>


<html lang="en">
<head>
    <meta charset="utf-8">
    <title>CONTROL DE ACCESO DE USUARIOS</title>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <script src="inicio.js" defer></script>
    <link rel="stylesheet" href="estiloiniciosesion.css">
</head>

<body>
    <header>
        <h1>CONJUNTO RESIDENCIAL ANTURIO</h1>
    </header>

    <div class="container">
        <div class="formulario">
            <h2>INICIO DE SESIÓN</h2>
            <form method="post" action="">
                <div class="username">
                    <b><label for="usuario">Usuario</label></b>
                    <input type="text" name="usuario" id="usuario" autocomplete="off">
                </div>
                <div class="username">
                    <b><label for="contraseña">Contraseña</label></b>
                    <input type="password" name="contraseña" id="contraseña" autocomplete="off">
                </div>
                <input type="submit" value="Iniciar sesión" class="Iniciar" onclick="return validar()">
                <input type="button" value="Registrarse" class="registrarse" onclick="window.location.href='registroguaryadmin.php'">
            </form>
        </div>
    </div>

    <footer>
        <a href="https://twitter.com">Twitter</a>
        <a href="https://facebook.com">Facebook</a>
        <a href="https://instagram.com">Instagram</a>
    </footer>
</body>
</html>



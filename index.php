<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form method="post" action="#">
        <input type="text" name="codigo" placeholder="Codigo" required/><br>
        <input type="text" name="nombres" placeholder="Nombres" required/><br>
        <input type="text" name="apellidos" placeholder="Apellidos" required/><br>
        <input type="text" name="telefono" placeholder="Telefono"/><br>        
        <input type="email" name="correo" placeholder="Email"/><br>
        <input type="submit" name="submit" value="Guardar">
    </form>
</body>
</html>

<?php
if(isset($_POST["submit"])){
    $codigo = $_POST["codigo"];
    $nombres = $_POST["nombres"];
    $apellidos = $_POST["apellidos"];
    $telefono = $_POST["telefono"];
    $correo = $_POST["correo"];

    include_once("estudiante.php");
    $estudiante = new Estudiante($codigo, $nombres, $apellidos, $telefono, $correo);
    echo $estudiante->crearEstudiante();
}
echo '<a href="Mostrar.php?id=$_POST["$id"]"; ?>Mostrar</a>' ;

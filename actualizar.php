<?php
$id=$_GET["id"];
function mostrarEstudiante(){
    $dsn="mysql:host=localhost;dbname=udh";
    $usuario="root";
    $pass="";
echo "<a href='index.php'>"."Regresar"."</a>";
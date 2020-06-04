<?php
$id=$_GET["id"];
$dsn = "mysql:host=localhost;dbname=udh";
$usuario = "root";
$pass = ""; 

try{
    $conn = new PDO($dsn,$usuario, $pass);
    $sql = "DELETE FROM estudiantes WHERE id='$id'";
    $respuesta=$conn->prepare($sql);
    $respuesta->execute();
    $numRows = $respuesta->rowCount();
    if($numRows!=0){
        echo "Se ha borrado";
    }
    else{
        echo "Hubo un error";
    }
} 
catch(PDOException $e) {
    echo $e->getMessage();
}
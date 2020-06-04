<?php
function mostrarEstudiante(){
        $dsn="mysql:host=localhost;dbname=udh";
        $usuario="root";
        $pass="";
        try{
            $conn = new PDO($dsn,$usuario,$pass);
            $sql="SELECT * FROM estudiantes";
            $respuesta = $conn->prepare($sql);
            $respuesta-> execute();
            foreach($respuesta as $estudiante){
                echo "<table border=1>";
                echo "<tr>";
                echo "<td width=100px>"; 
                echo $estudiante["id"];
                echo "</td>";
                echo "<td width=100px>"; 
                echo $estudiante["codigo"];
                echo "</td>";
                echo "<td width=70px>"; 
                echo $estudiante["nombres"];
                echo "</td>";
                echo "<td width=70px>"; 
                echo $estudiante["apellidos"];
                echo "</td>";
                echo "<td width=90px>"; 
                echo $estudiante["telefono"];
                echo "</td>";
                echo "<td width=180px>"; 
                echo $estudiante["correo"];
                echo "</td>";
                echo "<td width=70px>"; 
                echo $estudiante["id_pa"];
                echo "</td>";
                echo "<td width=70px>"; 
                echo "<html>";
                echo '<a href="actualizar.php?id='.$estudiante["id"].'"; ?>Actualizar</a>';
                echo "</html>";
                echo "</td>";
                echo "<td width=70px>"; 
                echo "<html>";
                echo '<a href="borrar.php?id='.$estudiante["id"].'"; ?>Borrar</a>';
                echo "</html>";
                echo "</td>";
                echo "</tr>";
                echo "</table>";
            }
        }
        catch(PDOexception $e){
            echo $e->getMessage();
        }
    }
mostrarEstudiante();
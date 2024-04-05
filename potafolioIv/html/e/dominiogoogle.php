<?php
    $conexion=mysqli_connect("localhost","root","","examen2") or die("Problemas en la conexion");
    $registros=mysqli_query($conexion,"select * from personas where correo like '%google%'") or die("Problemas en el select: ".mysqli_error());
    while($reg=mysqli_fetch_array($registros)){
        echo "Id: ".$reg['Id']."<br>Nombre: ".$reg['nombre']."<br>Correo: ".$reg['correo']."<br><br>";
    }
?>
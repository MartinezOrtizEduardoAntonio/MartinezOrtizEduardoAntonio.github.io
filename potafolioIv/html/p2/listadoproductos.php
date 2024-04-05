<?php
    $conexion=mysqli_connect("localhost","root","","bd1") or die("Problemas en la conexion");
    $registros=mysqli_query($conexion,"select * from productos") or die("Problemas en el select: ".mysqli_error());
    while($reg=mysqli_fetch_array($registros)){
        echo "Folio: ".$reg['folio']."<br>Nombre del producto: ".$reg['nombre']."<br>Existencias: ".$reg['existencia']."<br>Precio: ".$reg['precio']."<br>Costo: ".$reg['costo']."<br><br>";
    }
    mysqli_close($conexion);
?>
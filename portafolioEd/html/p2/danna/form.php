<?php
    $server="127.0.0.1:3306";
    $username="u280687855_Xeno";
    $password="v[aTd8C:";
    $database="u280687855_examen2";

    $conexion=mysqli_connect($server,$username,$password,$database) or die("Problemas en la conexion".mysqli_error($conexion));
    mysqli_query($conexion,"INSERT INTO productos (folio, nombre, existencia, precio, costo) VALUES ('$_POST[folio]', '$_POST[nombre]', '$_POST[existencia]', '$_POST[precio]', '$_POST[costo]');") or die("Problemas en el select".mysqli_error());
    mysqli_close($conexion);
    echo "Producto registrado";
?>
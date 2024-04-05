<?php
    $conexion=mysqli_connect("localhost","root","","bd1") or die("Problemas en la conexion");
    mysqli_query($conexion,"INSERT INTO `productos` (`folio`, `nombre`, `existencia`, `precio`, `costo`) VALUES ('$_POST[folio]', '$_POST[nombre]', '$_POST[existencia]', '$_POST[precio]', '$_POST[costo]');") or die("Problemas en el select".mysqli_error());
    mysqli_close($conexion);
    echo "Producto registrado";
?>
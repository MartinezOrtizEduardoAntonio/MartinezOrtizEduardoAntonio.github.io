<?php
    $server = "127.0.0.1:3306"; 
    $username = "u995592926_ejercicios_web"; 
    $password = "ProgWeb2";
    $database = "u995592926_ejercicios_web"; 
    $connection = new mysqli($server, $username, $password, $database);

    $query="SELECT * FROM `productos`";
    $result=mysqli_query($connection,$query) or die ("error insert ".mysqli_error());

    
    echo "<table border='1'>";
    echo "<tr><th>Id</th><th>Nombre</th><th>Existencia</th><th>Precio</th><th>Costo</th></tr>";

    // Recorre los resultados y muestra cada fila en la tabla
    while ($values = mysqli_fetch_array($result)) {
        echo "<tr>";
        echo "<td>" . $values['folio'] . "</td>";
        echo "<td>" . $values['nombre'] . "</td>";
        echo "<td>" . $values['existencia'] . "</td>";
        echo "<td>" . $values['precio'] . "</td>";
        echo "<td>" . $values['costo'] . "</td>";
        echo "</tr>";
    }

    // Cierra la tabla
    echo "</table>";
    mysqli_close($connection);
?>
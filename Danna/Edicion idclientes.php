<?php
    /*$server="127.0.0.1:3306";
    $username="u280687855_Xeno";
    $password="v[aTd8C:";
    $database="u280687855_examen2";*/

    $connection=mysqli_connect("localhost","root","","bd1") or die("error to connection with the database");

    $query = "UPDATE `clientes` SET `nombre`='" . $_POST['Nombre'] . "', `ap`='" . $_POST['Paterno'] . "', `am`='" . $_POST['Materno'] . "', `email`='" . $_POST['Email'] . "' WHERE `clientes`.`id`=" . $_POST['Id'];
    $result=mysqli_query($connection,$query) or die ("error insert ".mysqli_error());
    mysqli_close($connection);
    echo "actualizado";
?>

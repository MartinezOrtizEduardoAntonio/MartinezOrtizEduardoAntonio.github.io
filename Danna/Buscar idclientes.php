<?php
    /*$server="127.0.0.1:3306";
    $username="u280687855_Xeno";
    $password="v[aTd8C:";
    $database="u280687855_examen2";*/

    $connection=mysqli_connect("localhost","root","","bd1") or die("error to connection with the database");

    $query = "SELECT * FROM `clientes` WHERE id=$_POST[Id]";
    $result=mysqli_query($connection,$query) or die ("error insert ".mysqli_error());

    if($values=mysqli_fetch_array($result)){
        echo "<fieldset>
        <legend>Editar id</legend>
        <table>

        <tr>
            <form action='Edicion idclientes.php' method='POST'>
            <td><label for='nombre'>id:</label><br>
            <input type='text' class='form-control' placeholder='Nombre' name='Id' value='{$values["id"]}'/><br></td>

            <td><label for='nombre'>Nombre:</label><br>
            <input type='text' class='form-control' placeholder='Nombre' name='Nombre' value='{$values["nombre"]}'/><br></td>

            <td><label for='paterno'>Apellido paterno:</label><br>
            <input type='text' class='form-control' placeholder='Apellido paterno'  name='Paterno' value='{$values["ap"]}'/><br/></td>

            <td><label for='materno'>Apellido materno:</label><br>
            <input type='text' class='form-control' placeholder='Apellido materno'  name='Materno' value='{$values["am"]}'/><br/></td>

            <td><label for='materno'>Email:</label><br>
            <input type='text' class='form-control' placeholder='E-mail' name='Email' value='{$values["email"]}'/><br/></td>

            <td><button type='submit' class='btn btn-primary'>Aceptar cambios</button><br></td>
        </form>
    </tr>

    </table>
    </fieldset>";
    }else{
        echo "El Id que ingresaste no existe :C, por favor inténtalo con otro";
    }
    mysqli_close($connection);
?>
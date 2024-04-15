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
            <td><label for='nombre'>Nombre:</label><br>
            <input type='text' class='form-control' placeholder='Nombre' name='Nombre' value='{$values["Nombre"]}'/><br></td>

            <td><label for='paterno'>Apellido paterno:</label><br>
            <input type='text' class='form-control' placeholder='Apellido paterno' maxlength='12' name='Paterno' value='{$values["Paterno"]}'/><br/></td>

            <td><label for='materno'>Apellido materno:</label><br>
            <input type='text' class='form-control' placeholder='Apellido materno' maxlength='12' name='Materno' value='{$values["Materno"]}'/><br/></td>

            <td><label for='materno'>Email:</label><br>
            <input type='text' class='form-control' placeholder='E-mail' maxlength='12' name='Email' value='{$values["Email"]}'/><br/></td>

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
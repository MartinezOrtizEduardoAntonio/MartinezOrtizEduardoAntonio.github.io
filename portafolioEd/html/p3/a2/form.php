<?php
    $server = "127.0.0.1:3306"; 
    $username = "u995592926_ejercicios_web"; 
    $password = "ProgWeb2";
    $database = "u995592926_ejercicios_web"; 
    $connection = new mysqli($server, $username, $password, $database);
    
    $query="SELECT * FROM `customer` WHERE id=$_POST[id]";
    $result=mysqli_query($connection,$query) or die ("error insert ".mysqli_error());

    if($values=mysqli_fetch_array($result)){
        echo "<div class='container'>
        <div class='row'>
            <div class='col-5'>
                <div class='card'>
                    <label for=''>Datos del usuario</label>
                    <form action='editForm.php' method='POST'>
                     <input type='text' class='form-control' placeholder='nombre' name='id' value={$values["id"]}><br>
                     <input type='text' class='form-control' placeholder='nombre' name='name' value={$values["name"]}><br>
                     <input type='text' class='form-control' placeholder='nombre' name='secon_name' value={$values["secon_name"]}><br>
                     <input type='text' class='form-control' placeholder='nombre' name='last_name' value={$values["last_name"]}><br>
                     <input type='text' class='form-control' placeholder='nombre' name='email' value={$values["email"]}><br>
                    <button type='submit' class='btn btn-primary'>Send</button>
                    </form>
                    <hr>
                </div>
            </div>
        </div>
    </div>
    ";
    }else{
        echo "this id not exist";
    }
    mysqli_close($connection);
?>
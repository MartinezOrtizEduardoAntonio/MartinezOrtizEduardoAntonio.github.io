<?php
    require_once '../../partials/navbar.php';
?>
<br><br>
<div class="container">
    <div class="card">
        <div class="row">
            <div class="col">
                <!---->
                <?php 
                    session_start(); //activate the session 
                    echo "<h1>Hi, ".$_SESSION['username']."</h1>";

                    //we will waching that privilege have the user 
                    $privilege=$_SESSION['privilege'];
                    if($privilege==3){
                        echo "<h6>Admin</h6>";
                    }
                    else if($privilege==2){
                        echo "<h6>Teacher</h6>";
                    }
                    else{
                        echo "<h6>User</h6>";
                    }
                ?>
                <hr>
            </div>
        </div>
    </div>
</div>

<?php
    require_once '../../partials/footer.php';
?>

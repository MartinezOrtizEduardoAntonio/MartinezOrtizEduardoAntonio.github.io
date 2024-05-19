<?php
    require_once '../../partials/navbar.php';
?>
<style>
    .img-icon{
        border-radius: 50%;
    }
</style>
<br><br>
<div class="container">
    <div class="card">
        <div class="container">
            <div class="row">
                <div class="col">
                    <!---->
                    <?php 
                        session_start(); //activate the session 
                        echo "<h1>Hi, ".$_SESSION['username']."</h1>";

                        //we will waching that privilege have the user 
                        $privilege=$_SESSION['privilege'];
                        if($privilege==3){
                            echo "<img src='https://cdn-icons-png.flaticon.com/512/4206/4206265.png' class='img-icon'>";
                            echo "<h6>Admin</h6>";
                        }
                        else if($privilege==2){
                            echo "<img src='https://cdn-icons-png.flaticon.com/512/1995/1995539.png' class='img-icon'>";
                            echo "<h6>Teacher</h6>";
                        }
                        else{
                            echo "<img src='https://cdn-icons-png.flaticon.com/512/2784/2784461.png' class='img-icon'>";
                            echo "<h6>User</h6>";
                        }
                    ?>
                    <hr>
                </div>
            </div>
        </div>
    </div>
</div>

<?php
    require_once '../../partials/footer.php';
?>

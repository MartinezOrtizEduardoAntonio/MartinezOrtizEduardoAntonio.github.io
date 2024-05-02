<?php
    require_once '../../partials/navbar.php';
?>
<br><br>
<div class="container">
    <div class="card">
        <div class="row">
            <div class="col">
                <!---->
                <h1>Hi, 
                    <?php 
                        session_start(); //activate the session 
                        $_SESSION['username']
                    ?>
                </h1>
                <hr>
            </div>
        </div>
    </div>
</div>

<?php
    require_once '../../partials/footer.php';
?>

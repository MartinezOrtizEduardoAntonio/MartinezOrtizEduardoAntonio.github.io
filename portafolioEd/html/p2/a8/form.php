<?php
    if(isset($_POST['submit'])){
        $to="176535@upslp.edu.mx";
        $title="Send information";
        $name=$_POST['name'];
        $email=$_POST['email'];
        $message=$_POST['message'];
        $headers="";
        $body="send for: $name \nemail: $email \n message: $message";

        $bool=mail($to,$title,$body,$headers);
    }else{
        echo "error";
    }
?>
<?php
    $con = mysqli_connect('localhost','root','','laboratory');

    if (!$con){
        die('Connection Failed!'. mysqli_connect_error());
    }
?>
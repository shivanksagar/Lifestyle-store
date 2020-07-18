<?php 
$con = mysqli_connect("localhost:3308","root","","store");
session_start();

function sendError($error,$path) {
    $_SESSION['error']=$error;
    header("location: $path");
     die();
}

?> 

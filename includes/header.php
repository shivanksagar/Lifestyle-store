<?php require 'common.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <link rel="stylesheet" href="index.css" type="text/css">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./bootstrap/css/bootstrap.min.css">
    <script rel="text/javascript" src="bootstrap/js/jquery-3.5.1.min.js"></script>
    <script rel="text/javascript" src="bootstrap/js/bootstrap.min.js"></script>
  
</head>
<body>
<div class="navbar bg-red-nav navbar-inverse navbar-fixed-top ">
 <div class="container">
 <div class="navbar-header">
 <button type="button" class="navbar-toggle" data-toggle="collapse" datatarget="#myNavbar">
 <span class="icon-bar"></span>
 <span class="icon-bar"></span>
 <span class="icon-bar"></span> 
 </button>
 <a class="navbar-brand" href="index.php">Lifestyle Store</a>
 </div>
 <div class="collapse navbar-collapse" id="myNavbar">
 <ul class="nav navbar-nav navbar-right">
 <?php
 if (isset($_SESSION['email'])) {
 ?>
 <li><a href = "cart.php"><span class = "glyphicon glyphicon-shoppingcart"></span> Cart </a></li>
 <li><a href = "settings.php"><span class = "glyphicon glyphicon-user"></span>
Settings</a></li>
 <li><a href = "logout.php"><span class = "glyphicon glyphicon-login"></span> Logout</a></li>
 ?>
 <?php
 } else {
    ?>
    <li><a href="signup.php"><span class="glyphicon glyphicon-user"></span>
   Sign Up</a></li>
    <li><a href="login.php"><span class="glyphicon glyphicon-log-in"></span>
   Login</a></li>
    <?php
    }
    ?>
    </ul>
    </div>
    </div>
   </div> 
</body>
</html>
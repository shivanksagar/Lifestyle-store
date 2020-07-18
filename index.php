<?php
if (isset($_SESSION['email'])) {
  header('location: products.php');
 }
 ?>

<!DOCTYPE html>

<html lang="en">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="index.css" type="text/css">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./bootstrap/css/bootstrap.min.css">
    <script rel="text/javascript" src="bootstrap/js/jquery-3.5.1.min.js"></script>
    <script rel="text/javascript" src="bootstrap/js/bootstrap.min.js"></script>
    
    <title>Lifestyle Store</title>
</head>
<body>
 <?php include 'includes/header.php';?>    
    <div id="banner_image">
       <div class="container">
           <div id=banner_content>
               <h3>We Sell Lifestyle</h3>
               <p>Full 40% Off</p>
             <a href="products.html" class="btn btn-danger
             btn-lg active">Shop Now</a> 
           </div>
       </div>
    </div>
    <div class="container">
           <div class="row">          
            <div class="col-xs-3">     
             <a href="#" class="thumbnail">
           <img src="./img/camera.jpg" alt="camera"> 
           <h4>Camera</h4>   
        </a>          
        </div>
        
        <div class="col-xs-5">     
            <a href="#" class="thumbnail">
          <img src="./img/watch.jpg "alt="camera"> 
          <h4>Watches</h4>
           </a>
       </div>

       <div class="col-xs-3">     
        <a href="#" class="thumbnail">
      <img src="./img/shirt.jpg" alt="camera"> 
      <h4>Shirts</h4>
      </a>     
   </div>
    </div>
    </div>

    </div>
    
    <?php include 'includes/footer.php';?>   
</body>
</html>
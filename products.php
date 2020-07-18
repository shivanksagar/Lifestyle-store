
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <link href="index.css" rel="stylesheet"  type="text/css">

    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./bootstrap/css/bootstrap.min.css">
    <script rel="text/javascript" src="bootstrap/js/jquery-3.5.1.min.js"></script>
    <script rel="text/javascript" src="bootstrap/js/bootstrap.min.js"></script>

    <title>Products</title>
</head>
<body>
<?php include 'includes/header.php';
      include 'includes/check-if-added.php'; 
       
      ?>    
    <div class="container">
        <div class="jumbotron">
            <h1>Welcome to the Lifestyle Store</h1>
            <p>
                We have the best cameras, watches and shirts for you. No need to hunt around, we
                have all in one place.
            </p>
        </div>
    </div>
    <div class="container">
    <div class="row text-center">
        <div class="col-md-3 col-sm-6 ">
            <a href="#" class="thumbnail">
                <img src="Bootstrap_Assignment/1.jpg" alt="Camera 1" class="img-height-cover" >
                <h3>canon Eos</h3>
                <p> 360000 rs</p>
                <?php if (!isset($_SESSION['email'])) { ?>
                    <p><a href="login.php" role="button" class="btn btn-primary btn-block">Buy
                        Now</a></p>
                        <?php
                     } else {
                        if (check_if_added_to_cart(1,$_SESSION['id'])) {   
                echo'<a href="#" class="btn btn-primary disabled">Add to cart</a>';
            } else {
                ?>
                <a href="cart-add.php?id=1" name="add" value="add" class="btn btn-block
                    btn-primary">Add to cart</a>
                <?php
                }
                }
                ?>

                </a>
           </div>
           <div class="col-md-3 col-sm-6 ">
            <a href="#" class="thumbnail">
                <img src="Bootstrap_Assignment/2.jpg" alt="Camera 2"  class="img-height-cover">
                <h3>canon Eos</h3>
                <p> 360000 rs</p>
                <?php if (!isset($_SESSION['email'])) { ?>
                    <p><a href="login.php" role="button" class="btn btn-primary btn-block">Buy
                        Now</a></p>
                        <?php
                     } else {
                        if (check_if_added_to_cart(2,$_SESSION['id'])) {   
                echo'<a href="#" class="btn btn-primary disabled">Add to cart</a>';
            } else {
                ?>
                <a href="cart-add.php?id=2" name="add" value="add" class="btn btn-block
                    btn-primary">Add to cart</a>
                <?php
                }
                }
                ?>

                </a>
           </div>
           <div class="col-md-3 col-sm-6 ">
            <a href="#" class="thumbnail">
                <img src="Bootstrap_Assignment/3.jpg" alt="Camera 3" class="img-height-cover">
                <h3>canon Eos</h3>
                <p> 360000 rs</p>
                <?php if (!isset($_SESSION['email'])) { ?>
                    <p><a href="login.php" role="button" class="btn btn-primary btn-block">Buy
                        Now</a></p>
                        <?php
                     } else {
                        if (check_if_added_to_cart(3,$_SESSION['id'])) {   
                echo'<a href="#" class="btn btn-primary disabled">Add to cart</a>';
            } else {
                ?>
                <a href="cart-add.php?id=3" name="add" value="add" class="btn btn-block
                    btn-primary">Add to cart</a>
                <?php
                }
                }
                ?>

                </a>
           </div>

           <div class="col-md-3 col-sm-6 ">
            <a href="#" class="thumbnail">
                <img src="Bootstrap_Assignment/4.jpg" alt="Camera 3" class="img-height-cover">
                <h3>canon Eos</h3>
                <p> 360000 rs</p>
                <?php if (!isset($_SESSION['email'])) { ?>
                    <p><a href="login.php" role="button" class="btn btn-primary btn-block">Buy
                        Now</a></p>
                        <?php
                     } else {
                        if (check_if_added_to_cart(4,$_SESSION['id'])) {   
                echo'<a href="#" class="btn btn-primary disabled">Add to cart</a>';
            } else {
                ?>
                <a href="cart-add.php?id=4" name="add" value="add" class="btn btn-block
                    btn-primary">Add to cart</a>
                <?php
                }
                }
                ?>

                </a>
           </div>


        <div class="row text-center">
            <div class="col-md-3 col-sm-6 ">
                <a href="#" class="thumbnail">
                    <img src="Bootstrap_Assignment/7.jpg" alt="Camera 7" class="img-height-cover">
                    <h3>Titan</h3>
                    <p> 15000 rs</p>
                    <?php if (!isset($_SESSION['email'])) { ?>
                    <p><a href="login.php" role="button" class="btn btn-primary btn-block">Buy
                        Now</a></p>
                        <?php
                     } else {
                        if (check_if_added_to_cart(5,$_SESSION['id'])) {   
                echo'<a href="#" class="btn btn-primary disabled">Add to cart</a>';
            } else {
                ?>
                <a href="cart-add.php?id=5" name="add" value="add" class="btn btn-block
                    btn-primary">Add to cart</a>
                <?php
                }
                }
                ?>

                </a>
            </div>
            <div class="col-md-3 col-sm-6 ">
                <a href="#" class="thumbnail">
                    <img src="Bootstrap_Assignment/9.jpg" alt="Camera 9" class="img-height-cover">
                    <h3>Titan</h3>
                    <p> 15000 rs</p>
                    <?php if (!isset($_SESSION['email'])) { ?>
                    <p><a href="login.php" role="button" class="btn btn-primary btn-block">Buy
                        Now</a></p>
                        <?php
                     } else {
                        if (check_if_added_to_cart(6,$_SESSION['id'])) {   
                echo'<a href="#" class="btn btn-primary disabled">Add to cart</a>';
            } else {
                ?>
                <a href="cart-add.php?id=6" name="add" value="add" class="btn btn-block
                    btn-primary">Add to cart</a>
                <?php
                }
                }
                ?>

                </a>
            </div>
            <div class="col-md-3 col-sm-6 ">
                <a href="#" class="thumbnail">
                    <img src="Bootstrap_Assignment/10.jpg" alt="Camera 10" class="img-height-cover">
                    <h3>Titan</h3>
                    <p> 15000 rs</p>
                    <?php if (!isset($_SESSION['email'])) { ?>
                    <p><a href="login.php" role="button" class="btn btn-primary btn-block">Buy
                        Now</a></p>
                        <?php
                     } else {
                        if (check_if_added_to_cart(7,$_SESSION['id'])) {   
                echo'<a href="#" class="btn btn-primary disabled">Add to cart</a>';
            } else {
                ?>
                <a href="cart-add.php?id=7" name="add" value="add" class="btn btn-block
                    btn-primary">Add to cart</a>
                <?php
                }
                }
                ?>

                </a>
            </div>
            <div class="col-md-3 col-sm-6 ">
                <a href="#" class="thumbnail">
                    <img src="Bootstrap_Assignment/11.jpg" alt="Camera 11" class="img-height-cover">
                    <h3>Titan</h3>
                    <p> 15000 rs</p>
                    <?php if (!isset($_SESSION['email'])) { ?>
                    <p><a href="login.php" role="button" class="btn btn-primary btn-block">Buy
                        Now</a></p>
                        <?php
                     } else {
                        if (check_if_added_to_cart(8,$_SESSION['id'])) {   
                echo'<a href="#" class="btn btn-primary disabled">Add to cart</a>';
            } else {
                ?>
                <a href="cart-add.php?id=8" name="add" value="add" class="btn btn-block
                    btn-primary">Add to cart</a>
                <?php
                }
                }
                ?>

                </a>
            </div>
    </div>
    <div class="row text-center">
        <div class="col-md-3 col-sm-6 ">
            <a href="#" class="thumbnail">
                <img src="Bootstrap_Assignment/6.jpg" alt="shirt 6" class="img-height-cover">
                <h3>Shirt</h3>
                <p> 12000 rs</p>
                <?php if (!isset($_SESSION['email'])) { ?>
                    <p><a href="login.php" role="button" class="btn btn-primary btn-block">Buy
                        Now</a></p>
                        <?php
                     } else {
                        if (check_if_added_to_cart(9,$_SESSION['id'])) {   
                echo'<a href="#" class="btn btn-primary disabled">Add to cart</a>';
            } else {
                ?>
                <a href="cart-add.php?id=9" name="add" value="add" class="btn btn-block
                    btn-primary">Add to cart</a>
                <?php
                }
                }
                ?>

                </a>
        </div>
        <div class="col-md-3 col-sm-6 ">
            <a href="#" class="thumbnail">
                <img src="Bootstrap_Assignment/8.jpg" alt="shirt 8" class="img-height-cover">
                <h3>Shirt</h3>
                <p> 12000 rs</p>
                <?php if (!isset($_SESSION['email'])) { ?>
                    <p><a href="login.php" role="button" class="btn btn-primary btn-block">Buy
                        Now</a></p>
                        <?php
                     } else {
                        if (check_if_added_to_cart(10,$_SESSION['id'])) {   
                echo'<a href="#" class="btn btn-primary disabled">Add to cart</a>';
            } else {
                ?>
                <a href="cart-add.php?id=10" name="add" value="add" class="btn btn-block
                    btn-primary">Add to cart</a>
                <?php
                }
                }
                ?>

                </a>
        </div>
        <div class="col-md-3 col-sm-6 ">
            <a href="#" class="thumbnail">
                <img src="Bootstrap_Assignment/13.jpg" alt="shirt 13" class="img-height-cover">
                <h3>Shirt</h3>
                <p> 12000 rs</p>
                <?php if (!isset($_SESSION['email'])) { ?>
                    <p><a href="login.php" role="button" class="btn btn-primary btn-block">Buy
                        Now</a></p>
                        <?php
                     } else {
                        if (check_if_added_to_cart(11,$_SESSION['id'])) {   
                echo'<a href="#" class="btn btn-primary disabled">Add to cart</a>';
            } else {
                ?>
                <a href="cart-add.php?id=11" name="add" value="add" class="btn btn-block
                    btn-primary">Add to cart</a>
                <?php
                }
                }
                ?>

                </a>
        </div>
        <div class="col-md-3 col-sm-6 ">
            <a href="#" class="thumbnail">
                <img src="Bootstrap_Assignment/14.jpg" alt="shirt 14" class="img-height-cover">
                <h3>Shirt</h3>
                <p> 12000 rs</p>
                <?php if (!isset($_SESSION['email'])) { ?>
                    <p><a href="login.php" role="button" class="btn btn-primary btn-block">Buy
                        Now</a></p>
                        <?php
                     } else {
                        if (check_if_added_to_cart(12,$_SESSION['id'])) {   
                echo'<a href="#" class="btn btn-primary disabled">Add to cart</a>';
            } else {
                ?>
                <a href="cart-add.php?id=12" method="GET" name="add" value="add" class="btn btn-block
                    btn-primary">Add to cart</a>
                <?php
                }
                }
                ?>

                </a>
        </div>
    </div>
</div>
<?php include 'includes/footer.php';?>
   </body>
  
</html>

<!DOCTYPE html>
<html lang="en">    
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="index.css" type="text/css">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./bootstrap/css/bootstrap.min.css">
   
    <script rel="text/javascript" src="bootstrap/js/jquery-3.5.1.min.js"></script>
    <script rel="text/javascript" src="bootstrap/js/bootstrap.min.js"></script>
    <title>Signup</title>
</head>
<body>
<?php include 'includes/header.php';
if (isset($_SESSION['email'])) {
    header('location: products.php');
    die();
} 
 ?>
        <section class="signup-section">
        <div style="width: 50%;margin: auto;transform: translateY(45%);">
        <?php include 'includes/error.php';?>
        <div class="panel panel-primary ">

        
            <div class="panel-heading">Signup</div>
            <div class="panel-body">
                <form method ="POST" action="signup_script.php">
                <div class="form-group">
                    <input type="text" class="form-control" name="name" placeholder="Name">
                </div>
                <div class="form-group">
                    <input type="email" class="form-control"  name="email" placeholder="email" pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,3}$">
                </div>
                <div class="form-group">
                    <input type="password" class="form-control" name="password" placeholder="Password" pattern=".{6,}">
                </div>
                <div class="form-group">
                    <input type="number"  class="form-control" name="contact" placeholder="Contact">
                </div>

                <div class="form-group">
                    <input type="text"  class="form-control" name="city" placeholder="City">
                </div>
                <div class="form-group">
                    <input type="text" class="form-control" name="address" placeholder="address">
                </div>
                <div class="form=group">
                <button type="submit" class="btn btn-primary">submit</button>
                </div>
                </form>
            </div>
            
        </div>
    </div>
</div>
</section>
<?php include 'includes/footer.php';?>
</body>
</html>
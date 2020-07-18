
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="index.css" type="text/css">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./bootstrap/css/bootstrap.min.css">
   
    <script rel="text/javascript" src="bootstrap/js/jquery-3.5.1.min.js"></script>
    <script rel="text/javascript" src="bootstrap/js/bootstrap.min.js"></script>
        <title>Login</title>
</head>
<body>
<?php include 'includes/header.php';
        if (isset($_SESSION['email'])) {
          header('location: products.php'); 
       die();   
      }
        ?>
  
  <section class="login-section">
    <div style="width: 50%;margin: auto;transform: translateY(65%);">
      <?php
      if(isset($_SESSION['error'])) {
        echo "<div style='color:red'>".$_SESSION ['error']."</div>";
        unset($_SESSION ['error']);
      }
      ?>
      <p>
      <div class="panel panel-primary ">
          <div class="panel-heading">Login</div>
          <div class="panel-body">
              <p class="text-warning">Login to make a purchase</p>
              <form  method ="POST" action="login_submit.php">
                <div class="form-group">
              <input type="email" class="form-control " placeholder="Enter email address" name="email">
              </div>
              <div class="form-group">
              <input type="password" class="form-control"placeholder="Enter your password" name="password">
              </div> 
              <div class="form-group">
              <button type="submit" class="btn btn-primary" value=”login_submit”>Submit</button>   
             </div>
            </form>
               
          </div>
          <div class="panel-footer"> Don't have a account ? <a href="signup.html">Register</a></div>
        </div>
      </div>
  </section>
    

  <?php include 'includes/footer.php';?>
    </body>
    </html>
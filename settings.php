!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <link href="index.css" rel="stylesheet"  type="text/css">

    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./bootstrap/css/bootstrap.min.css">
    <script rel="text/javascript" src="bootstrap/js/jquery-3.5.1.min.js"></script>
    <script rel="text/javascript" src="bootstrap/js/bootstrap.min.js"></script>
    <title>settings</title>
</head>
<body>
<?php include 'includes/header.php';
 if(isset($_SESSION['email'])){
   header('products: index.php');
 };
 ?>
    
      <section class="login-section">
     

        <div style="width: 50%;margin: auto;transform: translateY(65%);">
           <?php include 'includes/error.php';?>
          <div class="panel  panel-primary">
              <div class="panel-heading">Settings</div>
              <div class="panel-body">
                  <p class="text-warning">Change your password.</p>
                  <form method ="POST" action="settings_script.php">
                  <div class="form-group">
                  <input type="password"  class="form-control " placeholder="old-password" name="old-password">
                   </div>
                  <div class="form-group">
                  <input type="password" class="form-control"  placeholder="new-password" name="new-password">
                   </div>
                   <div class="form-group">
                    <input type="password" class="form-control"  placeholder="retype-password" name="retype-password">
                     </div>
                  <button type="submit" value ="submit "class="btn btn-primary">Submit</button>
              </form>
              </div>
              
          </div>
      </section>
        
    
                <div id="footer">
                  <div class="container">
                    <p>
                      Copyright © Lifestyle Store. All Rights
                      Reserved” and “Contact Us: +91 90000 00000
                    </p>
                  </div>
                </div>
    <?php include 'includes/footer.php';?>
</body>
</html>
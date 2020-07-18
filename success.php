
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <link href="index.css" rel="stylesheet"  type="text/css">

    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./bootstrap/css/bootstrap.min.css">
    <script rel="text/javascript" src="bootstrap/js/jquery-3.5.1.min.js"></script>
    <script rel="text/javascript" src="bootstrap/js/bootstrap.min.js"></script>
    <title>Success</title>
</head>
<body>
   
 
 <?php
     include 'includes/common.php';
     if (!isset($_SESSION['email'])){
        header('location:index.php');
     }
     $user_id=$_SESSION['id'];
     $item_id=$_GET['id'];
   $insert_sql_query = "UPDATE user_items SET status='confirmed' WHERE item_id IN ($item_id) and user_id=$user_id ";
         $result =mysqli_query($con,$insert_sql_query)or die($con);
         echo "yes";  
     ?>    
    <div class="container">
        <br><br>
        <h1>Success!</h1>
        <h2>Your order is confirmed. Thank you for shopping
            with us. <a href="products.php">Click here </a> to purchase any other item</h2>
    </div>

    <?php include 'includes/footer.php';?>
</body>
</html>
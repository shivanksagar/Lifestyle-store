
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <link href="index.css" rel="stylesheet"  type="text/css">

    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./bootstrap/css/bootstrap.min.css">
    <script rel="text/javascript" src="bootstrap/js/jquery-3.5.1.min.js"></script>
    <script rel="text/javascript" src="bootstrap/js/bootstrap.min.js"></script>
    <title>Checkout</title>
</head>
<body>
<?php include 'includes/header.php';
            if (!isset($_SESSION['email'])) {
                header('location: login.php');
                die();
            }
                $user_id=$_SESSION['id'];
                $sql = "SELECT user_id,item_id,name,price,status from user_items INNER JOIN items ON user_items.item_id=items.id WHERE user_items.user_id=$user_id and user_items.status='Added_to_cart'";
                
                $result=mysqli_query($con,$sql);
                $sum;
            
            ?>
      <section class="login-section">
    <div class="container table_container">
     <?php if (mysqli_num_rows($result) ==0){
            echo "add items to the cart first";
        } else{
     ?>
        <table class ="table table-striped table-bordered">
          <thead>
              <tr>
                  <th>Item Number</th>
                  <th>Item Name</th>
                  <th>Price</th>
                  <th></th>
              </tr>
          </thead>
          <tbody>
          <?php
          error_reporting(0);
          $counter = 0;
          $itemIds = [];
          
       
        while ($row =mysqli_fetch_assoc($result)) {
            echo '<tr>';
            echo '<td>'.(++$counter).'</td>';
            echo '<td>'.$row['name'].'</td>';
            echo '<td>'.$row['price'].'</td>';
            echo '<td><a href="cart-remove.php?id=' . $row['item_id'] . 'class"remove_item_link"">Remove</a></td>';
            echo '</tr>';
            $itemIds[] = $row['item_id']; 
            $sum += $row['price'] ;
              
                
        }
      ?>

        </tr>
          <tr>
              <td> </td>
              <td>Total</td>
              <td><?php echo $sum ?> </td>
              <td>
              <a href="success.php?id=<?php echo implode(',',$itemIds) ?>" name="Confirm button" value="add" class="btn btn-block
                    btn-primary">Confirm your order.</a>
              </td>
          </tr>
        </tbody>
        </table>
    <?php }?>
    </div>
    
</section>
    
<?php include 'includes/footer.php';?>
</body>
 
</html>
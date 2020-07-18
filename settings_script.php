<?php require 'includes/common.php' ;
if(!isset($_SESSION['email'])){
    header('products: index.php');
  } else {

$old_password=md5($_POST['old-password']);
$new_password=$_POST['new-password'];
$retype_password=$_POST['retype-password'];
$user_id=$_SESSION['id'];


if ($new_password==$retype_password){
     $password_check_query="SELECT * from users where id=$user_id and password='$old_password'";
     $result=mysqli_query($con,$password_check_query);
     if (mysqli_num_rows($result)==1)
     {
            $encrypted_password=md5($new_password);        
            $update_password_query="UPDATE users  SET password='$encrypted_password' where id=$user_id ";
            $result=mysqli_query($con,$update_password_query);
    
            header('location: index.php');
            die();
     }else{
        sendError('Your old password do not match.','settings.php');  
     }
} else {
       sendError('new and retype password should be same.','setting.php');  
}


  }


  ?>
<?php require 'includes/common.php'; ?>
<?php  
$email =$_POST ['email'];
$password =md5($_POST['password']);


$select_query = "select * from users where email='$email' and password ='$password'";
$user_query_result= mysqli_query($con,$select_query) or die(mysqli_error($con));
if (mysqli_num_rows($user_query_result) == 0){
    $_SESSION['error'] = "Invalid Credentials";    
    header('location:login.php');
    die(); 
} 

$user=mysqli_fetch_array($user_query_result);
$_SESSION['email'] = $user['email'];
$_SESSION['name'] = $user['name'];
$_SESSION['id'] = $user['id'];
$_SESSION['address'] = $user['address'];
$_SESSION['city'] = $user['city'];
header('location:products.php');


/*
Array ( [0] => 1 [id] => 1 [1] => [name] => [2] => reetadevi@1970 [email] => reetadevi@1970 [3] => 202CB962AC59075B964B07152D234B70 [password] => 202CB962AC59075B964B07152D234B70 [4] => 0 [contact] => 0 [5] => [city] => [6] => [address] => )
*/
/*$user_enter_data ="insert into users (email,password) values ('$email','$password')" or die(mysqli_error($con));
$user_query_result= mysqli_query($con,$user_enter_data) or die(mysqli_error($con));
echo "Succesful login";*/
?>
<?php require 'includes/common.php';

$name= $_POST['name'];
$email= $_POST['email'];
$password= $_POST['password'];
$contact =$_POST['contact'];
$city= $_POST['city'];
$address= $_POST['address'];

validation();
$select_query = "select * from users where email='$email'";
$duplicate=mysqli_query($con,$select_query);

if (mysqli_num_rows($duplicate)> 0) {
 $_SESSION['error']="Invalid Credentials";
 header('location:signup.php');
 die();
}
$insert_Query="insert into users (name,email,password,contact,city,address) values ('$name','$email','$password','$contact','$city','$address')";

$insert_result=mysqli_query($con,$insert_Query);

$user=mysqli_fetch_array($insert_result);
$_SESSION['email'] = $user['email'];
$_SESSION['name'] = $user['name'];
$_SESSION['id'] = $user['id'];
$_SESSION['address'] = $user['address'];
$_SESSION['city'] = $user['city'];
header('location:products.php');

function validation() {
    global $name,$email,$password,$contact,$city,$address;
    if(empty($name)){
        sendError("name is required",'signup.php');
}

if(empty($email)){
    sendError("email is required",'signup.php');
}
if(empty($password)){
    sendError("password is required",'signup.php');
}
if(empty($contact)){
    sendError("contact is required",'signup.php');
}
if(empty($city)){
    sendError("city is required",'signup.php');
}
if(empty($address)){
    sendError("Address is required",'signup.php');
}

}






?>
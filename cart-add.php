<?php 
require 'includes/common.php';

$item_id= $_GET['id'];

$user_id=$_SESSION['id'] ;
echo $user_id;
$data_insert_query="insert into user_items(user_id,item_id,status)VALUES($user_id,$item_id,'Added_to_cart')" ;
$result=mysqli_query($con,$data_insert_query)or die($con);
header('location: products.php'); 
?> 
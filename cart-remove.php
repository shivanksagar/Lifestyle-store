<?php 
 require "includes/common.php";
$item_id=$_GET['id'];
$user_id=$_SESSION['id'];

$delete_query_to_db="Delete from user_items where user_id='$user_id' and item_id='$item_id'";
$result= mysqli_query($con,$delete_query_to_db);
header('location: cart.php');
?>
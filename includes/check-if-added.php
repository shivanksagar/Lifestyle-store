<?php  
function check_if_added_to_cart($item_id,$user_id){
    $con = mysqli_connect("localhost:3308","root","","store");
$checking_userid_and_itemid =  "SELECT * FROM user_items WHERE item_id='$item_id' AND user_id ='$user_id' and
 status='Added to cart'" ;

    $result_of_check= mysqli_query($con,$checking_userid_and_itemid);
   
     if (mysqli_num_rows($result_of_check)>=1){
         return 1 ;
     }
     else {
         return 0 ;
     }

}

?> 
<?php

function check_if_added_to_cart($item_id){
    
$uid = $_SESSION['id']; 
$con = mysqli_connect("localhost", "root", "", "store");
$iid = $item_id;
$query = "SELECT * From users_items where item_id='$iid' and user_id='$uid' and status='Added to Cart'";
$res = mysqli_query($con, $query);
$num = mysqli_num_rows($res);


    if($num>=1){
        return 1;
    }

    else{
        return 0;
    }
}
?>
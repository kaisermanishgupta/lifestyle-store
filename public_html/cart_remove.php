<?php
require 'includes/common.php';

$itid = $_GET['id'];
$usid = $_SESSION['id'];
$query = "DELETE FROM users_items WHERE user_id='$usid' AND item_id='$itid';";
$res = mysqli_query($con, $query);

echo "Succesfully Removed from Cart";
header('location:cart.php');
?>


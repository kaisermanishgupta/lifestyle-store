<?php
require 'includes/common.php';
$iid = $_GET['id'];
$uid = $_SESSION['id'];
$query = "INSERT INTO users_items(user_id, item_id, status) values('$uid','$iid','Added to Cart');";
$res = mysqli_query($con, $query);

echo "Succesfully Added to Cart";
header('location:products.php');
?>


<?php
require 'includes/common.php';

if(!isset($_SESSION['email']))
{
    header('location:index.php');
} 
?>

<!DOCTYPE html>
<html>
    <head>
        <title>Success | Lifestyle Store</title>
        <?php include 'includes/bootstrap.php'; ?>
        <link rel="stylesheet" type="text/css" href="success.css">
    </head>
    <body>
        
          <?php include 'includes/header.php';  ?>
        
              <?php
                    $itid = $_GET['id'];
                    $usid = $_SESSION['id'];
                    $query = "UPDATE users_items SET status='Confirmed' WHERE user_id='$usid';";
                    $res = mysqli_query($con, $query);
              ?>
        <div class="container">
            <div class="jumbotron jm">
                <center>
                <h3>Your Order is Confirmed. Thank You for shopping with us.</h3>
                <p class="text-warning"><a href="products.php">Click here</a> to purchase any other item.</p>
                </center>
            </div>
        </div>
        
         <?php require 'includes/footer.php';  ?>
      
    </body>
</html>

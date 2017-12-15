<?php
require 'includes/common.php';

if(isset($_SESSION['email']))
{
    header('location:products.php');
} 
?>

<!DOCTYPE html>
<html>
    <head>
        <title>Sign Up | Lifestyle Store</title>
         <?php include 'includes/bootstrap.php'; ?>
         <link rel="stylesheet" type="text/css" href="signup.css" >
    </head>
    <body>
      
         <?php include 'includes/header.php';  ?>
    
        <div class="container">
            <div class="row">
                <div class="col-xs-12 col-md-4 pm">
                    
                    <div class="panel panel-primary">
                        
                            <div class="panel-heading">
                                <h4>SIGN UP</h4>
                            </div>
                        
                        <div class="panel-body">
                <form method="post" action="signup_script.php">
                    <p class="text-warning">Sign Up to Start Shopping</p>
                    <div class="form-group">
                        <input type="text" placeholder="Name" name="Fullname" class="form-control">
                    </div>
                    <div class="form-group">
                        <input type="email" placeholder="Email" name="Email" class="form-control">
                    </div>
                     <div class="form-group">
                         <input type="password" placeholder="Password" pattern=".{6,}" name="pwd" class="form-control">
                    </div>
                    <div class="form-group">
                        <input type="number" placeholder="Contact Number" name="Mobile" class="form-control">
                    </div>
                    <div class="form-group">
                        <input type="text" placeholder="Address" name="Address" class="form-control">
                    </div>
                    
                    <button type="submit" name="Submit" class="btn btn-primary">Register </button>
                </form>
                        </div>
                        
                        <div class="panel-footer">
                            <h5>Already A Member ?   &nbsp; <a href="login.php"> Login </a> </h5>
                        </div>
                 </div>
                    
            </div>    
          </div>
        </div>
        
             <?php include 'includes/footer.php';  ?>
      
    </body>
</html>

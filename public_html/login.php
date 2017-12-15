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
        <title>Login | Lifestyle Store</title>
        <?php include 'includes/bootstrap.php'; ?>
     <link rel="stylesheet" type="text/css" href="login.css" >
    
    </head>
    
    <body>
       
            <?php include 'includes/header.php';  ?>  
        
        
       
        <div class="container">
            <div class="row">
                <div class="col-xs-12 col-md-4 pm">
                    
                    <div class="panel panel-primary">
                        
                            <div class="panel-heading">
                                <h4>LOGIN</h4>
                            </div>
                        
                        <div class="panel-body">
                <form method="post" action="login_submit.php">
                    <p class="text-warning">Login to Make a Purchase </p>
                    <div class="form-group">
                        <input type="email" placeholder="Email" pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,63}$" name="Email" class="form-control" required>
                    </div>
                     <div class="form-group">
                         <input type="password" placeholder="Password" pattern=".{6,}" name="pwd" class="form-control" required>
                    </div>
                    
                    <button type="submit" class="btn btn-primary">Login </button>
                </form>
                        </div>
                        
                        <div class="panel-footer">
                            <h5>Don't have an Account Yet ?   &nbsp; <a href="signup.php"> Register </a> </h5>
                        </div>
                 </div>
                    
            </div>    
          </div>
        </div>
       
        
         <?php require 'includes/footer.php';  ?>
      
        
    </body>
</html>

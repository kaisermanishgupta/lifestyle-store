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
        <title>Settings | Lifestyle Store</title>
         <?php include 'includes/bootstrap.php'; ?>
     <link rel="stylesheet" type="text/css" href="settings.css" >
    </head>
    <body>
        
        
             <?php include 'includes/header.php';  ?>
        
        
        <div class="container">
            <div class="row tmf">
                <div class="col-xs-12 col-md-6">
                    <h3><strong>Change Password</strong></h3>
                <form method="post" action="settings_script.php">
                    <div class="form-group">
                    <input type="password" name="oldpwd" pattern=".{6,}" placeholder="Old Password" class="form-control">
                    </div>
                    
                    <div class="form-group">
                    <input type="password" name="newpwd" pattern=".{6,}" placeholder="New Password" class="form-control">
                    </div>
                    
                    <div class="form-group">
                    <input type="password" name="cnfnewpwd" pattern=".{6,}" placeholder="Re-type New Password" class="form-control">
                    </div>
      
                    <button type="submit" name="Submit" class="btn btn-primary">Change</button>
                  
                </form>
                </div>    
            </div>
        </div>
        
        
            <?php require 'includes/footer.php';  ?>
      
        
    </body>
</html>

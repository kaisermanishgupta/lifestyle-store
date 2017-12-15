<?php
//Common Header (Navbar) file for all the pages used in the project
?>

<nav class="navbar navbar-inverse">
                 <div class="container">
                     <div class="navbar-header">
                               
                    <a href="index.php" class="navbar-brand">Lifestyle Store</a>

                     
                    <!--Code to Create a 3 Line Toggle Hamburger Button with Collapse Action -->
                    
                    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#lsnavbar">
                             <span class="icon-bar"></span>
                             <span class="icon-bar"></span>
                             <span class="icon-bar"></span>
                         </button>
                     
                
                    <!--Code to use the above created button in action with these links below--> 
                     
                     </div>    
                     <div class="collapse navbar-collapse" id="lsnavbar">
                         <ul class="nav navbar-nav navbar-right">
                             <?php if(isset($_SESSION['email'])){ ?>
                                  <li><a href="cart.php"><span class="glyphicon glyphicon-shopping-cart"> Cart</span></a></li>
                                  <li><a href="settings.php"><span class="glyphicon glyphicon-user"> Settings</span></a></li>
                                  <li><a href="logout.php"><span class="glyphicon glyphicon-log-out"> Logout</span></a></li>
                             <?php } 
                             else{
                                 ?>
                                  <li><a href="signup.php"><span class="glyphicon glyphicon-copy"> SignUp</span></a></li>
                                  <li><a href="login.php"><span class="glyphicon glyphicon-log-in"> Login</span></a></li> 
                             <?php } ?>
                         </ul>
                     </div>
               </div>
           </nav>
    

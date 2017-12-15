<?php
require 'includes/common.php';
?>
<!DOCTYPE html>
<html>
    <head>
        <title>Products | Lifestyle Store</title>
         <?php require 'includes/bootstrap.php'; ?>
        <link rel="stylesheet" type="text/css" href="products.css">
    </head>
    <body>
       
        <?php require 'includes/header.php';  ?>  
        <?php include 'check_if_added.php';  ?>
        <?php include 'check_if_confirmed.php'; ?>
        
        <div class="jumbotron jmt container">
            <center>
            <h1><strong>Welcome to our Lifestyle Store! </strong></h1>
            <p class="text-warning"> We have the best Cameras, Watches and Shirts for you. No need to hunt around, we have all in one place </p>
            </center>
        </div>
        
        <div class="container">
            <div class="row tmg" id="cameras">
                
                <div class="col-xs-6 col-md-3 home-feature">
                    <a class="il">
                    <div class="thumbnail">
                       
                        <img src="img/5.jpg" alt="canon-eos">
                        <center>
                            <h3><strong>Canon EOS</strong></h3>
                            <h6><strong>Price : Rs. 36000.00</strong></h6>
                        </center>    
                            <?php if(!isset($_SESSION['email'])){ ?>
                            <a href="login.php"><button type="button" class="btn btn-primary btn-block">Buy Now</button></a>
                            <?php } 
                                      else{ 
                                
                                if(check_if_added_to_cart(1)){
                                   echo '<a href="#"><button type="button" class="btn btn-primary btn-block" disabled>Added to Cart</button></a>'; 
                                }
                                
                                elseif(check_if_cnf(1)){
                                   echo '<a href="#"><button type="button" class="btn btn-success btn-block">Order Confirmed</button></a>'; 
                                }
                                
                                else{ ?>
                                    
                                    <a href="cart_add.php?id=1" name="add" value="add"><button type="button" class="btn btn-primary btn-block" name="add">Add to Cart</button></a>
                             <?php   }      
                                } 
                            ?>
                    </div>
                    </a>     
                </div>
                
                <div class="col-xs-6 col-md-3 home-feature">
                    <a class="il">
                    <div class="thumbnail">
                       
                        <img src="img/2.jpg" alt="sony-dslr">
                        <center>
                            <h3><strong>Nikon DSLR</strong></h3>
                            <h6><strong>Price : Rs. 40000.00</strong></h6>
                        </center>
                          <?php if(!isset($_SESSION['email'])){ ?>
                            <a href="login.php"><button type="button" class="btn btn-primary btn-block">Buy Now</button></a>
                            <?php } 
                                      else{ 
                                
                                if(check_if_added_to_cart(2)){
                                   echo '<a href="#"><button type="button" class="btn btn-primary btn-block" disabled>Added to Cart</button></a>'; 
                                }
                              
                                elseif(check_if_cnf(2)){
                                   echo '<a href="#"><button type="button" class="btn btn-success btn-block">Order Confirmed</button></a>'; 
                                }
                                
                                else{ ?>
                                    
                                    <a href="cart_add.php?id=2" name="add" value="add"><button type="button" class="btn btn-primary btn-block" name="add">Add to Cart</button></a>
                             <?php   }      
                                } 
                            ?>
         
                    </div>
                    </a>     
                </div>
                
                <div class="col-xs-6 col-md-3 home-feature">
                    <a class="il">
                    <div class="thumbnail">
                       
                        <img src="img/3.jpg" alt="canon-dslr-1">
                        <center>
                            <h3><strong>Sony DSLR</strong></h3>
                            <h6><strong>Price : Rs. 50000.00</strong></h6>
                        </center>
                          <?php if(!isset($_SESSION['email'])){ ?>
                            <a href="login.php"><button type="button" class="btn btn-primary btn-block">Buy Now</button></a>
                            <?php } 
                                      else{ 
                                
                                if(check_if_added_to_cart(3)){
                                   echo '<a href="#"><button type="button" class="btn btn-primary btn-block" disabled>Added to Cart</button></a>'; 
                                }
                                
                                elseif(check_if_cnf(3)){
                                   echo '<a href="#"><button type="button" class="btn btn-success btn-block">Order Confirmed</button></a>'; 
                                }
                              
                                else{ ?>
                                    
                                    <a href="cart_add.php?id=3" name="add" value="add"><button type="button" class="btn btn-primary btn-block" name="add">Add to Cart</button></a>
                             <?php   }      
                                } 
                            ?>
         
                    </div>
                    </a>     
                </div>
                
                <div class="col-xs-6 col-md-3 home-feature">
                    <a class="il">
                    <div class="thumbnail">
                       
                        <img src="img/4.jpg" alt="olympus-dslr">
                        <center>
                            <h3><strong>Olympus DSLR</strong></h3>
                            <h6><strong>Price : Rs. 80000.00</strong></h6>
                        </center>
                          <?php if(!isset($_SESSION['email'])){ ?>
                            <a href="login.php"><button type="button" class="btn btn-primary btn-block">Buy Now</button></a>
                            <?php } 
                                      else{ 
                                
                                if(check_if_added_to_cart(4)){
                                   echo '<a href="#"><button type="button" class="btn btn-primary btn-block" disabled>Added to Cart</button></a>'; 
                                }
                                
                                elseif(check_if_cnf(4)){
                                   echo '<a href="#"><button type="button" class="btn btn-success btn-block">Order Confirmed</button></a>'; 
                                }
                              
                                else{ ?>
                                    
                                    <a href="cart_add.php?id=4" name="add" value="add"><button type="button" class="btn btn-primary btn-block" name="add">Add to Cart</button></a>
                             <?php   }      
                                } 
                            ?>
         
                    </div>
                    </a>
                </div>
            </div>
            
            
             <div class="row tmg1" id="watches">
                
                <div class="col-xs-6 col-md-3 home-feature">
                    <a class="il">
                    <div class="thumbnail">
                       
                        <img src="img/18.jpg" alt="titan-301">
                        <center>
                            <h3><strong>Titan Model #301</strong></h3>
                            <h6><strong>Price : Rs. 13000.00</strong></h6>
                        </center>
                          <?php if(!isset($_SESSION['email'])){ ?>
                            <a href="login.php"><button type="button" class="btn btn-primary btn-block">Buy Now</button></a>
                            <?php } 
                                      else{ 
                                
                                if(check_if_added_to_cart(5)){
                                   echo '<a href="#"><button type="button" class="btn btn-primary btn-block" disabled>Added to Cart</button></a>'; 
                                }
                                
                                elseif(check_if_cnf(5)){
                                   echo '<a href="#"><button type="button" class="btn btn-success btn-block">Order Confirmed</button></a>'; 
                                }
                              
                                else{ ?>
                                    
                                    <a href="cart_add.php?id=5" name="add" value="add"><button type="button" class="btn btn-primary btn-block" name="add">Add to Cart</button></a>
                             <?php   }      
                                } 
                            ?>
         
                    </div>
                    </a>     
                </div>
                
                <div class="col-xs-6 col-md-3 home-feature">
                    <a class="il">
                    <div class="thumbnail">
                       
                        <img src="img/19.jpg" alt="titan-201">
                        <center>
                            <h3><strong>Titan Model #201</strong></h3>
                            <h6><strong>Price : Rs. 3000.00</strong></h6>
                        </center>
                          <?php if(!isset($_SESSION['email'])){ ?>
                            <a href="login.php"><button type="button" class="btn btn-primary btn-block">Buy Now</button></a>
                            <?php } 
                                      else{ 
                                
                                if(check_if_added_to_cart(6)){
                                   echo '<a href="#"><button type="button" class="btn btn-primary btn-block" disabled>Added to Cart</button></a>'; 
                                }
                                
                                elseif(check_if_cnf(6)){
                                   echo '<a href="#"><button type="button" class="btn btn-success btn-block">Order Confirmed</button></a>'; 
                                }
                              
                                else{ ?>
                                    
                                    <a href="cart_add.php?id=6" name="add" value="add"><button type="button" class="btn btn-primary btn-block" name="add">Add to Cart</button></a>
                             <?php   }      
                                } 
                            ?>
         
                    </div>
                    </a>     
                </div>
                
                <div class="col-xs-6 col-md-3 home-feature">
                    <a class="il">
                    <div class="thumbnail">
                       
                        <img src="img/20.jpg" alt="hmt-milan">
                        <center>
                            <h3><strong>HMT Milan</strong></h3>
                            <h6><strong>Price : Rs. 8000.00</strong></h6>
                        </center>
                          <?php if(!isset($_SESSION['email'])){ ?>
                            <a href="login.php"><button type="button" class="btn btn-primary btn-block">Buy Now</button></a>
                            <?php } 
                                      else{ 
                                
                                if(check_if_added_to_cart(7)){
                                   echo '<a href="#"><button type="button" class="btn btn-primary btn-block" disabled>Added to Cart</button></a>'; 
                                }
                                
                                elseif(check_if_cnf(7)){
                                   echo '<a href="#"><button type="button" class="btn btn-success btn-block">Order Confirmed</button></a>'; 
                                }
                              
                                else{ ?>
                                    
                                    <a href="cart_add.php?id=7" name="add" value="add"><button type="button" class="btn btn-primary btn-block" name="add">Add to Cart</button></a>
                             <?php   }      
                                } 
                            ?>
         
                    </div>
                    </a>     
                </div>
                
                <div class="col-xs-6 col-md-3 home-feature">
                    <a class="il">
                    <div class="thumbnail">
                       
                        <img src="img/21.jpg" alt="faber-luba-111">
                        <center>
                            <h3><strong>Faber Luba #111</strong></h3>
                            <h6><strong>Price : Rs. 18000.00</strong></h6>
                        </center>
                          <?php if(!isset($_SESSION['email'])){ ?>
                            <a href="login.php"><button type="button" class="btn btn-primary btn-block">Buy Now</button></a>
                            <?php } 
                                      else{ 
                                
                                if(check_if_added_to_cart(8)){
                                   echo '<a href="#"><button type="button" class="btn btn-primary btn-block" disabled>Added to Cart</button></a>'; 
                                }
                                
                                elseif(check_if_cnf(8)){
                                   echo '<a href="#"><button type="button" class="btn btn-success btn-block">Order Confirmed</button></a>'; 
                                }
                              
                                else{ ?>
                                    
                                    <a href="cart_add.php?id=8" name="add" value="add"><button type="button" class="btn btn-primary btn-block" name="add">Add to Cart</button></a>
                             <?php   }      
                                } 
                            ?>
         
                    </div>
                    </a>
                </div>
            </div>
            
            
            
            <div class="row tmg1" id="shirts">
                
                <div class="col-xs-6 col-md-3 home-feature">
                    <a class="il">
                    <div class="thumbnail">
                       
                        <img src="img/22.jpg" alt="lkt">
                        <center>
                            <h3><strong>H & W</strong></h3>
                            <h6><strong>Price : Rs. 800.00</strong></h6>
                        </center>
                          <?php if(!isset($_SESSION['email'])){ ?>
                            <a href="login.php"><button type="button" class="btn btn-primary btn-block">Buy Now</button></a>
                            <?php } 
                                      else{ 
                                
                                if(check_if_added_to_cart(9)){
                                   echo '<a href="#"><button type="button" class="btn btn-primary btn-block" disabled>Added to Cart</button></a>'; 
                                }
                                
                                elseif(check_if_cnf(9)){
                                   echo '<a href="#"><button type="button" class="btn btn-success btn-block">Order Confirmed</button></a>'; 
                                }
                              
                                else{ ?>
                                    
                                    <a href="cart_add.php?id=9" name="add" value="add"><button type="button" class="btn btn-primary btn-block" name="add">Add to Cart</button></a>
                             <?php   }      
                                } 
                            ?>
         
                    </div>
                    </a>     
                </div>
                
                <div class="col-xs-6 col-md-3 home-feature">
                    <a class="il">
                    <div class="thumbnail">
                       
                        <img src="img/23.jpg" alt="louis-phil">
                        <center>
                            <h3><strong>Louis Phil</strong></h3>
                            <h6><strong>Price : Rs. 1000.00</strong></h6>
                        </center>
                          <?php if(!isset($_SESSION['email'])){ ?>
                            <a href="login.php"><button type="button" class="btn btn-primary btn-block">Buy Now</button></a>
                            <?php } 
                                      else{ 
                                
                                if(check_if_added_to_cart(10)){
                                   echo '<a href="#"><button type="button" class="btn btn-primary btn-block" disabled>Added to Cart</button></a>'; 
                                }
                                
                                elseif(check_if_cnf(10)){
                                   echo '<a href="#"><button type="button" class="btn btn-success btn-block">Order Confirmed</button></a>'; 
                                }
                              
                                else{ ?>
                                    
                                    <a href="cart_add.php?id=10" name="add" value="add"><button type="button" class="btn btn-primary btn-block" name="add">Add to Cart</button></a>
                             <?php   }      
                                } 
                            ?>
         
                    </div>
                    </a>     
                </div>
                
                <div class="col-xs-6 col-md-3 home-feature">
                    <a class="il">
                    <div class="thumbnail">
                       
                        <img src="img/24.jpg" alt="john-zok">
                        <center>
                            <h3><strong>John Zok</strong></h3>
                            <h6><strong>Price : Rs. 1500.00</strong></h6>
                        </center>
                          <?php if(!isset($_SESSION['email'])){ ?>
                            <a href="login.php"><button type="button" class="btn btn-primary btn-block">Buy Now</button></a>
                            <?php } 
                                      else{ 
                                
                                if(check_if_added_to_cart(11)){
                                   echo '<a href="#"><button type="button" class="btn btn-primary btn-block" disabled>Added to Cart</button></a>'; 
                                }
                                
                                elseif(check_if_cnf(11)){
                                   echo '<a href="#"><button type="button" class="btn btn-success btn-block">Order Confirmed</button></a>'; 
                                }
                              
                                else{ ?>
                                    
                                    <a href="cart_add.php?id=11" name="add" value="add"><button type="button" class="btn btn-primary btn-block" name="add">Add to Cart</button></a>
                             <?php   }      
                                } 
                            ?>
         
                    </div>
                    </a>     
                </div>
                
                <div class="col-xs-6 col-md-3 home-feature">
                    <a class="il">
                    <div class="thumbnail">
                       
                        <img src="img/25.jpg" alt="jhalsani">
                        <center>
                            <h3><strong>Jhalsani</strong></h3>
                            <h6><strong>Price : Rs. 1300.00</strong></h6>
                        </center>
                          <?php if(!isset($_SESSION['email'])){ ?>
                            <a href="login.php"><button type="button" class="btn btn-primary btn-block">Buy Now</button></a>
                            <?php } 
                                      else{ 
                                
                                if(check_if_added_to_cart(12)){
                                   echo '<a href="#"><button type="button" class="btn btn-primary btn-block" disabled>Added to Cart</button></a>'; 
                                }
                                
                                elseif(check_if_cnf(12)){
                                   echo '<a href="#"><button type="button" class="btn btn-success btn-block">Order Confirmed</button></a>'; 
                                }
                              
                                else{ ?>
                                    
                                    <a href="cart_add.php?id=12" name="add" value="add"><button type="button" class="btn btn-primary btn-block" name="add">Add to Cart</button></a>
                             <?php   }      
                                } 
                            ?>
         
                    </div>
                    </a>
                </div>
            </div>
            
        </div>
        
          <?php require 'includes/footer.php';  ?>
        
    </body>
</html>

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
        <title>Welcome | Lifstyle Store</title>
        <?php require 'includes/bootstrap.php'; ?>
        <link rel="stylesheet" type="text/css" href="index.css">
    </head>
    <body class="container">
        
        <?php require 'includes/header.php';  ?>  
        
        <div class="container">
            <div class="row">
                <div id="bgimg">  
            
                    <center>
                        <div id="box">
            
                         <center>
                            <div id="cbox">
                                <h1 id="hbox">We sell Lifestyle.</h1>
                                <p id="disc"> FLAT 40% OFF on Premium Brands </p>
                                <a id="button" href="products.php">Shop Now</a>
                            </div>
                        </center>
            
                        </div>
                    </center>   
                </div>

         <div class="container-fluid">
             <div class="row items">
            
                 <div class="col-xs-12 col-sm-4">
                    <div class="btf">
                    <a href="products.php#cameras" class="desclink">
                    <img src="img/1.jpg" class="iimg" alt="camera">
                    <div class="desc">
                        <h2>Cameras</h2>
                        <p>Choose among the best available in the World.</p>
                    </div>
                    </a>
                    </div>
                </div>
        
                <div class="col-xs-12 col-sm-4">
                    <div class="btf">
                        <a href="products.php#watches" class="desclink">
                    <img src="img/10.jpg" class="iimg" alt="watch">
                    <div class="desc">
                        <h2>Watches</h2>
                        <p>Original watches from the best Brands.</p>
                    </div>
                    </a>
                    </div>
                </div>
        
                <div class="col-xs-12 col-sm-4">
                    <div class="btf">
                        <a href="products.php#shirts" class="desclink">
                    <img src="img/22 - Copy.jpg" class="iimg" alt="shirt">
                    <div class="desc">
                        <h2>Shirts</h2>
                        <p>Our exquisite collection of Shirts.</p>
                    </div>
                    </a>
                    </div>
                </div>
             </div>
         </div>
                
            </div>    
        </div>
        
        <?php require 'includes/footer.php';  ?>
        
    </body>
</html>

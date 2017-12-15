<?php
require 'includes/common.php';

if(!isset($_SESSION['email']))
{
    header('location:login.php');
} 
?>
<!DOCTYPE html>
<html>
    <head>
        <title>Cart | Lifestyle Store</title>
        <?php require 'includes/bootstrap.php'; ?>
        <link rel="stylesheet" type="text/css" href="cart.css">
    </head>
    <body>
        
            <?php require 'includes/header.php';  ?> 
      
        <?php 
            $uid = $_SESSION['id'];
            $query = "SELECT*FROM users_items ui INNER JOIN items it ON ui.item_id = it.id WHERE user_id='$uid' AND status != 'Confirmed';";
            $row = mysqli_query($con, $query);
            $rno = mysqli_num_rows($row);
            if($rno == 0){
                echo "<center><strong><p style='size:50px; color:blue;'>Your Cart is Empty Add the Items to Cart First :( </p></strong></center>";
                ?>
              
         <?php  } 
            else{
                $sum=0; $pid=0;
                $iid = 1; ?> 
     
        
        
       <div class="container">
           <table class="table table-bordered table-hover">
               <tbody>
                 
                    <tr>
                    <th class="col-xs-2">
                        <strong>Item Number</strong>
                    </th>
                    <th class="col-xs-3">
                        <strong>Item Name</strong>
                    </th>
                    <th class="col-xs-2">
                        <strong>Price </strong>
                    </th>
                    <th class="col-xs-3">
                        
                    </th>
                   </tr>
                
               
                    
                    
               <?php                                                      //remove_item_link
                while($res = mysqli_fetch_array($row)){
                    $pr = $res['price'];
                    $sum += $pr;
                    $iid = $res['item_id'];
                    $pid = $iid.",";
                    $nm = $res['name'];
                    ?>
                     
                        <tr> 
                    <th class="col-xs-2"><?php echo "$iid"; ?></th>
                    <th class="col-xs-3"><?php echo "$nm"; ?></th>
                    <th class="col-xs-2"><?php echo "$pr"; ?></th>
                    <th class="col-xs-3"><?php if(isset($iid)){echo "<a href='cart_remove.php?id=$iid'><button type='button' class='btn-danger'>Remove</button></a>";} else {echo '';} ?> </th>
                        </tr>
                    
               <br/>
              <?php  }
                
              $total = $sum;
              $amt = 0;
              $fid = $pid;
            }
        ?>     
                    
                
                
                    <tr>
                    <th class="col-xs-2">@LifestyleStore</th>
                    <th class="col-xs-3"><strong>Total</strong></th>
                    <th class="col-xs-2"><strong>Rs. <?php if (!isset($total)){$amt=0;} else {$amt=$total;} echo $amt; ?></strong></th>
                    <th class="col-xs-3"><?php if(isset($fid)){echo "<a href='success.php?id=$fid'><button type='button' class='btn btn-primary'>Confirm Order</button></a>";} else {echo '';} ?></th>
                </tr>
            
           </tbody>  
          </table>
       </div>
        
     
       <?php require 'includes/footer.php';  ?>
   
    
        
    </body>
</html>

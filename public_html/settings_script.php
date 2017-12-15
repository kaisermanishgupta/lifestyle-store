<?php
require 'includes/common.php';

if(!isset($_SESSION['email']))
{
    header('location:index.php');
}

if(isset($_POST['Submit'])){
$ud = $_SESSION['id'];
$opwd = mysqli_real_escape_string($con, $_POST['oldpwd']);
$npwd = mysqli_real_escape_string($con,$_POST['newpwd']);
$cnpwd = mysqli_real_escape_string($con,$_POST['cnfnewpwd']);
$eop = md5($opwd);
$enp = md5($npwd);
$ecnp = md5($cnpwd);

$query = "SELECT password from users WHERE password = '$eop' AND id = '$ud';";
$row = mysqli_query($con, $query);
$res = mysqli_fetch_array($row);
$rno = mysqli_num_rows($row);




if($rno>0){
       
    if($npwd==$cnpwd){       
        $query2 = "UPDATE users SET password = '$ecnp' WHERE id = '$ud'";
        $row2 = mysqli_query($con, $query2);
        echo "Succesfully Updated Your Password";
        session_destroy();
        header('location:login.php');
        
    }
    
    else{ 
        header('location:settings.php');
        echo "error : Entered Old Password Doesn't Match.";
    }
    
}

else {
        header('location:settings.php');
        echo "New Passwords did not match with each other.";
    }

}

else {
    
    header('location:products.php');
}

?>



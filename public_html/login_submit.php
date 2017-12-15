<?php 
require 'includes/common.php';

$em = mysqli_real_escape_string($con, $_POST['Email']);
$pw = mysqli_real_escape_string($con, $_POST['pwd']);
$epu = md5($pw);

$query = "Select id , email, password from users where email='$em'";
$res = mysqli_query($con,$query);
$row = mysqli_fetch_array($res);
$rno = mysqli_num_rows($res);
$uid = $row['id'];
$epdb = $row['password'];

if($rno==0){
    echo "No User Found with email id : '$em'";
}
else{
    if($epu != $epdb){
        echo "Incorrect Password Entered!";
    }
    else{
        echo "Succesfully Logged in, You are being Redirected";
        $_SESSION['email'] = $em;
        $_SESSION['id'] = $uid;
        header('location:products.php');
    }
}
?>

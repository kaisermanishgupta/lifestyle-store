<?php
require 'includes/common.php';


$nm = mysqli_real_escape_string($con, $_POST['Fullname']);
$em = mysqli_real_escape_string($con, $_POST['Email']);
$pw = mysqli_real_escape_string($con, $_POST['pwd']);
$mno = mysqli_real_escape_string($con, $_POST['Mobile']);
$add = mysqli_real_escape_string($con, $_POST['Address']);
$epur = md5($pw);


    $query1 = "SELECT id from users where email = '$em'";
    $res = mysqli_query($con, $query1);
    $cnt = mysqli_num_rows($res);
    if($cnt>0){
        echo 'error : Email ID Already Registered.';
        }
    else{
    $query2 = "INSERT INTO users(name, email, password, contact, address) values('$nm', '$em', '$epur', '$mno', '$add');";
    $row = mysqli_query($con, $query2);
    $uid = mysqli_insert_id($con);
    echo "Succesfully Registered, You are being Redirected";
    $_SESSION['email'] = $em;
    $_SESSION['id'] = $uid;        
    header('location:products.php');
    }  

?>


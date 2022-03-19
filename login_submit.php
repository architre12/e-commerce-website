<?php
include 'includes/common.php';

$email = mysqli_real_escape_string($con, $_POST['username']);
$password = md5(mysqli_real_escape_string($con, $_POST['password']));

$select_query = "SELECT id, email, password FROM users WHERE email='$email' AND password='$password'";
$select_query_result = mysqli_query($con, $select_query) or die(mysqli_error($con));

$total_rows = mysqli_num_rows($select_query_result);
if($total_rows==0){
    echo 'Invalid login details';
}
else{
    $row = mysqli_fetch_array($select_query_result);
    session_start();
    $_SESSION['email'] = $row['email'];
    $_SESSION['id'] = $row['id'];
    header('location: products.php');


}



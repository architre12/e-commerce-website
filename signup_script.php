<?php

include 'includes/common.php';

$name = mysqli_real_escape_string($con, $_POST['name']);
$email = mysqli_real_escape_string($con, $_POST['email']);
$password = md5(mysqli_real_escape_string($con, $_POST['password']));
$contact = mysqli_real_escape_string($con, $_POST['contact']);
$city = mysqli_real_escape_string($con, $_POST['city']);
$address = mysqli_real_escape_string($con, $_POST['address']);

$check_query = "SELECT email FROM users WHERE email='$email'";
$check_query_result = mysqli_query($con, $check_query) or die(mysqli_error($con));

$total_rows = mysqli_num_rows($check_query_result);
if($total_rows==0){
    $user_registration_query = "INSERT INTO users(name, email, password, contact, city, address) values('$name', '$email', '$password', '$contact', '$city', '$address')";
    $user_registration_submit = mysqli_query($con, $user_registration_query) or die(mysqli_error($con));
    session_start();
    $_SESSION['email'] = $email;
    $_SESSION['id'] = mysqli_insert_id($con);
    header('location: products.php');
}
else{
    echo 'Email already exists!';
}


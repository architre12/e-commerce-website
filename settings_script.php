<?php include 'includes/common.php'; ?>


<?php
$old = MD5(mysqli_real_escape_string($con, $_POST['old']));
$new_one = MD5(mysqli_real_escape_string($con, $_POST['new_one']));
$new_two = MD5(mysqli_real_escape_string($con, $_POST['new_two']));

$query = "SELECT email, password FROM users WHERE email ='" . $_SESSION['email'] . "'";
$result = mysqli_query($con, $query)or die($mysqli_error($con));
$row = mysqli_fetch_array($result);

$orig_pass = $row['password'];

//check old password and password taken from db
if ($new_one != $new_two) {
    header('location: settings.php?error=The two passwords don\'t match.');
} else {
    if ($old == $orig_pass) {
        $query = "UPDATE  users SET password = '" . $new_pass . "' WHERE email = '" . $_SESSION['email'] . "'";
        mysqli_query($con, $query) or die($mysqli_error($con));
        header('location: settings.php?error=Password Updated Successfully');
    } else{
        header('location: settings.php?error=Wrong Old Password.');
}
}

?>
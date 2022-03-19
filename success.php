<?php include 'includes/common.php'; ?>

<?php 
if (!isset($_SESSION['email'])) {
    header('location: index.php');
}
$user_id = $_SESSION['id'];
$item_ids_string = $_GET['itemsid'];

//We will change the status of the items purchased by the user to 'Confirmed'
$query = "UPDATE users_items SET status='Confirmed' WHERE user_id=" . $user_id . " AND item_id IN (" . $item_ids_string . ") and status='Added to cart'";
mysqli_query($con, $query) or die(mysqli_error($con));


?>

<?php
if(isset($_GET['code'])){
    $codename = $_GET['code'];
    $query = "UPDATE users SET SUB40 = 1 WHERE id = '$user_id'";
    mysqli_query($con, $query) or die(mysqli_error($con));
}

?>

<!DOCTYPE html>

<head>
    <title>Success | Lifestyle Store</title>
    <link rel="shortcut icon" href="img\srtcticon.png" type="image/png">

      <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- Bootstrap Core CSS -->
      <link href="css/bootstrap.css" rel="stylesheet">
    <!-- jQuery -->
      <script src="js/jquery.js"></script>
    <!-- Bootstrap Core JavaScript -->
      <script src="js/bootstrap.min.js"></script>
</head>

    <body>
        <?php include 'includes/header.php'; 
        $name_query = "SELECT * FROM users WHERE id='$user_id'";
        $mysqli_result = mysqli_query($con, $name_query) or die(mysqli_error($con));
        $row = mysqli_fetch_array($mysqli_result);
        ?>
        
        <div class="container text-center mt-5" style='margin-bottom: 22%'>
                      <h1 align="center" style='border-bottom: 6px solid #e0e0e0; padding-bottom: 1%'>Order Confirmed!</h1>
                      <p style='font-size: 2em'>You have a great choice <?php echo $row[1] ?>!</p>
                    <p align="center" style='font-size: 1.2em'>Click <a href="products.php">here</a> to purchase any other item.</p>
                
           
        </div>
        <?php include("includes/footer.php");
        ?>
    </body>
</html>


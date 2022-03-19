 <?php
        include 'includes/common.php';
  ?>

<?php 
if(isset($_SESSION['id'])){
header('location: products.php');
exit;
}
?>

<html>
    <head>
        <title>Sign Up</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="preconnect" href="https://fonts.gstatic.com">
        <link href="https://fonts.googleapis.com/css2?family=Lato&display=swap" rel="stylesheet">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    </head>
    <body>
       
        <?php
        include 'includes/header.php';
        ?>
        
        <div class="container mb-5">
  <div class="row">
    <div class="col-7 mx-auto">
      <div class='mt-5'>
        <h1>SIGN UP</h1>
        
        <form method="post" action="signup_script.php">
            <div class="mb-3">
                <input type="text" class="form-control" placeholder="Name" name="name">
            </div>
            <div class="mb-3">
                <input type="email" class="form-control" placeholder="Email" name="email">
            </div>
            <div class="mb-3">
                <input type="password" class="form-control" placeholder="Password" name="password">
            </div>
            <div class="mb-3">
                <input type="text" class="form-control" placeholder="Contact" name="contact">
            </div>
            <div class="mb-3">
                <input type="text" class="form-control" placeholder="City" name="city">
            </div>
            <div class="mb-3">
                <textarea class="form-control" placeholder="Address" rows="3" name="address"></textarea>
            </div>
            
            <button class="btn mt-3" style='background-color: rgb(95,158,160); color: white' type="submit">Sign up</button>
        </form>
        </div>
    </div>
  </div>
</div>
        
       <?php
       include 'includes/footer.php';
       ?>
            
      
        
        
        
        
         <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.bundle.min.js" integrity="sha384-JEW9xMcG8R+pH31jmWH6WWP0WintQrMb4s7ZOdauHnUtxwoG2vI5DkLtS3qm9Ekf" crossorigin="anonymous"></script>
        
            
    </body>
</html>

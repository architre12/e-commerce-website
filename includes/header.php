<html>
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link href='../index.css' rel='stylesheet' type='text/css'/>
        <link rel="preconnect" href="https://fonts.gstatic.com">
        <link href="https://fonts.googleapis.com/css2?family=Lato&display=swap" rel="stylesheet">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    </head>
    <body>
        
        <nav class="navbar navbar-expand-lg navbar-dark bg-dark navbar-fixed-top">
            <div class="container">
    <a class="navbar-brand" href="index.php" style="font-size:1.6em">The Lifestyle Store</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    
    <div class="collapse navbar-collapse justify-content-end" id="navbarSupportedContent">
      <ul class="navbar-nav">
        <?php
 if (isset($_SESSION['id'])) {
 ?>
 <li><a href = "cart.php" style="text-decoration:none; color:white"><span class = "fa fa-shopping-cart"></span> Cart </a></li>
 <li style="margin-left:2em"><a href = "settings.php" style="text-decoration:none; color:white"><span class = "fa fa-user"></span>
Settings</a></li>
 <li style="margin-left:2em"><a href = "logout.php" style="text-decoration:none; color:white"><span class = "fa fa-sign-in"></span> Logout</a></li>
 ?>
 <?php
 } else {
 ?>
 <li><a href="signup.php" style="text-decoration:none; color:white"><span class="fa fa-user"></span>
Sign Up</a></li>
 <li style="margin-left:2em;"><a href="login.php" style="text-decoration:none; ; color:white"><span class="fa fa-sign-in"></span>
Login</a></li>
<li style="margin-left:2em; text-decoration:none; color:white"><a style="text-decoration:none; color:white" href="aboutus.php"><span class="fa fa-th-list"></span> About Us</a></li>
<li style="margin-left:2em; text-decoration:none; color:white"><a style="text-decoration:none; color:white" href="contactus.php"><span class="fa fa-phone"></span> Contact Us</a></li>
 <?php
 }
 ?>
      </ul>
    </div>
  </div>
        </nav>
        
        
        
        
         <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.bundle.min.js" integrity="sha384-JEW9xMcG8R+pH31jmWH6WWP0WintQrMb4s7ZOdauHnUtxwoG2vI5DkLtS3qm9Ekf" crossorigin="anonymous"></script>
    
    </body>

</html>

<html>
    <head>
        <title>Cameras | Watches | Shirts - The Lifestyle Store</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="preconnect" href="https://fonts.gstatic.com">
        <link href="https://fonts.googleapis.com/css2?family=Lato&display=swap" rel="stylesheet">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    </head>
    
    <body>
        
        <?php
        include 'includes/common.php';
        ?>
        
        <?php
        include 'includes/header.php';
        ?>
        
        <?php
        include 'includes/check-if-added.php';
        ?>
        
   
       
        
        <div class="container mb-5">
            <div class="jumbotron text-center mt-5" style="background-color: rgb(211,211,211); padding: 5%; border-radius: 7px">
                <h1 class="display-3" style="font-weight: 500; text-shadow: 2px 3px 6px rgba(100,100,100,0.9);">Welcome to the Lifestyle Store!</h1>
                <p style="font-size: 1.15em">We have the best cameras, watches and shirts for you. No need to hunt around, we
have all in one place.</p>
            </div>
            
            <hr>
            
             <div style="width:60%; margin:auto;">
            <form style="display:flex; justify-content: space-around; flex-direction: row;" method="get" action="search.php">
                <input type="text" class="form-control" placeholder="Search by brand" name="search" style="width: 90%; margin-right: 10px">
                <button class="btn" style='background-color: rgb(95,158,160); color: white; width: 20%' type="submit">Search <i class="fa fa-search"></i></button>
            </form>
        </div>
            
            <div class="d-flex justify-content-between mt-4">
                
                <div class="card" style='width: 15rem'>
  <img src="1.jpg" class="card-img-top" alt="Cannon EOS">
  <div class="card-body text-center">
    <h3 class="card-title">Cannon EOS</h3>
    <p class="card-text">Rs. 36000.00</p>
    <?php if (!isset($_SESSION['email'])) { ?>
    <p><a href="login.php" role="button" class="btn btn-block" style="background-color: black; color: white">Buy
Now</a></p>
 <?php
 } else {
 //We have created a function to check whether this particular product is added to cart or not.
     
 if (check_if_added_to_cart(1)) { //This is same as if(check_if_added_to_cart !=0)
 echo '<a href="#" class="btn btn-block btn-success" disabled>Added to
cart</a>';
 } else {
 ?>
<a href="cart-add.php?id=1" name="add" value="add" class="btn btn-block
" style='color:white; background-color: black; width:100%'>Add to cart</a>
 <?php
 }
 }
 ?>
  </div>
</div>
                <div class="card" style='width: 15rem'>
  <img src="2.jpg" class="card-img-top" alt="Sony DSLR">
  <div class="card-body text-center">
    <h3 class="card-title">Sony DSLR</h3>
    <p class="card-text">Rs. 40000.00</p>
    <?php if (!isset($_SESSION['email'])) { ?>
 <p><a href="login.php" role="button" class="btn btn-block" style="background-color: black; color: white">Buy
Now</a></p>
 <?php
 } else {
 //We have created a function to check whether this particular product is addedto cart or not.
 if (check_if_added_to_cart(2)) { //This is same as if(check_if_added_to_cart !=0)
 echo '<a href="#" class="btn btn-block btn-success" disabled>Added to
cart</a>';
 } else {
 ?>
<a href="cart-add.php?id=2" name="add" value="add" class="btn btn-block" style='color:white; background-color: black; width:100%'>Add to cart</a>
 <?php
 }
 }
 ?>
  </div>
</div>
                <div class="card" style='width: 15rem'>
  <img src="3.jpg" class="card-img-top" alt="Sony DSLR">
  <div class="card-body text-center">
    <h3 class="card-title">Cannon EOS</h3>
    <p class="card-text">Rs. 50000.00</p>
    <?php if (!isset($_SESSION['email'])) { ?>
 <p><a href="login.php" role="button" class="btn btn-block" style="background-color: black; color: white">Buy
Now</a></p>
 <?php
 } else {
 //We have created a function to check whether this particular product is addedto cart or not.
 if (check_if_added_to_cart(3)) { //This is same as if(check_if_added_to_cart !=0)
 echo '<a href="#" class="btn btn-block btn-success" disabled>Added to
cart</a>';
 } else {
 ?>
<a href="cart-add.php?id=3" name="add" value="add" class="btn btn-block" style='color:white; background-color: black; width:100%'>Add to cart</a>
 <?php
 }
 }
 ?>
  </div>
</div>
                <div class="card" style='width: 15rem'>
  <img src="4.jpg" class="card-img-top" alt="Olympus DSLR">
  <div class="card-body text-center">
    <h3 class="card-title">Olympus DSLR</h3>
    <p class="card-text">Rs. 80000.00</p>
    <?php if (!isset($_SESSION['email'])) { ?>
<p><a href="login.php" role="button" class="btn btn-block" style="background-color: black; color: white">Buy
Now</a></p>
 <?php
 } else {
 //We have created a function to check whether this particular product is addedto cart or not.
 if (check_if_added_to_cart(4)) { //This is same as if(check_if_added_to_cart !=0)
 echo '<a href="#" class="btn btn-block btn-success" disabled>Added to
cart</a>';
 } else {
 ?>
<a href="cart-add.php?id=4" name="add" value="add" class="btn btn-block" style='color:white; background-color: black; width:100%'>Add to cart</a>
 <?php
 }
 }
 ?>
  </div>
</div>
            
                    
                </div>
            
            <div class="d-flex justify-content-between mt-4">
                
                <div class="card" style='width: 15rem'>
  <img src="5.jpg" class="card-img-top" alt="Titan Model #301">
  <div class="card-body text-center">
    <h3 class="card-title">Titan Model #301</h3>
    <p class="card-text">Rs. 13000.00</p>
    <?php if (!isset($_SESSION['email'])) { ?>
 <p><a href="login.php" role="button" class="btn btn-block" style="background-color: black; color: white">Buy
Now</a></p>
 <?php
 } else {
 //We have created a function to check whether this particular product is addedto cart or not.
 if (check_if_added_to_cart(5)) { //This is same as if(check_if_added_to_cart !=0)
 echo '<a href="#" class="btn btn-block btn-success" disabled>Added to
cart</a>';
 } else {
 ?>
<a href="cart-add.php?id=5" name="add" value="add" class="btn btn-block" style='color:white; background-color: black; width:100%'>Add to cart</a>
 <?php
 }
 }
 ?>
  </div>
</div>
                <div class="card" style='width: 15rem'>
  <img src="6.jpg" class="card-img-top" alt="Titan Model #201">
  <div class="card-body text-center">
    <h3 class="card-title">Titan Model #201</h3>
    <p class="card-text">Rs. 3000.00</p>
    <?php if (!isset($_SESSION['email'])) { ?>
 <p><a href="login.php" role="button" class="btn btn-block" style="background-color: black; color: white">Buy
Now</a></p>
 <?php
 } else {
 //We have created a function to check whether this particular product is addedto cart or not.
 if (check_if_added_to_cart(6)) { //This is same as if(check_if_added_to_cart !=0)
 echo '<a href="#" class="btn btn-block btn-success" disabled>Added to
cart</a>';
 } else {
 ?>
<a href="cart-add.php?id=6" name="add" value="add" class="btn btn-block" style='color:white; background-color: black; width:100%'>Add to cart</a>
 <?php
 }
 }
 ?>
  </div>
</div>
                <div class="card" style='width: 15rem'>
  <img src="7.jpg" class="card-img-top" alt="HMT Milan">
  <div class="card-body text-center">
    <h3 class="card-title">HMT Milan</h3>
    <p class="card-text">Rs. 8000.00</p>
    <?php if (!isset($_SESSION['email'])) { ?>
 <p><a href="login.php" role="button" class="btn btn-block" style="background-color: black; color: white">Buy
Now</a></p>
 <?php
 } else {
 //We have created a function to check whether this particular product is addedto cart or not.
 if (check_if_added_to_cart(7)) { //This is same as if(check_if_added_to_cart !=0)
 echo '<a href="#" class="btn btn-block btn-success" disabled>Added to
cart</a>';
 } else {
 ?>
<a href="cart-add.php?id=7" name="add" value="add" class="btn btn-block" style='color:white; background-color: black; width:100%'>Add to cart</a>
 <?php
 }
 }
 ?>
  </div>
</div>
                <div class="card" style='width: 15rem'>
  <img src="8.jpg" class="card-img-top" alt="Faber Luba #111">
  <div class="card-body text-center">
    <h3 class="card-title">Faber Luba #111</h3>
    <p class="card-text">Rs. 18000.00</p>
    <?php if (!isset($_SESSION['email'])) { ?>
<p><a href="login.php" role="button" class="btn btn-block" style="background-color: black; color: white">Buy
Now</a></p>
 <?php
 } else {
 //We have created a function to check whether this particular product is addedto cart or not.
 if (check_if_added_to_cart(8)) { //This is same as if(check_if_added_to_cart !=0)
 echo '<a href="#" class="btn btn-block btn-success" disabled>Added to
cart</a>';
 } else {
 ?>
<a href="cart-add.php?id=8" name="add" value="add" class="btn btn-block" style='color:white; background-color: black; width:100%'>Add to cart</a>
 <?php
 }
 }
 ?>
  </div>
</div>
            
                    
                </div>
            
        
        <div class="d-flex justify-content-between mt-4">
                
                <div class="card" style='width: 15rem'>
  <img src="9.jpg" class="card-img-top" alt="H&W ">
  <div class="card-body text-center">
    <h3 class="card-title">H&W</h3>
    <p class="card-text">800.00</p>
    <?php if (!isset($_SESSION['email'])) { ?>
<p><a href="login.php" role="button" class="btn btn-block" style="background-color: black; color: white">Buy
Now</a></p>
 <?php
 } else {
 //We have created a function to check whether this particular product is addedto cart or not.
 if (check_if_added_to_cart(9)) { //This is same as if(check_if_added_to_cart !=0)
 echo '<a href="#" class="btn btn-block btn-success" disabled>Added to
cart</a>';
 } else {
 ?>
<a href="cart-add.php?id=9" name="add" value="add" class="btn btn-block" style='color:white; background-color: black; width:100%'>Add to cart</a>
 <?php
 }
 }
 ?>
  </div>
</div>
                <div class="card" style='width: 15rem'>
  <img src="10.jpg" class="card-img-top" alt="Luis Phil">
  <div class="card-body text-center">
    <h3 class="card-title">Luis Phil</h3>
    <p class="card-text">Rs. 1000.00</p>
    <?php if (!isset($_SESSION['email'])) { ?>
<p><a href="login.php" role="button" class="btn btn-block" style="background-color: black; color: white">Buy
Now</a></p>
 <?php
 } else {
 //We have created a function to check whether this particular product is addedto cart or not.
 if (check_if_added_to_cart(10)) { //This is same as if(check_if_added_to_cart !=0)
 echo '<a href="#" class="btn btn-block btn-success" disabled>Added to
cart</a>';
 } else {
 ?>
<a href="cart-add.php?id=10" name="add" value="add" class="btn btn-block" style='color:white; background-color: black; width:100%'>Add to cart</a>
 <?php
 }
 }
 ?>
  </div>
</div>
                <div class="card" style='width: 15rem'>
  <img src="11.jpg" class="card-img-top" alt="John Zok">
  <div class="card-body text-center">
    <h3 class="card-title">John Zok</h3>
    <p class="card-text">Rs. 1500.00</p>
    <?php if (!isset($_SESSION['email'])) { ?>
<p><a href="login.php" role="button" class="btn btn-block" style="background-color: black; color: white">Buy
Now</a></p>
 <?php
 } else {
 //We have created a function to check whether this particular product is addedto cart or not.
 if (check_if_added_to_cart(11)) { //This is same as if(check_if_added_to_cart !=0)
 echo '<a href="#" class="btn btn-block btn-success" disabled>Added to
cart</a>';
 } else {
 ?>
<a href="cart-add.php?id=11" name="add" value="add" class="btn btn-block" style='color:white; background-color: black; width:100%'>Add to cart</a>
 <?php
 }
 }
 ?>
  </div>
</div>
                <div class="card" style='width: 15rem'>
  <img src="12.jpg" class="card-img-top" alt="Jhalsani">
  <div class="card-body text-center">
    <h3 class="card-title">Jhalsani</h3>
    <p class="card-text">Rs. 1300.00</p>
    <?php if (!isset($_SESSION['email'])) { ?>
 <p><a href="login.php" role="button" class="btn btn-block" style="background-color: black; color: white">Buy
Now</a></p>
 <?php
 } else {
 //We have created a function to check whether this particular product is addedto cart or not.
 if (check_if_added_to_cart(12)) { //This is same as if(check_if_added_to_cart !=0)
 echo '<a href="#" class="btn btn-block btn-success" disabled>Added to
cart</a>';
 } else {
 ?>
<a href="cart-add.php?id=12" name="add" value="add" class="btn btn-block" style='color:white; background-color: black; width:100%'>Add to cart</a>
 <?php
 }
 }
 ?>
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


<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <title>The Lifestyle Store</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link href='index.css' rel='stylesheet' type='text/css'/>
        <link rel="preconnect" href="https://fonts.gstatic.com">
        <link href="https://fonts.googleapis.com/css2?family=Lato&display=swap" rel="stylesheet">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    </head>
    <body>
        <?php
        // put your code here
        include 'includes/common.php';
        if (isset($_SESSION['email'])) {
 header('location: products.php');
}

        ?>
        
        <?php
        include 'includes/header.php'
        ?>
        
        <div class='content'>
            <div class='banner-image'>
                <div class='inner-banner-image'>
                    <div class="banner-content">
                        <h1 style="font-size: 3.5em">We sell Lifestyle!</h1>
                        <p style="font-size: 1.2em">Flat 40% off on Premium brands. Use code SUB40.</p>
                        <a href='products.php' class='btn btn-danger btn-lg active'>Shop Now</a>
                    </div>
                </div>
            </div>
            <div class='container'>
                <div class="items">
                    <a href="#" style="text-decoration: none">
                        <img src="camera.jpg" alt="Cameras" class="thumbnail" style="height:250px">
                        <div class="caption">
                            <h2>Cameras</h2>
                            <p style="font-weight: normal">Choose among the best in the world.</p>
                        </div>
                    </a>
                </div>
                
                <div class="items">
                    <a href="products.php" style="text-decoration: none">
                        <img src="watch.jpg" alt="Watches" class="thumbnail" style="height:250px">
                        <div class="caption">
                            <h2>Watches</h2>
                            <p style="font-weight: normal">Original watches from the best brands</p>
                        </div>
                    </a>
                </div>
                
                <div class="items">
                    <a href="products.php" style="text-decoration: none">
                        <img src="shirt.jpg" alt="" class="thumbnail" style="height:250px">
                        <div class="caption">
                            <h2>Shirts</h2>
                            <p style="font-weight: normal">Our exclusive collection of shirts</p>
                        </div>
                    </a>
                </div>
            </div>
        </div>
        
        <?php include 'includes/footer.php';?>
        
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.bundle.min.js" integrity="sha384-JEW9xMcG8R+pH31jmWH6WWP0WintQrMb4s7ZOdauHnUtxwoG2vI5DkLtS3qm9Ekf" crossorigin="anonymous"></script>
    
    </body>
</html>

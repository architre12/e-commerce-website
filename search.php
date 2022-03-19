<html>
    
    <head>
        <title>Cameras | Watches | Shirts - The Lifestyle Store</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link href='index.css' rel='stylesheet' type='text/css'/>
        <link rel="preconnect" href="https://fonts.gstatic.com">
        <link href="https://fonts.googleapis.com/css2?family=Lato&display=swap" rel="stylesheet">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    </head>
    
    
    <body>
        
        <?php include 'includes/header.php'; ?> 
        
        <?php include 'includes/common.php'; ?>
        <?php include 'includes/check-if-added.php'; ?>
        
        <?php
            if(isset($_GET['search'])){
                $search = $_GET['search'];
                $searchq = preg_replace("#[^0-9a-z]#i", "", $search);
                
                $query = mysqli_query($con, "SELECT * FROM items WHERE name LIKE '%$searchq%'") or die(mysqli_error($con));
                $count = mysqli_num_rows($query);
            }
        ?>
        <div class="container mt-4">
        <h1 style='border-bottom: 6px solid #e0e0e0; width:60%'>Search results for <?php echo $search ?></h1>
        
        </div>
        
        
        <?php if($count==0){ ?>
        <div class='container mt-5' style='margin-bottom: 23.8%'>
            <h1 style='color: grey; font-size: 2em; font-weight: lighter'>Sorry! We didn't find any results for your search.</h1>
        </div>
        <?php }else { ?>
        
        
        
        <div class='container mt-5 mb-5'>
            
            <div class='row'>
        
                <?php while($row = mysqli_fetch_array($query)){ 
                    
                    $id = $row[0];
                    $name = $row[1];
                    $price = $row[2];
                    
                    ?>
                    
                <div class='col-lg-4 col-md-1'>
                   <div class="card" style='width: 100%'>
                                <img src="<?php echo $id ?>.jpg" class="card-img-top" alt="Cannon EOS">
                                   <div class="card-body text-center">
                                       <h3 class="card-title"><?php echo $name ?></h3>
                                       <p class="card-text" style='font-size:1.2em'>Rs. <?php echo $price ?></p>
                                       <?php if (!isset($_SESSION['email'])) { ?>
                                             <p><a href="login.php" role="button" class="btn btn-block" style="background-color: black; color: white; width:100%">Buy Now</a></p>
                                       <?php } else {
                                           
                                           if (check_if_added_to_cart(1)) { 
                                             echo '<a href="#" class="btn btn-block btn-success" disabled>Added to cart</a>';
                                           } else { ?>
                                              <a href="cart-add.php?id=1" name="add" value="add" class="btn btn-block btn-primary">Add to cart</a>
                                       <?php }
                                          } ?>
                                    </div>
                            </div>
                </div>
        
                <?php } ?>
        
            </div>
        </div>
        
        <?php } ?>
    
    <?php include 'includes/footer.php'; ?>
    
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.bundle.min.js" integrity="sha384-JEW9xMcG8R+pH31jmWH6WWP0WintQrMb4s7ZOdauHnUtxwoG2vI5DkLtS3qm9Ekf" crossorigin="anonymous"></script>
    </body>
</html>
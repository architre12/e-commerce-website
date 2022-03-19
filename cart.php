<?php require("includes/common.php"); ?>

<?php $user_id = $_SESSION['id']; ?>

<?php
if(isset($_GET['code'])){
    $code = $_GET['code'];
    $query = "SELECT * FROM codes WHERE name='$code'";
    $result = mysqli_query($con, $query) or die(mysqli_error($con));
    $count = mysqli_num_rows($result);
    $value=0;
    if($count==0){
        $value = -1;
    }
    else{  
        $user_query = "SELECT * FROM users WHERE id='$user_id'";
        $user_result = mysqli_query($con, $user_query) or die(mysqli_error($con));
        $user_row = mysqli_fetch_array($user_result);
        if($user_row[7]==1){
            $value=-2;
        }
        else{
            $row = mysqli_fetch_array($result);
            $value = (int)$row[1];
            $codename = $row[0];
        }
        
    }
}
?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <title>Cart | Lifestyle Store</title>
    
          <meta name="viewport" content="width=device-width, initial-scale=1">
       
        <!-- Custom CSS -->
<!--          <link href='index.css' rel='stylesheet' type='text/css'/>-->
        <!-- jQuery -->
          <script src="js/jquery.js"></script>
        <!-- Bootstrap Core JavaScript -->
          <script src="js/bootstrap.min.js"></script>
    </head>
    <body>

        <!-- Header -->
        <?php
        include 'includes/header.php';
        ?>
        <!--Header end-->
        
        <div class="container">
               <div class="row">
                <div class="col-sm-6 col-sm-offset-3">
                    <table class="table table-striped">

                        <!--show table only if there are items added in the cart-->
                        <?php
                        $sum = 0;
                        if(isset($_SESSION['id'])){
                            $user_id = $_SESSION['id'];
                        
                        $query = "SELECT items.price AS Price, items.id, items.name AS Name FROM users_items JOIN items ON users_items.item_id = items.id WHERE users_items.user_id='$user_id' and status='Added to cart'";
                        $result = mysqli_query($con, $query)or die($mysqli_error($con));
                        if (mysqli_num_rows($result) >= 1) {
                            ?>
                        <h1 class='mt-5 mb-3'>My Cart</h1>
                            <thead>
                                <tr>
                                    <th>Item Number</th>
                                    <th>Item Name</th>
                                    <th>Price</th>
                                    <th></th>
                                </tr>
                            </thead>
                            
                            <tbody>
                                <?php
                                while ($row = mysqli_fetch_array($result)) {
                                    $sum+= $row["Price"];
                                    $id="";
                                    $id .= $row["id"] . ",";
                                    echo "<tr>
                                              <td>" . "#" . $row["id"] . "</td>
                                              <td>" . $row["Name"] . "</td>
                                              <td>Rs " . $row["Price"] . "</td>
                                              <td><a href='cart-remove.php?id={$row['id']}' class='remove_item_link'> Remove </a></td>
                                          </tr>";
                                }
                                $id = rtrim($id, ",");
                                if(isset($_GET['code']) && $value!=-1){
                                    $sum = $sum - $sum*($value/100);
                                }
                                if(isset($_GET['code']) && $value==-1){ ?>
                                    <tr>
                                          <td></td>
                                          <td>Total</td>
                                          <td>Rs. <?php echo $sum ?> Code entered is Invalid!</td>
                                          <td><a href='success.php?itemsid=".$id ."'class='btn btn-danger'>Confirm Order</a></td>
                                    </tr>
                                <?php } ?>
                                    
                                <?php if(isset($_GET['code']) && $value==-2){ ?>
                                    <tr>
                                          <td></td>
                                          <td>Total</td>
                                          <td>Rs. <?php echo $sum ?> You have already used this code!</td>
                                          <td><a href='success.php?itemsid=".$id ."'class='btn btn-danger'>Confirm Order</a></td>
                                    </tr>
                                <?php } ?>
                                    
                                <?php if(isset($_GET['code']) && $value!=-1){ ?>
                                    <tr>
                                          <td></td>
                                          <td><strong>Total</strong></td>
                                                      <td><strong>Rs <?php echo $sum ?></strong> <p style='color: red; font-style: italic'>Code applied!<p></td>
                                          <td><a href='success.php?itemsid=".$id ."&code=".$codename ."' class='btn btn-danger'>Confirm Order</a></td>
                                    </tr>
                                    
                                <?php } ?>
                                    
                                 <?php if(!isset($_GET['code'])){ ?>
                                    <tr>
                                          <td></td>
                                          <td><strong>Total</strong></td>
                                                      <td><strong>Rs <?php echo $sum ?></strong></td>
                                          <td><a href='success.php?itemsid=".$id ."' class='btn btn-danger'>Confirm Order</a></td>
                                    </tr>
                                    
                                <?php } ?>
                                    
                                    
                                
                                
                            </tbody>
                            
                            
                            <?php
                        }
                            
                        
                        }
                        
                        else {
                            if(!isset($_SESSION['id'])){ ?>
                                <div style='text-align:center; margin:auto'><div class='mt-5 mb-5 d-flex' style='font-size:2em; background-color:#e0e0e0; padding: 8%; width:100%; border-radius:5px; flex-direction:column; margin-left:60%;'>
                                            You need to be logged in first!
                                            <button class='btn btn-danger btn-lg active mt-4' style='color: white' href='login.php'>Login</button>
                                            <div class='mt-2' style='font-size:0.9rem'>Don't have an account? <a href='signup.php' style='font-weight:bold'>Sign up</a></div>
                                      </div></div>
                           <?php } 
                            else{ ?>
                                <div style='text-align:center; margin-bottom:50%'><div class='mt-5 mb-5 d-flex' style='font-size:2em; background-color:#e0e0e0; padding: 8%; width:100%; border-radius:5px; flex-direction:column; margin-left:60%;'>
                                            <h1>Your cart is empty</h1>!
                                            <div>Explore some of our products and add them to the cart.</div>
                                            <button class='btn btn-danger btn-lg active' style='background-color: black; color: white' href='products.php'>Continue shopping</button>
                                </div></div>
                           <?php }
                            
                        }
                        ?>
                        
                    </table>
                </div>
             </div>
            
            <?php
                if(isset($_SESSION['id'])){ ?>
                    <h3>Have a Code?</h3>
                    <div style="margin-right:auto; width: 55%; margin-bottom: 10%">
                        <form style="display:flex; justify-content: space-around; flex-direction: row;" method="get" action="cart.php">
                            <input type="text" class="form-control" placeholder="Enter your code here" name="code" style="width: 90%; margin-right: 10px">
                            <button class="btn" style='background-color: rgb(95,158,160); color: white; width: 20%' type="submit">Enter </button>
                        </form>
                    </div>
              
                    
            <?php } ?>
            
            <a href='products.php' style='font-size: 1em' class='mt-2' style='margin-bottom:50%'>Continue shopping</a>
        </div>
        
        <!--Footer-->
        
           <?php
        include 'includes/footer.php';
        ?>
        
        <!--Footer end-->
    </body>
</html>

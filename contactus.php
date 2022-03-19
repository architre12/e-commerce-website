<?php
include "includes/common.php"
?>
<!DOCTYPE html>

<html>
    <head>
        <title>Contact Us | Lifestyle Store</title>
        <link rel="shortcut icon" href="img\srtcticon.png" type="image/png">
        
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link href="css/bootstrap.css" rel="stylesheet">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

        <!-- Custom CSS -->
        
        <!-- jQuery -->
        <script src="js/jquery.js"></script>
        <!-- Bootstrap Core JavaScript -->
        <script src="js/bootstrap.min.js"></script>
    </head>

<body>
    
    <!-- Header -->
    <?php include 'includes/header.php'; ?>
    <br>
    
<div class="container">
    <div class="row">
        <div class="col-sm-10">
		  <h1 class="title">LIVE SUPPORT</h1>
		  <p style="font-size:1.5em">24 hours | 7 days a week | 365 days a year Live Technical Support</p><br>
          <div>
             <p>It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters. There are many variations of passages of Lorel Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomised words which don't look even slightly believable. If you are going to use a passage of Lorem Ipsum, you need to be sure there isn't anything embarrassing hidden in the middle of text.</p>
          </div>
      </div>
        <div class="col-sm-2">
         <img align="right" src="contact.png" alt="contact us">
        </div>
    </div>
    

<div class="row">
    <div class="col-sm-9">
        <div class="contact-form">
            <h2>Write to us</h2>
	           <div class="status alert alert-success" style="display: none"></div>
                <form id="main-contact-form" class="contact-form row" name="contact-form" method="post" action="sendemail.php">
				    
                    <div class="form-group col-sm-9">
				        <input type="text" name="name" class="form-control mt-2" required="required" placeholder="Name" >
				    </div>
				    
                    <div class="form-group col-sm-9">
				        <input type="email" name="email" class="form-control mt-2" required="required" placeholder="Email">
				    </div>
				    
                    <div class="form-group col-sm-9">
				        <textarea name="message" id="message" required="required" class="form-control mt-2" rows="7" placeholder="Your Message Here"></textarea>
				    </div>
				            
                    <div class="form-group col-sm-7">
				                <input type="submit" name="submit" class="btn btn-primary mt-2" value="Submit">
				    </div>
				</form>
        </div>
    </div>
	    		
        <div class="col-sm-3">
	       <div class="contact-info mb-5">
	           <h2 class="title">Contact</h2>
	               <address>
				    <p>500 Lorem Ipsum Dolar Sit,</p>
				    <p>22-56-3-5 Sit Amet, Lorem,</p>
				    <p>India</p>
				    <p>Phone:(00) 222 555 3333</p>
				    <p>Fax:(000) 222 55 33 6</p>
				    <p>Email: info@estore.com</p>
	               </address>
	               
	            <div><h2 class="title">Follow Us On</h2>
                        <a href="http://www.facebook.com/estore" target="_blank" style="text-decoration: none; margin-right: 4%; color: black"><i class="fa fa-facebook-f" style="font-size:2.3em"></i></a>
                        <a href="http://www.twitter.com/estore" target="_blank" style="text-decoration: none; margin-right: 4%; color: black"><i class="fa fa-twitter" style="font-size:2.3em"></i></a>
                        <a href="http://www.instagram.com/estore" target="_blank" style="text-decoration: none; margin-right: 4%; color: black"><i class="fa fa-instagram" style="font-size:2.3em"></i></a>                        
                        <a href="http://www.pinterest.com/estore" target="_blank" style="text-decoration: none; margin-right: 4%; color: black"><i class="fa fa-pinterest" style="font-size:2.3em"></i></a>


               </div>
            </div>
        </div>
    </div>
</div>



      <?php include 'includes/footer.php'; ?>
    </body>
</html>


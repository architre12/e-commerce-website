<html>
    <head>
        <title>Login</title>
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
        include 'includes/common.php';
        ?>
        
        <?php
        include 'includes/header.php'
        ?>
        
        
         <div class="card w-50 mt-5 mx-auto mb-5">
    
  <h5 class="card-header py-3 display-5 text-white" style='background-color: rgb(95,158,160)'>Login</h5>
  
  <div class="card-body">
      <p class='text-warning'><em>Login to make a purchase</em></p>
      
      <form method="post" action="login_submit.php">
      <div class="mb-3">
  <label for="username" class="form-label">Username</label>
  <input type="email" class="form-control" id='username' name="username">
</div>
      
      <div class="mb-3">
  <label for="password" class="form-label">Password</label>
  <input type="password" class="form-control" id='password' name="password">
</div>
      
    <button class="btn mt-3" style='background-color: rgb(95,158,160); color: white' type="submit">Login</button>
    </form>
      
  </div>
  <div class="card-footer">
      <p class='text-muted' style='display: inline'>Don't have an account?</p> <a href='signup.html' style='color: blue; text-decoration: none'><strong>Register</strong></a>
  </div>
</div>
        
        <?php
        include 'includes/footer.php';
        ?>
        
         <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.bundle.min.js" integrity="sha384-JEW9xMcG8R+pH31jmWH6WWP0WintQrMb4s7ZOdauHnUtxwoG2vI5DkLtS3qm9Ekf" crossorigin="anonymous"></script>    
    </body>
</html>

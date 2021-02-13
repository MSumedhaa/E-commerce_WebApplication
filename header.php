

<!DOCTYPE html>
<html>
    <head>
         <meta charset="utf-8">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" >
        <!--jQuery library--> 
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
        <!--Latest compiled and minified JavaScript--> 
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title></title>
    </head>
    <body>
        
   <div id="login" class="modal fade " data-backdrop="false" role="dialog" display="center">
  <div class="modal-dialog">
    
    <div class="modal-content">
      <div class="modal-body">
        <button data-dismiss="modal" class="close">&times;</button>
        <h4>LOGIN</h4>
        
                       <p>Don't have an account? <a href="signup.php">Register</a></p>

                        
                           
                            <form action="login_submit.php"  method="POST" >
                                <div class="form-group">
                                    <input type="email" class="form-control"  
                                           placeholder="Email" name="email" 
                                           required = "true" pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,3}$"> 
                                </div>
                                <div class="form-group">
                                    <input type="password" class="form-control" 
                                           placeholder="Password" name="password"required = "true" pattern=".{6,}" >
                                </div>
                                <button type="submit" name="submit" class="btn btn-primary">Login</button><br>
                            </form><br>
                          <a href="forgot_password.php">Forgot Password?</a>
                    
                
           
      </div>
    </div>
  </div>  
</div>
        
       <div class="navbar navbar-default navbar-fixed-top">
            <div class="container-fluid">
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar"> 
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                    <?php if (isset($_SESSION['email'])) { ?>
                      <a class="navbar-brand" href="home.php">E-store</a>
                    <?php } else { ?>
                    <a class="navbar-brand" href="index.php">E-store</a>
                    <?php } ?>
                   </div>
                
                <div class="collapse navbar-collapse" id="myNavbar">
                    <ul class="nav navbar-nav navbar-right"> 
                    <?php
                    if (isset($_SESSION['email'])) { ?>
                    <li><a href = "cart.php"><span class = "glyphicon glyphicon-shopping-cart"></span> Cart </a></li>
                    <li><a href = "settings.php"><span class = "glyphicon glyphicon-user"></span> Settings</a></li>
                    <li><a href = "logout.php"><span class = "glyphicon glyphicon-log-in"></span> Logout</a></li>
                    <?php 
                    
                    }
                    
                    else { 
                        ?>
                    <li><a href="signup.php"><span class="glyphicon glyphicon-user"></span> Sign Up</a></li> 
                    <li><a href="#" data-target="#login" data-toggle="modal"><span class="glyphicon glyphicon-log-in"></span> Login</a></li>
                    <li><a href="about-us.php"><span class="glyphicon glyphicon-tasks"></span> About Us</a></li>
                    <li><a href="contact-us.php"><span class="glyphicon glyphicon-phone"></span>Contact Us</a></li>
                    <?php } ?>
                    </ul>
                </div>
            </div>
        </div>
        



    </body>
</html>  


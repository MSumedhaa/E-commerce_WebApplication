<!DOCTYPE html>
<html>
    <head>
        <title></title>
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" >
        <!--jQuery library--> 
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
        <!--Latest compiled and minified JavaScript--> 
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" type="text/css" href="style.css">

    </head>
    <body>
        <div id="login" class="modal fade " data-backdrop="false" role="dialog" display="center">
  <div class="modal-dialog">
    
    <div class="modal-content">
      <div class="modal-body">
        <button data-dismiss="modal" class="close">&times;</button>
        <h4>LOGIN</h4>
        
                       <p>Don't have an account? <a href="signup.php">Register</a></p>

                        
                           
                            <form method="post" action="login_submit.php">
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
                            </form><br/>
                            <a href="forgot_password.php">Forgot Password?</a>
                    
                
           
      </div>
    </div>
  </div>  
 </div>          
            <footer>
                <div class="row  text-center">
                 <div class="col-xs-4">  
                     
                     <h2>Information</h2>
                     <center>
                     <ul type="none"><li><a href=about-us.php>About Us</a></li>
                         <li><a href="contact-us.php"> Contact Us</a></li>
                     </ul>
                     </center>
            </div>
                 <div class="col-xs-4">  
                     <center>
                     <h2>My Account</h2>
                     
                     <ul type="none"><li><a <a href="#" data-target="#login" data-toggle="modal">Login</a></li>
                         <li><a href="signup.php">Signup</a></li>
                     </ul>
                     </center>
            </div>   
                    <div class="col-xs-4">  
                        <center>   
                     <h2>Contact Us</h2>
                     <p> contact:+91-123-000000</p>
                        </center>  
            </div>   
            </footer>
       

    </body>
</html>

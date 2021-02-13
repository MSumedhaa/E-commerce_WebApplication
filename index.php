
<?php
require'common.php';
if (isset($_SESSION['email']))
    { header('location: home.php');
    }
?>
<!DOCTYPE html>
 
<html>
    <head>
        <title>The Watch Store</title>
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
                            <form method="POST" action="login_submit.php">
                                <div class="form-group">
                                  <input type="email" class="form-control" placeholder="Email" name="email"
                                         required = "true" pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,3}$"> 
                                </div>     
                               <div class="form-group">
                                    <input type="password" class="form-control" placeholder="Password" name="password"required = "true" pattern=".{6,}" >
                               </div>
                          
                             <button type="submit" name="submit" class="btn btn-primary">Login</button><br>

                            </form><br>
                            <a href="forgot_password.php">Forgot Password?</a>
                      </div>
                  </div>
              </div>
          </div>
        
        
        <?php
        include'header.php';
        ?>
        
         <div class="container-fluid" style="margin-top:60px"  >
            <div class="row  text-center">
                <div class="col-xs-4">
                    <div class="thumbnail">
                        <img src="img/11.jpg" alt=""  >
                        <div class="caption">
                          <center>
                          <h3>HMT Milan</h3>
                          <p>Price:Rs.5000.00 </p>
                          <button href="#" data-target="#login" data-toggle="modal" role="button" class="btn btn-primary btn-block">
                              Order Now</button>
                          </center>
                      </div>
                    </div>
                </div>
                
                <div class="col-xs-4">
                    <div class="thumbnail">
                        <img src="img/9.jpg" alt="" >
                        <div class="caption">
                          <center>
                          <h3>Titan Model #301</h3>
                          <p>Price:Rs.13000.00 </p>
                          <button href="#" data-target="#login" data-toggle="modal" role="button" class="btn btn-primary btn-block">
                              Order Now</button>
                          </center>
                      </div>
                    </div>
                </div>
                
                <div class="col-xs-4">
                    <div class="thumbnail">
                        <img src="img/12.jpg" alt="">
                        <div class="caption">
                          <center>
                          <h3>Faber Luba #111</h3>
                          <p>Price:Rs.18000.00 </p>
                          <button href="#" data-target="#login" data-toggle="modal" role="button" class="btn btn-primary btn-block">
                              Order Now</button>
                          </center>
                      </div>
                    </div>
                </div>
                
                
            </div>
            
            <div class="row text-center">
                <div class="col-xs-4">
                    <div class="thumbnail">
                        <img src="img/watch-4.jpg" alt=""  >
                        <div class="caption">
                          <center>
                          <h3>Titan Facets</h3>
                          <p>Price:Rs.60000.00 </p>
                          <button href="#" data-target="#login" data-toggle="modal" role="button" class="btn btn-primary btn-block">
                             Order Now</button>
                          </center>
                      </div>
                    </div>
                </div>
                
                <div class="col-xs-4">
                    <div class="thumbnail">
                        <img src="img/watch-7.jpg" alt=""  >
                        <div class="caption">
                          <center>
                          <h3>Titan Raga</h3>
                          <p>Price:Rs.12000.00 </p>
                          <button href="#" data-target="#login" data-toggle="modal" role="button" class="btn btn-primary btn-block">
                             Order Now</button>
                          </center>
                      </div>
                    </div>
                </div>
                
                <div class="col-xs-4">
                    <div class="thumbnail">
                        <img src="img/watch-6.jpg" alt="">
                        <div class="caption">
                          <center>
                          <h3>Sonata</h3>
                          <p>Price:Rs.3000.00 </p>
                          <button href="#" data-target="#login" data-toggle="modal" role="button" class="btn btn-primary btn-block">
                              Order Now</button>
                          </center>
                      </div>
                    </div>
                </div>
                
            </div>
         </div>
        
        <?php 
        include'footer.php';
        ?>
                                   
          

    </body>
</html>

        
   
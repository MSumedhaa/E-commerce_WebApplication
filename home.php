<?php
require'common.php';
?>

<!DOCTYPE html>
<html>
    <head>
        <title>The Watch Store-Home</title>
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" >
        <!--jQuery library--> 
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
        <!--Latest compiled and minified JavaScript--> 
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" type="text/css" href="style.css">

    </head>
    <body>
     
        <?php
        include'header.php';
        include'check-if-added.php';

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
                          <?php if(!isset($_SESSION['email'])){?>
                          <p><a href="#" data-target="#login" data-toggle="modal" role="button" class="btn btn-primary btn-block">Order Now</a></p>
                          <?php
                              } else {
                                  if(check_if_added_to_cart(1)){
                                  echo '<a href="#" class="btn btn-block btn-success" disabled> Added to cart</a>';
                                  }
                                  else{
                                      ?>
                              <a href="cart-add.php?id=1" name="add" value="add" class="btn btn-block btn-primary">Add to cart</a>
                              <?php
                                  }
                              }
                             ?>
                 
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
                          <?php if(!isset($_SESSION['email'])){?>
                          <p><a href="#" data-target="#login" data-toggle="modal" role="button" class="btn btn-primary btn-block">Order Now</a></p>
                          <?php
                              } else {
                                  if(check_if_added_to_cart(2)){
                                  echo '<a href="#" class="btn btn-block btn-success" disabled> Added to cart</a>';
                                  }
                                  else{
                                      ?>
                              <a href="cart-add.php?id=2" name="add" value="add" class="btn btn-block btn-primary">Add to cart</a>
                              <?php
                                  }
                              }
                             ?>                          
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
                       <?php if(!isset($_SESSION['email'])){?>
                          <p><a href="#" data-target="#login" data-toggle="modal" role="button" class="btn btn-primary btn-block">Order Now</a></p>
                          <?php
                              } else {
                                  if(check_if_added_to_cart(3)){
                                  echo '<a href="#" class="btn btn-block btn-success" disabled> Added to cart</a>';
                                  }
                                  else{
                                      ?>
                              <a href="cart-add.php?id=3" name="add" value="add" class="btn btn-block btn-primary">Add to cart</a>
                              <?php
                                  }
                              }
                             ?>                         
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
                          <?php if(!isset($_SESSION['email'])){?>
                          <p><a href="#" data-target="#login" data-toggle="modal" role="button" class="btn btn-primary btn-block">Order Now</a></p>
                          <?php
                              } else {
                                  if(check_if_added_to_cart(4)){
                                  echo '<a href="#" class="btn btn-block btn-success" disabled> Added to cart</a>';
                                  }
                                  else{
                                      ?>
                              <a href="cart-add.php?id=4" name="add" value="add" class="btn btn-block btn-primary">Add to cart</a>
                              <?php
                                  }
                              }
                             ?>
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
                          <?php if(!isset($_SESSION['email'])){?>
                          <p><a href="#" data-target="#login" data-toggle="modal" role="button" class="btn btn-primary btn-block">Order Now</a></p>
                          <?php
                              } else {
                                  if(check_if_added_to_cart(5)){
                                  echo '<a href="#" class="btn btn-block btn-success" disabled> Added to cart</a>';
                                  }
                                  else{
                                      ?>
                              <a href="cart-add.php?id=5" name="add" value="add" class="btn btn-block btn-primary">Add to cart</a>
                              <?php
                                  }
                              }
                             ?>
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
                         <?php if(!isset($_SESSION['email'])){?>
                          <p><a href="#" data-target="#login" data-toggle="modal" role="button" class="btn btn-primary btn-block">Order Now</a></p>
                          <?php
                              } else {
                                  if(check_if_added_to_cart(6)){
                                  echo '<a href="#" class="btn btn-block btn-success" disabled> Added to cart</a>';
                                  }
                                  else{
                                      ?>
                              <a href="cart-add.php?id=6" name="add" value="add" class="btn btn-block btn-primary">Add to cart</a>
                              <?php
                                  }
                              }
                             ?>
                          </center>
                      </div>
                    </div>
                </div>
                
            </div>
         </div>
        
       
                                   
          

    </body>
</html>

        
   

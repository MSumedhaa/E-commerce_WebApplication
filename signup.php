<?php
require'common.php';
?>

<!DOCTYPE html>
<html>
    <head>
        <title>SignUp</title>
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
        ?>
        
        <div class="container-fluid"><br><br><br><br>
            <div class="row">
            <div class="col-xs-4">
                <img src="img/fossil.jpg" alt="" width="430px" height="500px">
            </div>
                
                <div class="col-xs-4 col-xs-offset-2">
                    <h2>Sign Up</h2>
                     <form method="POST" action="signup_script.php">
                        
                        <div class="form-group">
                            <input type="text" class=" form-control"
                                   placeholder="Name" name="name" required="true"> 
                        </div>
                        
                           
                        <div class="form-group">
                            <input type="email" class="form-control"  
                                           placeholder="Email" name="email" required="true" pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,3}$">
                        </div>
                        
                        <div class="form-group">
                            <input type="password" class="form-control" 
                                           placeholder="Password" name="password" required="true" pattern=".{6,}">
                        </div>
                        
                        <div class="form-group">
                            <input type="number" class="form-control" 
                                   placeholder="Contact" name="contact" required="true">
                        </div>
                         
                        <div class="form-group">
                            <input type="text" class="form-control"
                                   placeholder="City" name="city" required="true">
                        </div>
                        <div class="form-group">
                            <input type="text" class="form-control"
                                   placeholder="Addrress" name="address" required="true">
                        </div>
                        <div class="form-group text-right ">
                            <input type="submit" value="Submit" class="btn btn-primary">
                        </div>
                        
                    </form>
               </div>
                <div class="col-xs-offset-2">
                    
                </div> 
                
        </div>
        </div>  <br><br> 
            <?php
            include'footer.php';
            ?>
        
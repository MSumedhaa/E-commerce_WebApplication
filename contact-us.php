<?php
require'common.php';
?>
<!DOCTYPE html>
<html>
    <head>
        <title>Contact_Us</title>
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

        <div class="container-fluid">
            <div class="row"><br><br><br>
                <div style="text-align:justify" class="col-xs-8">
                    <h2>LIVE SUPPORT </h2>
                    <p>24 hours| 7 days a week| 365 days a year Live Technical Support</p>
                    <p>It is a long established fact that a reader will be distracted by thereadable content of a page when looking at uts layout.
                        The point of using Lorem Ipsum is that it has more-or-less normal distribution of letters.There are many variations of passages
                        of Lorem Ipsum is available,but the majority have suffered alteration in some form,by injected humor,or randomasied words which 
                        do not look even slightly believable.If you are going to use a passage of Lorem Ipsum.You need to be sure there isn't anything 
                        embarrassing hidden in the middle of text.</p>
                </div>
                
                <div class="col-xs-4">
                    <br>
                    <img src="img/live-suppport.jpg" alt="" height="180px">
                </div>
            </div>
            <div class="row">
                <div class="col-xs-8">
                    <h2>CONTACT US</h2>
                    <form method="POST" action="contact_message.php">
                        <div class="form-group">
                            <label for="Name">First Name</label>
                            <input type="text"  class="form-control" id="Name" name="Name" required="true" >
                        </div>
                        <div class="form-group">
                            <label for="Email">Email:</label>
                            <input type="email"  class="form-control" id="Email" name="Email" required="true" pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,3}$" >
                        </div>
                        <div class="form-group">
                            
                            <textarea name="Message" id="Message" rows="6" cols="77" required="true"></textarea>
                            <label for="Message">Message</label>
                        </div>
                        <input type="submit" value="Submit" class="btn btn-primary">
                    </form><br>
                </div>
                
                <div class="col-xs-4">
                    <h2>Company Information:</h2>
                    <p>500 Lorem Ipsum Dolor Sit <br>
                        22-56-2-9 Sit Amet,Lorem,USA<br>
                        Phone:(00)222 666 44<br>
                        Fax:(000)000 00 00 0<br>
                        Email:info@mycompany.com<br>
                        Follow on:Facebook,Twitter<br>
                </div>
            </div>
        </div>
        <?php
        include'footer.php';
        ?>
    
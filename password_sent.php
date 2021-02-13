<!DOCTYPE html>
<html>
    <head>
        <title>Password_Sent</title>
        <!-- link to Bootstrap minified css-->
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
		<!-- link to Jquery minified-->
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
		<!-- link to Bootstrap JS -->
		<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
		<!-- link to external CSS -->
                <link rel="stylesheet" type="text/css" href="style.css">
    </head>
    <body>
        <?php
            require 'header.php';
        ?>
        <br><br><br>
        <div class="container panel-margin">
            <div class="alert alert-success">
                Your password has sent to your mail successfully.
                <a href="index.php">Click here</a>.
            </div>
        </div>
        
        
        
        <nav class="navbar-fixed-bottom">
            <?php
            require 'footer.php';
        ?>
        </nav>
        
        
        
        
    </body>
    </html>            

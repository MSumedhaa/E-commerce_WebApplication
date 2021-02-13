<?php

include'common.php';
if(isset($_POST['submit']))
{
    $email = $_POST['email'];
    $result = mysqli_query($con,"SELECT * FROM users where email='$email'");
    $row = mysqli_fetch_array($result);
	
	$email_id=$row['email'];
	$password=$row['password'];
	if($email==$email_id) {
	        $to = $email_id;
                $subject = "Password";
                $txt = "Your password is : $password.";
                $headers = "From: sumedhaa.medavarapu@gmail.com" ;
                mail($to,$subject,$txt,$headers);
                header('location:password_sent.php');

			}
				else{
			            header('location:invalid_email.php');
				}
}
?>
<!DOCTYPE HTML>
<html>

<head>
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" >
        <!--jQuery library--> 
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
        <!--Latest compiled and minified JavaScript--> 
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" type="text/css" href="style.css">
        <title>Forgot_Password</title>

</head>

<body>
    <?php include'header.php';
    ?><br><br>
    <div class="container">
        <div class="row">
            <div class="col-xs-6 col-xs-offset-3">
                <div class="panel primary">
                    <div class="panel-heading">
                        <h1><center>Forgot Password</center></h1>
                            <div class="panel-body">
                            <form action="" method='POST'>
                             <div class="form-group">

                              <input type="email" name="email" placeholder="Email" class="form-control" required="true" pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,3}$">
                             </div>
                              <input type="submit" name="submit" value='Submit' class="btn btn-primary">
                            </form>
                            </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    
 <nav class="navbar navbar-inverse navbar-fixed-bottom">

<?php

include'footer.php';
        
?>

</body>
</html>



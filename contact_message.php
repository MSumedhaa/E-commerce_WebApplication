<?php
require'common.php';
?>
<?php
$name=mysqli_real_escape_string($con,$_POST['Name']);
$email=mysqli_real_escape_string($con,$_POST['Email']);
$message=mysqli_real_escape_string($con,$_POST['Message']);

$user_message_query="insert into contact(name,email,message) values('$name','$email','$message')";
$user_message_submit=mysqli_query($con,$user_message_query)or die(mysqli_error($con));
header('location:contact-us.php');
?>


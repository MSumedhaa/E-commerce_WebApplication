<?php
require 'common.php'; 
?>
<?php
$email = mysqli_real_escape_string($con,$_POST['email']);
$password = md5(mysqli_real_escape_string($con,$_POST['password']));

$select_query = "select id,email from users where email='$email' and password='$password'";
$select_query_result = mysqli_query($con,$select_query) or die(mysqli_error($con));
$total_rows_fetched = mysqli_num_rows($select_query_result);
if($total_rows_fetched == 0){
    header('location:invalid_password.php');
}
else{
    $row = mysqli_fetch_array($select_query_result);
    $_SESSION['email'] = $email;
    $_SESSION['user_id'] = $row[0];
    
    header('location:home.php');
}
?>


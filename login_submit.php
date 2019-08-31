<?php
include 'include/common.php';
$email = $_POST['e-mail'];
$email = mysqli_real_escape_string($con, $email);
$password=$_POST['password'];
$password = mysqli_real_escape_string($con, $password);
// Query checks if the email and password are present in the database.
$query = "SELECT * FROM users WHERE email_id='$email' AND password='$password'";
$result=mysqli_query($con,$query) or die(mysqli_error($con));

if (mysqli_num_rows($result)==0) {
  $error = "<span class='red'>Please enter correct E-mail id and Password</span>";
  header('location: login.php?error=' . $error);
} else {  
  $row = mysqli_fetch_array($result);
  $_SESSION['email'] = $row['email_id'];
  $_SESSION['user_id'] = $row['id'];
  header('location: products.php');
}
?>


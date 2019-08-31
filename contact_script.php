<?php
include 'include/common.php';
$name=$_POST['name'];
$email = $_POST['email'];
$email = mysqli_real_escape_string($con, $email);
$message=$_POST['message'];

$query="INSERT INTO contact(name,email,message) VALUES ('$name','$email','$message')";
$result=mysqli_query($con,$query);
header('location:contact_success.php');
?>


<?php
include 'include/common.php';
$name = $_POST['name'];
$email = $_POST['e-mail'];
$pass = $_POST['password'];
$city = $_POST['city'];
$address = $_POST['address'];
/* @var $contact type */
$contact = $_POST['contact'];


$regex_email = "/^[_a-z0-9-]+(\.[_a-z0-9-]+)*@[a-z0-9-]+(\.[a-z0-9-]+)*(\.[a-z]{2,3})$/";
$regex_num = "/^[789][0-9]{9}$/";

$email_check_query = "SELECT * FROM users WHERE email_id='$email' ";
$result_email_check=mysqli_query($con,$email_check_query) or die(mysqli_error($con));
$num = mysqli_num_rows($result_email_check);

if ($num != 0) {
    $m = "<span class='red'>Email Already Exists</span>";
    header('location: signup.php?m1=' . $m);
  } else if (!preg_match($regex_email, $email)) {
    $m = "<span class='red'>Not a valid Email Id</span>";
    header('location: signup.php?m1=' . $m);
  } else if (!preg_match($regex_num, $contact)) {
    $m = "<span class='red'>Not a valid phone number</span>";
    header('location: signup.php?m2=' . $m);
  } else {


$user_registration_query = "INSERT into users (name, email_id, password, contact_no, city, address) values ('$name','$email','$pass','$contact','$city','$address')";
$user_registration_submit = mysqli_query($con, $user_registration_query) or die(mysqli_error($con));
$_SESSION['email'] = $email;
$_SESSION['user_id'] = mysqli_insert_id($con);
header('location:products.php');
}
?>
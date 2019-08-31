<?php
// This page updates the user password
require("include/common.php");
if (!isset($_SESSION['email'])) {
    header('location: index.php');
}
$old_pass = $_POST['old-password'];
$old_pass = mysqli_real_escape_string($con, $old_pass);


$new_pass = $_POST['password'];
$new_pass = mysqli_real_escape_string($con, $new_pass);


$new_pass1 = $_POST['retype_password'];
$new_pass1 = mysqli_real_escape_string($con, $new_pass1);

$query = "SELECT password FROM users WHERE email_id ='$_SESSION['email']'";
$result = mysqli_query($con, $query)or die(mysqli_error($con));

$orig_pass = $result;
if ($new_pass != $new_pass1) {
    header('location: settings.php?error=The two passwords don\'t match');
} else {
    if ($old_pass == $orig_pass) {
        $query = "UPDATE  users SET password = '$new_pass' WHERE email_id = '$_SESSION['email']'";
        mysqli_query($con, $query) or die($mysqli_error($con));
        header('location: settings.php?error=Password Updated');
    } else
        header('location: settings.php?error=Wrong Old Password');
}
?>
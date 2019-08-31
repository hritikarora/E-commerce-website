<?php

include 'include/common.php';
if(!isset($_SESSION['email'])){
    header('location:index.php');
}
?>
<!DOCTYPE html>
<html>
    
    <head>
        <title>Settings | Lifestyle Store</title>

        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" >
       
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>

        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
		
		<link href="css/style.css" rel="stylesheet" type="text/css"> 
        
        <style>
           
           
        footer{
			position:fixed;
		}  
            
        </style>

    </head> 
    <body>
    
    <?php
    include 'include/header.php';
    ?>
        <div class="container" id="container">
            <h1>Change Password</h1>
            <div class="row row_style">
                <div class="col-xs-8">
                    <form action="settings_script.php" method="POST">
                        
                        <div class="form-group">
                            <input type="password" placeholder="Old password" class="form-control" name="old-password">
                        </div>
                        <div class="form-group">
                            <input type="password" placeholder="New password" class="form-control" name="password">
                        </div>
                        <div class="form-group">
                            <input type="password" placeholder="Re-type new password" class="form-control" name="retype_password">
                        </div>
                    </form>
                    <a href="settings_script.php" class="btn btn-primary">Submit</a>
                </div>
            </div>
        </div>
                        
                        
        <footer>
<div class="container">    
   <center>
        <p>Copyright &copy; Lifestyle Store. All Rights Reserved  |  Contact Us: +91 90000 00000</p>       
   </center>       
            </div> 
            </footer>
        
    </body>
</html>
 

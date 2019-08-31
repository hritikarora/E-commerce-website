<!DOCTYPE html>
<html>
    
    <head>
        <title>Contact Us | Lifestyle Store</title>

        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" >
       
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>

        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
		<link href="css/style.css" rel="stylesheet" type="text/css" >
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
	<div class="row row-style">
	<div class="container">
	<div class="col-xs-8" style="float:left, padding-right:20px">
	<h1>Live Support(24 x 7 support)</h2>
	<h3>
	We have a 24x7 facility of live support from our customer care employees who always work hard to help each and every customer 
	to have a solution to their problems.Please enter the below details to contact us.
	</h3>
	</div>
	<div class="col-xs-4">
	<img src="img/contact.png">
	</div>
	</div>
	</div>
	
	<div class="row row-style">
	<div class="container">
	<div class="col-xs-8" style="float:left">
	<h1>Contact Us</h1>
	
	<form method="POST" action="contact_script.php">
	<div class="form-group">
	<input class="form-control" type="text" name="name" placeholder="Name" required="true" >
	</div>
	<div class="form-group">
	<input class="form-control" type="text" name="email" placeholder="E-mail" required="true">
	</div>
	<div class="form-group">
	<input class="form-control" type="text" name="Message" placeholder="Message" required="true" style="height:90px">
	</div>
	<div>
	<a class="btn btn-primary" href="contact_script.php">Submit</a>
	</div>
	</form>
	
	</div>
	<div class="col-xs-4">
	<h2>COMPANY INFORMATION:</h2>
	<p>Gurgaon,India-122018</p>
	<p>Phone: +91 8448444853</p>
	<p>email: trainings@internshala.com</p>
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
		
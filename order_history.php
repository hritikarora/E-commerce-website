<?php
require("include/common.php");
if (!isset($_SESSION['email'])) {
    header('location: index.php');
}
?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <title>Order History | Lifestyle Store</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
         <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" >
       
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>

        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
        	
        <link href="css/style.css" rel="stylesheet" type="text/css"/>
    </head>
    <body>
        <?php 
        include 'include/header.php'; 
        ?>
        <div style="height: 620px;margin-bottom: 0px;">
            <div class="container">
                <div class="row decor_bg">
                    <div class="col-md-6 col-md-offset-3">
                        <table class="table table-responsive table-hover table-condensed" style="background-color: rgba(255, 255, 255, 0.7);font-size:20px;color:#000000;margin-top:100px">
                            <?php
                            $sum = 0;
                            $user_id = $_SESSION['user_id'];
			
							
                            $query = "SELECT items.price AS Price, items.pid, items.Name AS Name FROM users_items JOIN items ON users_items.item_id = items.pid WHERE users_items.user_id='$user_id'";
                            $result = mysqli_query($con, $query)or die($mysqli_error($con));
                            if (mysqli_num_rows($result) >= 1) {
                            ?>
                            <thead>
                                <tr>
                                    <th>Item Name</th>
                                    <th>Price</th>
									<th>Order date and time</th>
                                    <th></th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php
                                while ($row = mysqli_fetch_array($result)) {
                                    $sum+= $row["Price"];
                                    echo "<tr><td>" .$row["Name"] . "</td><td>" .$row["Price"] . "</td></tr>";
                                }
                                echo "<tr><td>Total</td><td>Rs " . $sum . "</td></tr>";
                                ?>
                            </tbody>
                            <?php
                            } else {
                            echo "<center class='jumbotron'style='margin-top: 200px;background-color: rgba(0, 0, 0, 0.7);'><h2 style='color:#ff0000;'>Add items to the cart first!</h1><p>Flat 10% OFF on premium brands</p><a href='product.php' class='btn btn-danger btn-lg active'>Shop Now</a></center>";
                            }
                            ?>
                            <?php
                            ?>
                        </table>
                    </div>
                </div>
            </div>
        </div>
        <?php 
        include("include/footer.php"); 
        ?>
    </body>
</html>
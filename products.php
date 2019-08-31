<?php
include 'include/common.php';
?>
<!DOCTYPE html>
<html>
    
    <head>
        <title>Products | Lifestyle Store</title>

        <!-- online links for bootstrap,jquery,css-->
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" >
       
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>

        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
        
        <!--css-->
        <style>
            footer{
	 padding: 10px 0; 
	 background-color: #101010; 
         color:#9d9d9d; 
	 bottom: 0; 
	 width: 100%;
         position: fixed;
            }
            .jumbotron{
                margin-top: 50px ;
            }
            .row{
                padding-left:13%;
                padding-right: 13%;
                }
            #bottom{
                 padding-bottom: 10%;   
               }
        </style>
    </head>
    <body>
       
        <?php
        include 'include/header.php';
        include 'include/check-if-added.php';
        ?>
        
        
        <div class="container">
            <div class="jumbotron">
                <h1>Welcome to our Lifestyle Store!</h1>
                <p> We have the best cameras, watches and shirts for you. No need to hunt around, we have all in one place.</p>
            </div>  
        </div>
        
     <div class="row row_style text-center">
      <div class = "col-sm-6 col-md-3">
       <div class = "thumbnail">
         <img src = "5.jpg" alt = "">
         <div class="caption">
                    <h2>Cannon EOS</h2>
                    <p>Price: Rs 36000.00</p>
         </div>
             <?php if (!isset($_SESSION['email'])) { ?>    
         <p><a href="login.php" role="button" class="btn btn-primary btn-block">Buy Now</a></p> 
             <?php            
             } else {        
                 if (check_if_added_to_cart(1)) { 
                     echo '<a href="#" class="btn btn-block btn-success" disabled>Added to cart</a>';        
                     } else {                                  
                         ?>                                
         <a href="cart-add.php?id=1" name="add" value="add" class="btn btn-block btn-primary">Add to cart</a>             
            <?php        
            }            
            }            
            ?> 
       </div>
      </div> 
         
         <div class = "col-sm-6 col-md-3">
       <div class = "thumbnail">
         <img src = "2.jpg" alt = "">
         <div class="caption">
                    <h2>Sony DSLR</h2>
                    <p>Price: Rs 40000.00</p>
         </div>
             <?php if (!isset($_SESSION['email'])) { ?>            
         <p><a href="login.php" role="button" class="btn btn-primary btn-block">Buy Now</a></p>    
             <?php     
             } else {     
                   if (check_if_added_to_cart(2)) { 
                       echo '<a href="#" class="btn btn-block btn-success" disabled>Added to cart</a>';           
                       } else {                                 
                           ?>
         <a href="cart-add.php?id=2" name="add" value="add" class="btn btn-block btn-primary">Add to cart</a>      
            <?php           
            }                
            }                
            ?> 
       </div>
      </div>
         
       <div class = "col-sm-6 col-md-3">
       <div class = "thumbnail">
         <img src = "3.jpg" alt = "">
         <div class="caption">
                    <h2>Sony DSLR</h2>
                    <p>Price: Rs 50000.00</p>
         </div>
          <?php if (!isset($_SESSION['email'])) { ?>            
         <p><a href="login.php" role="button" class="btn btn-primary btn-block">Buy Now</a></p>    
             <?php     
             } else {     
                   if (check_if_added_to_cart(3)) { 
                       echo '<a href="#" class="btn btn-block btn-success" disabled>Added to cart</a>';           
                       } else {                                 
                           ?>
         <a href="cart-add.php?id=3" name="add" value="add" class="btn btn-block btn-primary">Add to cart</a>      
            <?php           
            }                
            }                
            ?> 
       </div>
      </div>  
         <div class = "col-sm-6 col-md-3">
       <div class = "thumbnail">
         <img src = "4.jpg" alt = "">
         <div class="caption">
                    <h2>Olympus DSLR</h2>
                    <p>Price: Rs 80000.00</p>
         </div>
          <?php if (!isset($_SESSION['email'])) { ?>            
         <p><a href="login.php" role="button" class="btn btn-primary btn-block">Buy Now</a></p>    
             <?php     
             } else {     
                   if (check_if_added_to_cart(4)) { 
                       echo '<a href="#" class="btn btn-block btn-success" disabled>Added to cart</a>';           
                       } else {                                 
                           ?>
         <a href="cart-add.php?id=4" name="add" value="add" class="btn btn-block btn-primary">Add to cart</a>      
            <?php           
            }                
            }                
            ?> 
       </div>
      </div>
     
    </div>
        
    <div class="row row_style text-center">     
       <div class = "col-sm-6 col-md-3">
       <div class = "thumbnail">
         <img src = "9.jpg" alt = "">
         <div class="caption">
                    <h2>Titan Model #301</h2>
                    <p>Price: Rs 13000.00</p>
         </div>
          <?php if (!isset($_SESSION['email'])) { ?>            
         <p><a href="login.php" role="button" class="btn btn-primary btn-block">Buy Now</a></p>    
             <?php     
             } else {     
                   if (check_if_added_to_cart(5)) { 
                       echo '<a href="#" class="btn btn-block btn-success" disabled>Added to cart</a>';           
                       } else {                                 
                           ?>
         <a href="cart-add.php?id=5" name="add" value="add" class="btn btn-block btn-primary">Add to cart</a>      
            <?php           
            }                
            }                
            ?> 
       </div>
      </div> 
         
         <div class = "col-sm-6 col-md-3">
       <div class = "thumbnail">
         <img src = "10.jpg" alt = "">
         <div class="caption">
                    <h2>Titan Model #201</h2>
                    <p>Price: Rs 3000.00</p>
         </div>
          <?php if (!isset($_SESSION['email'])) { ?>            
         <p><a href="login.php" role="button" class="btn btn-primary btn-block">Buy Now</a></p>    
             <?php     
             } else {     
                   if (check_if_added_to_cart(6)) { 
                       echo '<a href="#" class="btn btn-block btn-success" disabled>Added to cart</a>';           
                       } else {                                 
                           ?>
         <a href="cart-add.php?id=6" name="add" value="add" class="btn btn-block btn-primary">Add to cart</a>      
            <?php           
            }                
            }                
            ?> 
       </div>
      </div>
         
       <div class = "col-sm-6 col-md-3">
       <div class = "thumbnail">
         <img src = "11.jpg" alt = "">
         <div class="caption">
                    <h2>HMT Milan</h2>
                    <p>Price: Rs 8000.00</p>
         </div>
          <?php if (!isset($_SESSION['email'])) { ?>            
         <p><a href="login.php" role="button" class="btn btn-primary btn-block">Buy Now</a></p>    
             <?php     
             } else {     
                   if (check_if_added_to_cart(7)) { 
                       echo '<a href="#" class="btn btn-block btn-success" disabled>Added to cart</a>';           
                       } else {                                 
                           ?>
         <a href="cart-add.php?id=7" name="add" value="add" class="btn btn-block btn-primary">Add to cart</a>      
            <?php           
            }                
            }                
            ?> 
       </div>
      </div>  
         <div class = "col-sm-6 col-md-3">
       <div class = "thumbnail">
         <img src = "12.jpg" alt = "">
         <div class="caption">
                    <h2>Faber Luba #111</h2>
                    <p>Price: Rs 18000.00</p>
         </div>
          <?php if (!isset($_SESSION['email'])) { ?>            
         <p><a href="login.php" role="button" class="btn btn-primary btn-block">Buy Now</a></p>    
             <?php     
             } else {     
                   if (check_if_added_to_cart(8)) { 
                       echo '<a href="#" class="btn btn-block btn-success" disabled>Added to cart</a>';           
                       } else {                                 
                           ?>
         <a href="cart-add.php?id=8" name="add" value="add" class="btn btn-block btn-primary">Add to cart</a>      
            <?php           
            }                
            }                
            ?> 
       </div>
      </div>
     </div>    
   
   
        <div class="row row_style text-center" id="bottom">     
       <div class = "col-sm-6 col-md-3">
       <div class = "thumbnail">
         <img src = "8.jpg" alt = "">
         <div class="caption">
                    <h2>H&W</h2>
                    <p>Price: Rs 800.00</p>
         </div>
          <?php if (!isset($_SESSION['email'])) { ?>            
         <p><a href="login.php" role="button" class="btn btn-primary btn-block">Buy Now</a></p>    
             <?php     
             } else {     
                   if (check_if_added_to_cart(9)) { 
                       echo '<a href="#" class="btn btn-block btn-success" disabled>Added to cart</a>';           
                       } else {                                 
                           ?>
         <a href="cart-add.php?id=9" name="add" value="add" class="btn btn-block btn-primary">Add to cart</a>      
            <?php           
            }                
            }                
            ?> 
       </div>
      </div> 
         
         <div class = "col-sm-6 col-md-3">
       <div class = "thumbnail">
         <img src = "6.jpg" alt = "">
         <div class="caption">
                    <h2>Luis Phil</h2>
                    <p>Price: Rs 1000.00</p>
         </div>
          <?php if (!isset($_SESSION['email'])) { ?>            
         <p><a href="login.php" role="button" class="btn btn-primary btn-block">Buy Now</a></p>    
             <?php     
             } else {     
                   if (check_if_added_to_cart(10)) { 
                       echo '<a href="#" class="btn btn-block btn-success" disabled>Added to cart</a>';           
                       } else {                                 
                           ?>
         <a href="cart-add.php?id=10" name="add" value="add" class="btn btn-block btn-primary">Add to cart</a>      
            <?php           
            }                
            }                
            ?> 
       </div>
      </div>
         
       <div class = "col-sm-6 col-md-3">
       <div class = "thumbnail">
         <img src = "13.jpg" alt = "">
         <div class="caption">
                    <h2>John Zok</h2>
                    <p>Price: Rs 1500.00</p>
         </div>
          <?php if (!isset($_SESSION['email'])) { ?>            
         <p><a href="login.php" role="button" class="btn btn-primary btn-block">Buy Now</a></p>    
             <?php     
             } else {     
                   if (check_if_added_to_cart(11)) { 
                       echo '<a href="#" class="btn btn-block btn-success" disabled>Added to cart</a>';           
                       } else {                                 
                           ?>
         <a href="cart-add.php?id=11" name="add" value="add" class="btn btn-block btn-primary">Add to cart</a>      
            <?php           
            }                
            }                
            ?> 
       </div>
      </div>  
         <div class = "col-sm-6 col-md-3">
       <div class = "thumbnail">
         <img src = "14.jpg" alt = "">
         <div class="caption">
                    <h2>Jhalsani</h2>
                    <p>Price: Rs 1300.00</p>
         </div>
          <?php if (!isset($_SESSION['email'])) { ?>            
         <p><a href="login.php" role="button" class="btn btn-primary btn-block">Buy Now</a></p>    
             <?php     
             } else {     
                   if (check_if_added_to_cart(12)) { 
                       echo '<a href="#" class="btn btn-block btn-success" disabled>Added to cart</a>';           
                       } else {                                 
                           ?>
         <a href="cart-add.php?id=12" name="add" value="add" class="btn btn-block btn-primary">Add to cart</a>      
            <?php           
            }                
            }                
            ?> 
       </div>
      </div>
     </div>      
        
        <!--footer-->
        <?php
        include 'include/footer.php';
        ?>
        <!--footer end-->
        
    </body>
</html>
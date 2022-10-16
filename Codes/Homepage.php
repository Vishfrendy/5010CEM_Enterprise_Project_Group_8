<?php 

session_start();

if (!isset($_SESSION['username'])) {
    header("Location: login.php");
}

?>

<!DOCTYPE html>
<html lang="en">
    <head>
            <meta charset="utf-8">
            <title>Homepage</title>
            <link rel="stylesheet" href="Homepage.css">
    </head>
    
    <body>
        <div class="banner">
            <div class="navbar">
                <img src="Logo.png" class="logo" onclick="document.location='Homepage.php'">        
                <ul>
                    <li><a href="ContactUs.php">Contact Us</a></li>
					<li><a href="AboutUs.php">About Us</a></li>
					<li><a href="Product.php">Product</a></li>
					<li><a href="cart.php">Cart</a></li>
                </ul>
            </div>
            
            <div class="content">
                <h1>Welcome to Online GROCERY</h1>
                <p>Online Grocery makes life better and more convenient.</p>
				<div>
					<button type="button"  onclick="document.location='Product.php'"><span></span>SHOP NOW</button>
				</div>
			</div>
        </div>
    </body>
	
</html>
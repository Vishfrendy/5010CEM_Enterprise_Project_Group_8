<?php 
if(isset($_POST['submit'])){
    $name = $_POST['name'];
    $email = $_POST['email'];
    $message = $_POST['message'];
    
    $db=mysqli_connect("localhost","root","","grocery");

    if(empty($_POST['name'])){
        echo 'You did not enter name';
    }
    elseif(empty($_POST['email'])){
        echo 'You did not enter email address';
    }
    elseif(empty($_POST['message'])){
        echo 'You did not enter a message';
    }
    else{
        header('location: index.php');

		$sql = "INSERT INTO contact (name,email,message) VALUES 
		('$name','$email','$message')";

		mysqli_query($db,$sql);
    }
}
?>

<!DOCTYPE html>

<html lang="en" dir="ltr">
	<head>
		<meta charset="UTF-8">
		<title> ContactUs form </title>
		<link rel="stylesheet" href="Contact.css">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
	</head>
	
	<body>
		<div class="container">
			<div class="content">
				<div class="image-box">
					<img src="Images/Contact.jpg" alt="">
				</div>
				
				<form action="#" class="contact" method="post">
				<div class="topic">Send us a message</div>
					<div class="input-box">
						<input type="text" id="text" name="name" required>
						<label>Enter your name</label>
					</div>
					
					<div class="input-box">
						<input type="email" id="email" name="email" required>
						<label>Enter your email</label>
					</div>
					
					<div class="input-box">
						<input type="message" id="message" name="message" required>
						<label>Enter your message</label>
					</div>
					
					<div class="input-box">
						<input type="submit" name="submit" value="Send Message">
					</div>
				</form>
			</div>
		</div>
	</body>
</html>

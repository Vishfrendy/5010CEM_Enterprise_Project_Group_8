<?php
if(isset($_POST['submit'])){
    $email = $_POST['email'];
    $password = $_POST['password'];
    $c_password =$_POST['c_password'];

    $db=mysqli_connect("localhost","root","","grocery");

    if(empty($_POST['email'])||empty($_POST['password'])){
		echo "<script>alert('Please fill in all the details');window.location='Register.php';</script>";
    }
    elseif(empty($_POST['password'])){
        echo "<script>alert('You did not enter password');window.location='Register.php';</script>";
    }
    elseif(empty($_POST['c_password'])){
        echo "<script>alert('You did not enter password');window.location='Register.php';</script>";

    }elseif($_POST['password'] !== $_POST['c_password']){
		echo "<script>alert('Both password should be the same');window.location='Register.php';</script>";
    }else{
        echo "<script>alert('Your account has been successfully created!');window.location='Login.php';</script>";

		$sql = "INSERT INTO register (email,password,c_password) VALUES 
		('$email','$password','$c_password')";

		mysqli_query($db,$sql);
    }
}
?>

<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="UTF-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<link href='https://unpkg.com/boxicons@2.0.9/css/boxicons.min.css' rel='stylesheet'>
		<link rel="stylesheet" href="Register.css">
		<title>Register form</title>
	</head>
		
	<body>
		<div class="container">
			<form action="" class="register" method="post">
				<h2 class="title">Register your account</h2>
				<div class="form-group">
					<label for="email">Email</label>
					<div class="input-group">
						<input type="email" id="email" name="email" placeholder="Email address">
						<i class='bx bx-envelope'></i>
					</div>
				</div>
				
				<div class="form-group">
					<label for="password">Password</label>
					<div class="input-group">
						<input type="password" pattern=".{8,}" id="password" name="password" placeholder="Your password" title="Password should be more than 8 characters">
						<i class='bx bx-lock-alt' ></i>
					</div>
					<span class="help-text">At least 8 characters</span>
				</div>
				
				<div class="form-group">
					<label for="confirm-pass">Confirm password</label>
					<div class="input-group">
						<input type="password" pattern=".{8,}"id="confirm-pass" name="c_password" placeholder="Password should be same as above">
						<i class='bx bx-lock-alt' ></i>
					</div>
					<span class="help-text">Confirm password must be same with password</span>
				</div>
				
				<button type="submit" class="btn-submit" name="submit">Register</button>
				
				<p>I already have an account. <a href="Login.php" >Login</a></p>
			</form>
		</div>
	</body>
</html>
<?php

if(isset($_POST['submit'])){
      $email=$_POST['email'];
      $password=$_POST['password'];

      $db = mysqli_connect('localhost','root','','grocery');

      $sql = "SELECT * FROM register WHERE email='$email' AND password=
             '$password'";

    $result=mysqli_query($db,$sql);

    $row = mysqli_fetch_array($result);

    if(empty($_POST['email'])||empty($_POST['password'])){
      echo "<script>alert('Please fill in all the details');window.location='login.php';</script>";
        
    }else if($row['email']==$email&&$row['password']==$password){
      echo "<script>alert('You have successfully logged in');window.location='login.php';</script>";
      header('location: index.html');
        
    }else{
      echo "<script>alert('Wrong email or password');window.location='login.php';</script>";
    }
     
}
?>


<!DOCTYPE html>
<html lang="en">

<head>
        <title>Login Page</title>
        <meta charset="utf-8">
        <link href='https://unpkg.com/boxicons@2.0.9/css/boxicons.min.css' rel='stylesheet'>
        <link rel="stylesheet" href="login.css">
    
</head>
    
    <body>
        <div class="container">
            <form action="" class="login active" method="post">
                <h2 class="title">Login with your account</h2>
			<div class="form-group">
				<label for="email">Email</label>
				<div class="input-group">
					<input type="email" id="email" name="email" placeholder="Email address" required/>
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
			<button type="submit" class="btn-submit" name="submit">Login</button>
                
            <p>Login as Admin. <a href="log_admin.php"> Log</a></p>
			<p>I don't have an account. <a href="register.php">Register</a></p>
            </form>
    
    </div>
        
    </body>
</html>
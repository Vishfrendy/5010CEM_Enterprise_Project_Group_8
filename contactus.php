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
        header('location: homepage.php');
    

    $sql = "INSERT INTO contact (name,email,message) VALUES 
    ('$name','$email','$message')";

    mysqli_query($db,$sql);
    }
}

?>
<?php

include 'components/connect.php';

session_start();

if(isset($_SESSION['user_id'])){
   $user_id = $_SESSION['user_id'];
}else{
   $user_id = '';
};

?>

<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
   <title>Homepage</title>
   
   <!-- font awesome cdn link  -->
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css">

   <!-- custom css file link  -->
   <link rel="stylesheet" href="css/style.css">

</head>
<body style="background: url(Img/Background.jpg);">
   
<?php include 'components/user_header.php'; ?>
         
    
  <div class="container">
    <div class="content">
      <div class="left-side">
        <div class="address details">
          <i class="fas fa-map-marker-alt"></i>
          <div class="topic">Address</div>
          <div class="text-one">21 Malaysia Rd. Unit 18.</div>
        </div>
        <div class="phone details">
          <i class="fas fa-phone-alt"></i>
          <div class="topic">Phone</div>
          <div class="text-one">(010) 777 - 5031</div>
        </div>
        <div class="email details">
          <i class="fas fa-envelope"></i>
          <div class="topic">Email</div>
          <div class="text-one">infogrocery@gmail.com</div>
          
        </div>
      </div>
      <div class="right-side">
        <div class="topic-text">Need to get in touch?</div>
          <p><b>Have a question you would like to ask? We may already have the answer for you! Check our FAQS, for a quick and easy way to find the answers to your question.</b></p>
          <br>
          <p><b>If you still want to contact us, please fill-in the form below:</b></p>
      <form action="#" class="contact" method="post">
        <div class="input-box">
          <input type="text" id="name" name="name" placeholder="Enter your name" required>
        </div>
        <div class="input-box">
          <input type="text" id="email" name="email" placeholder="Enter your email" required>
        </div>
        <div class="input-box message-box">
          <input type="text" id="message" name="message" placeholder="Enter your message">
        </div>
        <div class="button">
          <input type="submit" name="submit" value="Send Now" > <br>
          <a href="https://wa.link/1bam3x"><div class="whatbtn">Click me to Whatsapp Us</div></i></a>
        </div>
      </form>
    </div>
    </div>
  </div>
    
    <script src="js/script.js"></script>
</body>
</html>
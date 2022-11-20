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
    
    <section class="header-section">
        <div class="content">
            <h1>Welcome to <span style="color:gold">FRESH2Go</span></h1>
            <p><b>FRESH2Go is bound to make shopping, dining, socialising and a myriad of recreational activities more fun and fulfilling. Featuring 9 levels with a total of 350 retail stores, this haven houses anchor tenants such as FRESH2GO Lifestyle Hypermarket for fresh groceries, local and international cooking ingredients.</b></p>
            
            <button type="button"><a href="shop.php"><span style="color:red">SHOP NOW</span></a></button>
            
        </div>
    </section>     
            
           <script src="js/script.js"></script> 
     </body>
</html>
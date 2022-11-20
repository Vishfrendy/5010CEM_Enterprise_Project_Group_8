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
      
      <div class="about-section">
        <div class="inner-width">
          <h2>About Us</h2>
          <div class="border"></div>
          <div class="about-section-row">
            <div class="about-section-col">
              <div class="about">
                <p>
                    As a leading grocery store in Malaysia, with more than 10,000 colleagues, we aim to serve customers every day with affordable, healthy and sustainable food to help them enjoy a better quality of life and an easier way of living.
                </p>
                  
                <p><b>
                  Our service is delivering Filipino products and food essentials to residents across Canada and United States.
                </b></p>
                  
                  <p>Grocery Delivery was born out of necessity because of the Covid-19 pandemic. Our core business, Party Rentals, is on hold for now as large gatherings such as parties and conferences are all cancelled. So we saw an opportunity to use our delivery van to help out the community, who, like us, are under lockdown and may find it difficult to get out to the grocery store and brave long lines in order to obtain food to eat and other essentials. This is particularly a challenge for our seniors and those of you with small children. Grocery delivers your orders right to your door with no contact with our delivery driver. We embody a strict safety policy ensuring we are always wearing face masks and gloves when delivering groceries, while constantly sanitizing our vehicle.</p>
                
                  <div class="border"></div>
                  
                  <h3>Connect With Us</h3>
                  
                  <p>Phone: <br><b><mark>(016) 533 -333</mark></b></p>
                  <p>Email: <br><b><mark>infogrocery@gmail.com</mark></b></p>
                  <p>Location: <br> <b><mark>21 Malaysia Rd. Unit 18.</mark></b></p>
              </div>
            </div>
</div>
      </div>
            
          </div>
            <div class="about-section">
        <div class="inner-width">
            <h1>Our Delivery</h1>
          <div class="border"></div>
            <div class="about-section-row">
            <div class="about-section-col">
              <div class="about">
                <p>
                    Our scheduled delivery is <mark>2-3 days</mark> upon confirmation of your order. <br>
                    We will contact you to provide details of the day and time of your delivery. Our Morning drop-off is between <mark>9:00-12:00</mark> and Afternoon drop-off is between <mark>1:00- 6:00 pm.</mark> Drop-off is to your door or curb side.
                </p>
              </div>
            </div>
            
            
          </div>
            
            <h1>Our Covid - 19 Policy</h1>
          <div class="border"></div>
            <div class="about-section-row">
            <div class="about-section-col">
              <div class="about">
                <p>
                    The health and safety of our customers and staff is our top priority. FRESH2Go Grocery is taking the following steps to mitigate the spread of the virus:
                </p>
                  
                  <ul>
                      <li>We will wear <mark>face masks</mark> and <mark>gloves</mark> at all times while preparing and packing your <mark>order.</mark></li>
                    <li>
                        We will practice <mark>proper hand washing.</mark>
                    </li>
                      
                      <li>
                          Our delivery van will be <mark>constantly sanitized throughout the day.</mark>
                      </li>
                      
                      <li>
                          Our staff will <mark>disinfect their hands </mark> before and after we pick-up your <mark>groceries.</mark>
                      </li>
                      
                      <li>
                          We will maintain <mark>social distancing </mark> by completing payments online or over the phone, and your goods will be dropped off at your door or at the curb side.
                      </li>
                  </ul>
              </div>
            </div>
              
            </div>
                </div>
          </div>
      
    <script src="js/script.js"></script>
  </body>
</html>
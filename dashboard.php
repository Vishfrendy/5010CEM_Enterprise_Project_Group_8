<?php

include '../components/connect.php';

session_start();

$admin_id = $_SESSION['admin_id'];

if(!isset($admin_id)){
   header('location:admin_login.php');
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>dashboard</title>
   <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>

   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css">

   <link rel="stylesheet" href="../css/admin_style.css">

</head>
<body>
   <body style="background: url(Img/Background.jpg);">

<?php include '../components/admin_header.php'; ?>

<section class="dashboard">

    <br><br><br><br><br><br><br><br><br><br>
    
   <h1 class="heading">Admin dashboard</h1>

   <div class="box-container">


      <div class="box">
         <?php
            $total_pendings = 0;
            $select_pendings = $conn->prepare("SELECT * FROM `orders` WHERE payment_status = ?");
            $select_pendings->execute(['pending']);
            if($select_pendings->rowCount() > 0){
               while($fetch_pendings = $select_pendings->fetch(PDO::FETCH_ASSOC)){
                  $total_pendings += $fetch_pendings['total_price'];
               }
            }
         ?>
         <h3><span>RM</span><?= $total_pendings; ?><span></span></h3>
         <button style="background:yellow;font-size: 20px;">total pendings</button>
         <a href="placed_orders.php" class="btn">Check the orders</a>
      </div>

      <div class="box">
         <?php
            $total_completes = 0;
            $select_completes = $conn->prepare("SELECT * FROM `orders` WHERE payment_status = ?");
            $select_completes->execute(['completed']);
            if($select_completes->rowCount() > 0){
               while($fetch_completes = $select_completes->fetch(PDO::FETCH_ASSOC)){
                  $total_completes += $fetch_completes['total_price'];
               }
            }
         ?>
         <h3><span>RM</span><?= $total_completes; ?><span></span></h3>
         <button style="background:yellow;font-size: 20px;">completed orders</button>
         <a href="placed_orders.php" class="btn">View Check Orders</a>
      </div>

      <div class="box">
         <?php
            $select_orders = $conn->prepare("SELECT * FROM `orders`");
            $select_orders->execute();
            $number_of_orders = $select_orders->rowCount()
         ?>
         <h3><?= $number_of_orders; ?></h3>
         <button style="background:yellow;font-size: 20px;">orders placed</button>
         <a href="placed_orders.php" class="btn">Check Total Orders</a>
      </div>

      <div class="box">
         <?php
            $select_products = $conn->prepare("SELECT * FROM `products`");
            $select_products->execute();
            $number_of_products = $select_products->rowCount()
         ?>
         <h3><?= $number_of_products; ?></h3>
         <button style="background:yellow;font-size: 20px;">products added</button>
         <a href="products.php" class="btn">List of products</a>
      </div>

      <div class="box">
         <?php
            $select_users = $conn->prepare("SELECT * FROM `users`");
            $select_users->execute();
            $number_of_users = $select_users->rowCount()
         ?>
         <h3><?= $number_of_users; ?></h3>
         <button style="background:yellow;font-size: 20px;">normal users</button>
         <a href="users_accounts.php" class="btn">View users & details</a>
      </div>



   </div>

</section>










<!--

<script src="../js/admin_script.js"></script>
   
   <?php
   function OpenCon(){
      $host = "localhost";
      $user = "root";
      $password = "";
      $database = "topsalesexample";
      $conn = new mysqli($host, $user, $password,$database) or die("Connect failed: %s\n". $conn -> error);
   }
    
   $dataPoints = array(
      array("label"=> "Cabbage", "y"=> 1100),
      array("label"=> "Eggplant", "y"=> 1800),
      array("label"=> "Cauliflower", "y"=> 1300),
      array("label"=> "Brocoli", "y"=> 1400),
      array("label"=> "Chillies", "y"=> 500),
      array("label"=> "Bok Choy", "y"=> 900),
      array("label"=> "Asparagus", "y"=> 2700),
      array("label"=> "Chicken", "y"=> 3000),
      array("label"=> "Salmon", "y"=> 3900),
      array("label"=> "Beef", "y"=> 3500)
   );
   
   sort($dataPoints);   
?>

<!DOCTYPE HTML>
<html>
   <head>
      <script>
         window.onload = function () {
            var chart = new CanvasJS.Chart("chartContainer", {
               animationEnabled: true,
               theme: "light2",
               title: {
                  text: "Top 10 Sales Of The Week"
               },
               axisY: {
                  title: "Number of Sales (RM)"
               },
               data: [{
                  type: "column",
                  dataPoints: <?php echo json_encode($dataPoints, JSON_NUMERIC_CHECK); ?>
               }]
            });
            chart.render();
         }
      </script>
   </head>
   -->
   
   <body>
      <div id="chartContainer" style="height: 200px; width: 100%;"></div>
      <script src="https://canvasjs.com/assets/script/canvasjs.min.js"></script>
   </body>
</html>    

<?php
$con = mysqli_connect("localhost","root","","grocery");
if(!$con){
echo "Problem in database connection..." .mysqli_error();
}else{
$sql = "SELECT * FROM sales";
$result = mysqli_query($con,$sql);
$chart_data = "";
while($row = mysqli_fetch_array($result)){
$name[] = $row['name'];
$quantity[] = $row['quantity'];
}
}
?>

<head>
   <meta charset="UTF-8">
   <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
   <link rel="stylesheet" href="assets/bootstrap/css/bootstrap.min.css">
</head>

<body>
   <div class="row">
      <div class="col-md-8 offset-md-2">
         <div class="card">
         <div class="card-header bg">
            <h1>Total Sales</h1>
         </div>
            <div class="card-body">
            <canvas id="chartjs_bar"></canvas>
            </div>
         </div>
      </div>
   </div>
      <script src="assets/js/jquery.mins.js"></script>
      <script src="assets/bootstrap/js/bootstrap.min.js"></script>
      <script src="//cdnjs.cloudflare.com/ajax/libs/Chart.js/2.4.0/Chart.min.js"></script>
      

<script type="text/javascript">
var ctx = document.getElementById("chartjs_bar").getContext('2d');
var myChart = new Chart(ctx,{
type: 'bar',
data: {
labels:<?php echo json_encode($name); ?>,
datasets: [{
backgroundcolor: [
"#ffd322",
"#5945fd",
"#25d5f2",
"#2ec551",
"#ff344e",
],
data: <?php echo json_encode($quantity);?>
}]
},
options:{
legend: {
display:true,
position:'bottom',
labels: {
fontColor: '#71748d',
fontFamily: 'Circular Std Book',
fontSize: 14,
}
},
}
});
</script>
</body>
</body>


</html>
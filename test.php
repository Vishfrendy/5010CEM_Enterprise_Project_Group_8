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
	
	<body>
		<div id="chartContainer" style="height: 500px; width: 100%;"></div>
		<script src="https://canvasjs.com/assets/script/canvasjs.min.js"></script>
	</body>
</html>     
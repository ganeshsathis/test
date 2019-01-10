<?php
 
$dataPoints = array(
	array("y" => 50, "label" => "Sunday"),
	array("y" => 200, "label" => "Monday"),
	array("y" => 100, "label" => "Tuesday"),
	array("y" => 300, "label" => "Wednesday"),
	array("y" => 500, "label" => "Thursday"),
	array("y" => 350, "label" => "Friday"),
	array("y" => 600, "label" => "Saturday")
);
 
?>
<!DOCTYPE HTML>
<html>
<head>
<script>
window.onload = function () {
 
var chart = new CanvasJS.Chart("chartContainer", {
	title: {
		text: "canvas js display bank transcation"
	},
	axisY: {
		title: "Number of amt taken"
	},
	data: [{
		type: "line",
		dataPoints: <?php echo json_encode($dataPoints, JSON_NUMERIC_CHECK); ?>
	}]
});
chart.render();
 
}
</script>
</head>
<body>
<div id="chartContainer" style="height: 370px; width: 100%;"></div>
<script src="https://canvasjs.com/assets/script/canvasjs.min.js"></script>
</body>
</html>                    
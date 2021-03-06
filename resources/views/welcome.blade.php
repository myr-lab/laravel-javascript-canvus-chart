<!DOCTYPE HTML>
<html>
<head>

<script type="text/javascript">

window.onload = function () {

	var today =  <?php echo json_encode($today);  ?>;
	var yesterday =  <?php echo json_encode($yesterday);  ?>;
	var week =  <?php echo json_encode($week);  ?>;

    var chart = new CanvasJS.Chart("chartContainer", {

	theme: "light1", // "light2", "dark1", "dark2"
	animationEnabled: false, // change to true		
	title:{
		text: "Basic Column Chart"
	},
	data: [
	{
		type: "pie",
		dataPoints: [
			{ label: "Today",  y: today  },
			{ label: "Yesterday", y: yesterday  },
			{ label: "Last week", y: week  },
		]
	}
	]
});
chart.render();

}
</script>
</head>
<body>
<div id="chartContainer" style="height: 370px; width: 100%;"></div>
<script src="https://canvasjs.com/assets/script/canvasjs.min.js"> </script>
</body>
</html>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<title><?= $site_name; ?></title>
	<meta name="description" content="">
	<meta name="author" content="">
	<meta name="viewport" content="width=device-width, initial-scale=1">

	<link href="https://fonts.googleapis.com/css?family=Raleway" rel="stylesheet"> 

	<link rel="stylesheet" href="/public/css/normalize.css">
	<link rel="stylesheet" href="/public/css/skeleton.css">

	<link rel="icon" type="image/png" href="public/img/favicon.png">

</head>
<body>
  	<div class="container about">
  		<?php foreach(Flight::flash()->all() as $flash):?>
  			<div class="row">
		    	<span class="<?= $flash['type']; ?>"><?= $flash['message'] ?></span>
		    </div>
		<?php endforeach; ?>
		<?php Flight::flash()->clear(); ?>

		<?= $body_content; ?>
  	</div>
  	<script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.3.0/Chart.min.js"></script>
  	<script>
  		var ctx = document.getElementById("chart-category");
  		//Chart.defaults.global.defaultFontFamily = 'Raleway';
		//Chart.defaults.global.defaultFontSize ='13px';
  		var myChart = new Chart(ctx, {
		    type: 'horizontalBar',
		    data: {
		        labels: ["Platinum - 20+ Girls","Gold - 15 Girls","Silver - 10 Girls","Bronze - 3 Girls","Blue - 1 Girl","Other"],
		        datasets: [{
		            label: 'Category',
		            data: [5000000,3750000,2500000,750000,250000,5000],
		            backgroundColor: [
		                'rgba(90, 89, 89, 0.8)',
		                'rgba(100, 84, 0, 0.8)',
		                'rgba(75, 75, 75, 0.8)',
		                'rgba(80, 50, 20, 0.8)',
		                'rgba(0, 0, 100, 0.8)',
		                'rgba(128, 128, 0, 0.8)'
		            ]
		        }]
		    },
		    options: {
		    	legend:{
		    		display: false
		    	},
		        scales: {
		        	xAxes: [{
		            	display: false,
		            	ticks:{
		            		fontFamily: "Raleway",
		            	}
		            }],
		            yAxes: [{
		            	display: true,
		                ticks: {
		                    beginAtZero:true,
		                    fontFamily: "Raleway",
		                }
		            }]
		        }
		    }
		});
  	</script>
</body>
</html>
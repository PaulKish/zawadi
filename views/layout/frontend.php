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
	<script src="https://code.jquery.com/jquery-1.12.4.min.js"></script>
</head>
<body>
  	<div class="container about">
  		<div class="row">
		  	<div class="twelve columns">
		  		<a href="http://zawadiafrica.org">
		  			<img class="u-max-full-width" src="public/img/zawadi_logo.png">
		  		</a>
		  		<ul class="menu u-max-full-width nav">
		  			<li><a class="menu-btn active" href="#ourStory">Our Story</a></li>
		  			<li><a class="menu-btn" href="#sponsershipCategory">Sponsorship Categories</a></li>
		  			<li><a class="menu-btn" href="#sponsershipCard">Sponsor a Girl</a></li>
		  			<li><a class="menu-btn" href="#bankDetails">Bank Details</a></li>
		  		</ul>
		  	</div>
		</div>
		<hr>

  		<?php foreach(Flight::flash()->all() as $flash):?>
  			<div class="alert <?= $flash['type']; ?>">
		    	<span><?= $flash['message'] ?></span>
		    </div>
		<?php endforeach; ?>
		<?php Flight::flash()->clear(); ?>

		<?= $body_content; ?>
  	</div>
  	<script type="text/javascript" src="https://www.amcharts.com/lib/3/amcharts.js"></script>
	<script type="text/javascript" src="https://www.amcharts.com/lib/3/serial.js"></script>
  	<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.15.0/jquery.validate.min.js"></script>
  	<script src="/public/js/main.js"></script>
</body>
</html>
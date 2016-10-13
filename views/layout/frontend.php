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
  		<div class="row nav">
			<div class="four columns">
		  		<a href="http://zawadiafrica.org">
		  			<img class="u-max-full-width" src="public/img/zawadi_logo.png">
		  		</a>
		  	</div>
		  	<div class="eight columns">
		  		<ul class="menu u-pull-right">
		  			<li><a class="menu-btn active" href="#ourStory">Our Story</a></li>
		  			<li><a class="menu-btn" href="#sponsershipCategory">Sponsership Categories</a></li>
		  			<li><a class="menu-btn" href="#sponsershipCard">Sponsor a Girl</a></li>
		  			<li><a class="menu-btn" href="#bankDetails">Bank Details</a></li>
		  		</ul>
		  	</div>
		</div>
		<hr>

  		<?php foreach(Flight::flash()->all() as $flash):?>
  			<div class="row">
		    	<span class="<?= $flash['type']; ?>"><?= $flash['message'] ?></span>
		    </div>
		    <br>
		<?php endforeach; ?>
		<?php Flight::flash()->clear(); ?>

		<?= $body_content; ?>
  	</div>
  	<script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.3.0/Chart.min.js"></script>
  	<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.15.0/jquery.validate.min.js"></script>
  	<script src="/public/js/main.js"></script>
</body>
</html>
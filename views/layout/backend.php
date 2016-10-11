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

	<link rel="icon" type="image/png" href="/public/img/favicon.png">

</head>
<body>
  	<div class="container about">
  		<div class="row">
			<div class="four columns">
		  		<a href="www.zawadiafrica.org">
		  			<img class="u-max-full-width" src="public/img/zawadi_logo.png">
		  		</a>
		  	</div>
		</div>
		<hr>

  		<?php foreach(Flight::flash()->all() as $flash):?>
  			<div class="row">
		    	<span class="<?= $flash['type']; ?>"><?= $flash['message'] ?></span>
		    </div>
		<?php endforeach; ?>
		<?php Flight::flash()->clear(); ?>

		<?= $body_content; ?>
  	</div>
</body>
</html>
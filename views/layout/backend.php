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

	<link rel="stylesheet" href="https://cdn.datatables.net/1.10.12/css/jquery.dataTables.min.css">

	<link rel="icon" type="image/png" href="/public/img/favicon.png">
	<script src="https://code.jquery.com/jquery-1.12.4.min.js"></script>
</head>
<body>
  	<div class="container about">
  		<div class="row">
			<div class="four columns">
		  		<a href="http://zawadiafrica.org">
		  			<img class="u-max-full-width" src="/public/img/zawadi_logo.png">
		  		</a>
		  	</div>
		  	<div class="eight columns">
		  		<?php if(Flight::auth()->isLogged()): ?>
		  			<span class="u-pull-right">
		  				<a href="/">Main site</a> |
		  				<a href="/logout">Logout</a>
		  			</span>
			  	<?php else: ?>
			  		<a class="u-pull-right" href="/">Main site</a>
			  	<?php endif; ?>
		  	</div>
		</div>
		<hr>

  		<?php foreach(Flight::flash()->all() as $flash):?>
  			<div class="row">
		    	<span class="<?= $flash['type']; ?>"><?= $flash['message'] ?></span>
		    	<br>
		    </div>
		<?php endforeach; ?>
		<?php Flight::flash()->clear(); ?>

		<?= $body_content; ?>
  	</div>
  	<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.15.0/jquery.validate.min.js"></script>
  	<script src="https://cdn.datatables.net/1.10.12/js/jquery.dataTables.min.js"></script>
  	<script type="text/javascript">
  		$(document).ready(function() {
		    $('#donor-list').DataTable( {
		        "pagingType":"full_numbers"
		    });

		    $("#loginForm").validate(); // validation for login
		});
  		

  	</script>
</body>
</html>
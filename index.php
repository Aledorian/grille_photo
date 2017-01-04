<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<!-- Bootstrap css  -->
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
		<!-- Custom css -->
		<link rel="stylesheet" href="css/style.css" media="screen">
		<title></title>
	</head>
	<body>
		<div class="container-fluid">
			<div class="row">
				<?php
				for ($i=1; $i<=12 ; $i++) {
					echo '<div class="col-md-3 col-sm-4 col-xs-6">
					<img class="img-responsive center-block" src="images/img'.$i.'.jpg"/>
					</div>';
				}
				?>
			</div>
		</div>
	</body>
</html>

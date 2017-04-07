
<html>
	<head>
		
		<meta charset="utf-8" />
		<title>SE HABLA IDIOMAS</title>
		<meta name="viewport" content="width=device-width, initial-scale=1.0"> 
		<link href="bootstrap/css/bootstrap.min.css" rel="stylesheet">
		<link rel="stylesheet" href="style/index.css"/>

	</head>

	<body>

		<?php include("navbar.php"); ?>
		<div class="container-fullwidth">
			<div class="row">
				<div class="col-lg-offset-4 col-sm-4 form_section">

					<form  action="form_first_choice.php" method="POST">
						<div class="row title">
							<div class="col-sm-12">
								<h3>Choose your method :</h3>
							</div>
						</div>

						<div class="radio">
							<div class="row type">
								<div class="col-lg-offset-1 col-sm-6">
									<label for="type">By type</label>
								</div>
								<div class="col-sm-3">
									<input id="type" type="radio" name="radio" value="type">
								</div>
							</div>

							<div class="row theme">
								<div class="col-lg-offset-1 col-sm-6">
									<label for="theme">By theme</label>
								</div>
								<div class="col-sm-3">
									<input id="theme" type="radio" name="radio" value="theme">
								</div>
							</div>

						</div>

						<button type="submit" class="btn btn-md btn-default submit_style" value="Enter">
							<span class="glyphicon glyphicon-ok"></span> Submit
						</button>

					</form>
				</div>
			</div>
		</div>

		<?php include("footer.php"); ?>

	</body>
</html>



<?php
//include the database connectivity setting
include("inc/dbconn.php"); ?>
<!DOCTYPE html>
<html lang="en">

<head>
	<title>ASDF Palace Database</title>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" href="css/bootstrap.min.css">
	<!-- Loading Flat UI Pro -->
	<link href="css/flat-ui-pro.css" rel="stylesheet">
	<link rel="shortcut icon" href="img/favicon.ico">

</head>

<body>

	<?php
	//include the navigation bar
	include("inc/navbar.php"); ?>

	<div class="container">
		<br>
		<br>

		<div class="row">

			<div class="col-md-9" name="maincontent" id="maincontent">

				<div id="exercise" name="exercise" class="panel panel-info">
					<div class="panel-heading">
						<h5>ASDF Palace Database</h5>
					</div>
					<div class="panel-body">
						<!-- ***********Edit your content STARTS from here******** -->
						<form role="form" name="" action="indanger-res.php" method="GET">
							Select a Customer <br>
							<select class="form-control" name="nfcid">
								<option value=''> -- </option>
								<?php
								$query = "SELECT nfc_id FROM customer";
								$qr = mysqli_query($db, $query);
								if ($qr == false) {
									echo ("Query cannot be executed:View cannot be created!<br>");
									echo ("SQL Error : " . mysqli_error($db));
								}
								if (mysqli_num_rows($qr) == 0) {
									echo ("Sorry, seems that there are no customers recorded yet...<br>");
								} //end no record
								else {
									while ($rekod = mysqli_fetch_array($qr)) {
										$nfc_id = $rekod['nfc_id'];
										echo $nfc_id;
										echo "<option value=$nfc_id>$nfc_id</option>";
									}
								}
								?>
							</select>
							<input class="btn btn-embosed btn-primary" type="submit" value="Search">
						</form>

						<!-- ***********Edit your content ENDS here******** -->
					</div>
					<!--body panel main -->
				</div>
				<!--toc -->

			</div><!-- end main content -->

			<div class="col-md-3">
				<?php
				//include the sidebar menu
				include("inc/sidebar-menu.php"); ?>
			</div><!-- end main menu -->
		</div>
	</div><!-- end container -->

	<?php
	//include the footer
	include("inc/footer.php"); ?>

</body>

</html>
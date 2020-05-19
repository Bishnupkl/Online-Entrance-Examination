<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>Password recovery</title>
<?php include 'head-file.php'; ?>

</head>

<body>
	<?php include 'header.php' ;?>
	
	<!-- <div class="row">
		<div>
			<div>
				<div class="panel-heading" style="color:green;font-size:25px">Please enter your Email:</div>
				<div class="panel-body">
					<form role="form" method="post" action="password_recovery_process.php">
						<fieldset>
							<div class="form-group">
								<input class="form-control" placeholder="enter your Email" name="email" type="email" required>
							</div>
							
							<button type="submit" class="btn btn-primary">Verify Email</button>
							<br><br>
							
							</fieldset>
					</form>
				</div>
			</div>
		</div><! /.col-->
	<!-- </div> --><!-- /.row -->

	<div class="row">
		
		<div class="col-sm-4 col-sm-offset-4">
			<span style="color: lightseagreen;">Password Recovery Panel</span><br><br>
			<form action="password_recovery_process.php" method="post">
				<div class="form-group">
					<span style="color: lightseagreen;">Email:</span><br><br><input type="email" name="email" class="form-control" placeholder="Please enter your email address" required>
				</div>
				<div class="form-group">
					<input type="submit" value="Verify email" class="btn btn-primary">
				</div>
			</form>
		</div>
	</div>
	
</body >

</html>

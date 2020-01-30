<?php
session_start();
if(!isset($_SESSION["forpin"])){
	echo "<script>window.location='password_recovery.php';</script>";
}

 ?>
<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>Password Recovery</title>
<?php include 'head-file.php'; ?>
</head>

<body>
	<?php include 'header.php'; ?>
	<!-- <div class="row">
		<div class="col-xs-10 col-xs-offset-1 col-sm-8 col-sm-offset-2 col-md-4 col-md-offset-4">
			<div class="login-panel panel panel-default">
				<div class="panel-heading" style="color:green;font-size:25px">Change password</div>
				<div class="panel-body">
					<form role="form" method="post" action="password_updateprocess.php">
						<fieldset>
							<div class="form-group">
								<input class="form-control" placeholder=" New password" name="password" type="password" required>
							</div>

							<div class="form-group">
								<input class="form-control" placeholder="Confirm password" name="cpassword" type="password" required>
							</div>

							
							
							<button type="submit" class="btn btn-primary">Change password</button>
							<br><br>
							
							</fieldset>
					</form>
				</div>
			</div>
		</div><!-/.col-->
	<!-- </div> --><!-- /.row -->
	
	<div class="row">
		
		<div class="col-sm-4 col-sm-offset-4">
			<span style="color: lightseagreen;">Password Update Panel</span><br><br>
			<form action="password_updateprocess.php"  method="post">
				<div class="form-group">
					<input  class="form-control" placeholder=" New password" name="password" type="password" required>
					</div>

				<div class="form-group">
					<input class="form-control" placeholder="Confirm password" name="cpassword" type="password" required>
				</div>
				<div class="form-group">
					<input type="submit" value="Change Password" class="btn btn-primary">
					
				</div>
				
			</form>
		</div>
	</div>
</body>

</html>

<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>Password Recovery</title>
<?php include 'head-file.php'; ?>

</head>
<?php include 'header.php'; ?>

<body>
	
	<div class="row">
		
		<div class="col-sm-4 col-sm-offset-4">
			<span style="color: lightseagreen;">Password Recovery Panel</span><br><br>
			<form action="pin_process.php" method="post">
				<div class="form-group">
					<span style="color: lightseagreen;">Pin:</span><br><br><input type="text" name="pin" class="form-control" placeholder="Please enter the pin number" required>
				</div>
				<div class="form-group">
					<input type="submit" value="Check" class="btn btn-primary">
				</div>
			</form>
		</div>
	</div>
		

	
</body>

</html>

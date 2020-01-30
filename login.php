<!DOCTYPE html>
<html lang="en">
    <head> 
		

	<?php include 'head-file.php'; ?>
		
	</head>
	<body>
		<?php include 'header.php'; ?>
		
	<div class="center-container" style="background-image: url(images/s7.jpg);
					background-repeat: no-repeat;
    background-position: center;
-webkit-background-size: cover;
    -moz-background-size: cover;
    -o-background-size: cover;
    -ms-background-size: cover;
    min-height: 800px;position:relative;margin-top: -36px;">
		<div class="main">
			<h1 class="w3layouts_head">Please Login Here</h1>
				<div class="w3layouts_main_grid">
					<form action="login_check.php" method="post" class="w3_form_post">
						

						<div class="w3_agileits_main_grid w3l_main_grid">
							<span class="agileits_grid">
								<label>Email </label>
								<input type="text" name="email" placeholder="Your Email" required="">
							</span>
						</div>

						<div class="w3_agileits_main_grid w3l_main_grid">
							<span class="agileits_grid">
								<label>Password </label>
								<input type="password" name="password" placeholder="Your Password" required="">
							</span>
						</div>


						<div class="w3_agileits_main_grid w3l_main_grid">
							<span class="agileits_grid">
								<label>Category</label>
								<select name="category" required>
									<option value="none" selected disabled >Select Category</option>
									<option value="student">Student</option>
									<option value="teacher">Teacher</option>
								</select>
							</span>
						</div>

					<div class="w3_main_grid" style="margin-top: 10px">
						<div class="w3_main_grid_right">
							<input type="submit" value="Submit">
						</div>
					</div>
					<br>
					<style type="text/css">
						a:hover{color: red;}
					</style>
					<a href="password_recovery.php">Forgot password ?</a>

					
				</form>
			</div>
		
		</div>
	</div>
</body>
</html>
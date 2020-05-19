
<!DOCTYPE html>
<html lang="en">
    <head> 
		 
	<?php include 'head-file.php'; ?>
		
	</head>
	<body>
		<?php include 'header.php'; ?>
		
	
	

	<div class="center-container" style="background-image: url(images/s7.jpg);background-repeat: no-repeat;
    background-position: center;
-webkit-background-size: cover;
    -moz-background-size: cover;
    -o-background-size: cover;
    -ms-background-size: cover;
    min-height: 800px;position: relative;margin-top: -36px;">
		<div class="main">
			<h1 class="w3layouts_head">Student Registration Form</h1>
				<div class="w3layouts_main_grid">
					<form action="stu_reg_process.php" method="post" class="w3_form_post">
						<div class="w3_agileits_main_grid w3l_main_grid">
							<span class="agileits_grid">
								<label>Your Name </label>
								<input type="text" name="name" placeholder="Your Full Name" required="">
							</span>
						</div>
						<div class="w3_agileits_main_grid w3l_main_grid">
							<span class="agileits_grid">
								<label>Address  </label>
								<input type="text" name="address" placeholder="Your Address" required="">
								</span>
						</div>

						<div class="w3_agileits_main_grid w3l_main_grid">
							<span class="agileits_grid">
								<label>Father Name  </label>
								<input type="text" name="fatname" placeholder="Your Father Name" required="">
								</span>
						</div>

						<div class="agileits_w3layouts_main_grid w3ls_main_grid">
							<span class="agileinfo_grid">
								<label>Date of Birth </label>
								<div class="agileits_w3layouts_main_gridl">
									<input class="date" id="datepicker" name="dob" type="date" value="mm/dd/yyyy" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = '';}" required="">
								</div>
									<div class="clear"> </div>
							</span>
						</div>

						

						
						<div class="w3_agileits_main_grid w3l_main_grid">
							<span class="agileits_grid">
								<label>Phone Number </label>
								<input type="text" name="phone" placeholder="Phone Number" required="">
								</span>
						</div>
						<div class="w3_agileits_main_grid w3l_main_grid">
							<span class="agileits_grid">
								<label>Email </label>
								<input type="email" name="email" id="word" onkeyup="hint(this.value)" placeholder="Your Email" required>
							</span>
							<span id="suggest" style="float: right;color: white;margin-top: -10px;"></span>
								<script>
									function hint(str){
									var store;
									var xhttp;
									if(str.length== 0){
									document.getElementById("suggest").innerHTML="";
									return;

									}
									xhttp = new XMLHttpRequest();

									xhttp.onreadystatechange = function(){
									if(xhttp.readyState == 4 && xhttp.status == 200){
									document.getElementById("suggest").innerHTML = xhttp.responseText;

									}

									};

									xhttp.open("GET.html","getting_hint.php?id="+str,true);
									xhttp.send();	

   									 }
   									 
									</script>


						</div>

						<div class="w3_agileits_main_grid w3l_main_grid">
							<span class="agileits_grid">
								<label>Password </label>
								<input type="password" name="password" placeholder="Your Password" required="">
							</span>
						</div>


						<!-- <div class="agileits_w3layouts_main_grid w3ls_main_grid">
							<span class="agileinfo_grid">
								<label>Registration Date</label>
								<div class="agileits_w3layouts_main_gridl">
									<input class="date" id="datepicker" name="reg_date" type="date" value="mm/dd/yyyy" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = '';}" required="">
								</div>
									<div class="clear"> </div>
							</span>
						</div> -->


						<div class="content-w3ls">
						<div class="form-w3ls">
							<div class="content-wthree2">
								<div class="grid-w3layouts1">
									<div class="w3-agile1">
										<label>Gender</label>
										<ul>
											<li>
												<input type="radio" id="a-option" name="gender" value="male">
												<label for="a-option">Male </label>
												<div class="check"></div>
											</li>
											<li>
												<input type="radio" id="b-option" name="gender" value="female">
												<label for="b-option">Female</label>
												<div class="check"><div class="inside"></div></div>
											</li>
										</ul>
									</div>	
								</div>
								<div class="clear"></div>
							</div>
						</div>
						
						<div class="clear"></div>
					</div>

						
						


						
					
					<div class="w3_main_grid">
						<div class="w3_main_grid_right">
							<input type="submit" value="Submit">
						</div>
					</div>

					
				</form>
			</div>
		<!-- Calendar -->
			
			<link rel="stylesheet" href="css/jquery-ui.css" />
				<script src="js/jquery-ui.js"></script>
					<script>
						$(function() {
							$( "#datepicker" ).datepicker();
						});
					</script>
		
		<!-- //Calendar -->
			<!-- <div class="w3layouts_copy_right">
				<div class="container">
					<p>© 2017 Event Registration Form. All rights reserved | Design by <a href="http://w3layouts.com">W3layouts.</a></p>
				</div>
			</div> -->
		</div>
	</div>
</body>
</html>
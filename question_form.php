<?php 

session_start();
if(!isset($_SESSION["temail"])){

  echo  "<script>window.location='login.php';</script>";

}
include 'connection_establish.php';
$email = $_SESSION["temail"];
$sql = "SELECT * FROM teacher_reg WHERE t_email = '$email'";
$query = mysqli_query($con,$sql);
$row = mysqli_fetch_array($query);

if ($row['permission']=='not granted') {

	echo "<html><head><script src ='dist/sweetalert.min.js'></script></head></html>";
		
		echo "<script>swal('Permission required', '', 'error')
	.then((value) => {
  window.location='index.php';
});

</script>";
	

} else {
	
?>

<!DOCTYPE html>
<html lang="en">
    <head> 

	<?php include 'head-file.php'; ?>
		
	</head>
	<body>
		<?php include 'header.php'; ?>
		
	


	<div class="center-container" style="background-image: url(images/s7.jpg); background-repeat: no-repeat;
    background-position: center;
-webkit-background-size: cover;
    -moz-background-size: cover;
    -o-background-size: cover;
    -ms-background-size: cover;
    min-height: 800px;">
		<div class="main" style="margin-top: -29px;">
			<h1 class="w3layouts_head">Please Upload Your Question Here </h1>
				<div class="w3layouts_main_grid">
					<form action="question_insert.php" method="post" class="w3_form_post">
						<div class="w3_agileits_main_grid w3l_main_grid">
							<span class="agileits_grid">
								<label>Question</label>
								<input type="text" name="question" placeholder="Enter Question" required="">
							</span>
						</div>
						<div class="w3_agileits_main_grid w3l_main_grid">
							<span class="agileits_grid">
								<label>Choice 1 </label>
								<input type="text" name="c1" placeholder="Answer choice one" required="">
								</span>
						</div>

						<div class="w3_agileits_main_grid w3l_main_grid">
							<span class="agileits_grid">
								<label>Choice 2 </label>
								<input type="text" name="c2" placeholder="Answer choice two" required="">
								</span>
						</div>

						<div class="w3_agileits_main_grid w3l_main_grid">
							<span class="agileits_grid">
								<label>choice 3 </label>
								<input type="text" name="c3" placeholder="Answer choice three" required="">
								</span>
						</div>

						<div class="w3_agileits_main_grid w3l_main_grid">
							<span class="agileits_grid">
								<label>Choice 4 </label>
								<input type="text" name="c4" placeholder="Answer choice four" required="">
								</span>
						</div>

						<div class="w3_agileits_main_grid w3l_main_grid">
							<span class="agileits_grid">
								<label>Correct Answer </label>
								<input type="text" name="correct" placeholder="Correct answer " required="">
								</span>
						</div>
						

						
						<div class="w3_agileits_main_grid w3l_main_grid">
							<span class="agileits_grid">
								<label>Question mark </label>
								<input type="text" name="qmark" placeholder="Mark carry by Question" required="">
								</span>
						</div>
						


						
					
					<div class="w3_main_grid" style="margin-top:10px;">
						<div class="w3_main_grid_right">
							<input type="submit" value="Submit">
						</div>
					</div>

					
				</form>
			</div>
		
			<!-- <div class="w3layouts_copy_right">
				<div class="container">
					<p>© 2017 Event Registration Form. All rights reserved | Design by <a href="http://w3layouts.com">W3layouts.</a></p>
				</div>
			</div> -->
		</div>
	</div>
</body>
</html>
<?php } ?>
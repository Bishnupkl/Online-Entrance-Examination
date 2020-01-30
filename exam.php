<?php 
include 'connection_establish.php';
$sql = "SELECT * FROM exam_date";
$result = mysqli_query($con,$sql);
$row = mysqli_fetch_array($result);
$date = date("Y-m-d");

if ($date!=$row['edate']) {
		echo "Exam will be on ".$row['edate'];
		
}


else{
 ?>
 <!DOCTYPE html>
 <html>
 <head>
 	  <link rel="stylesheet" href="examcss/style.css">
 	<title>Exam</title>
 </head>
 <body>
 	
 	 <div>
  
  <h1>Take online exam</h1>
 <form>
  <?php 

  $esql = "SELECT * FROM question_table ORDER BY RAND()";
  $eresult = mysqli_query($con,$esql);
  while($erow = mysqli_fetch_array($eresult))
  {

   ?>
  	<p><?php echo $erow['q_id']; ?>) <?php echo $erow['question']; ?></p>
  
  <input type="radio" name="c1" id="c1" />
  <label for="c1"><?php echo $erow['choice1']; ?></label>
  
  <input type="radio" name="c1" id="c2" />
  <label for="c2"><?php echo $erow['choice2']; ?></label>
  
  <input type="radio" name="c1" id="c3" />
  <label for="c3"><?php echo $erow['choice3']; ?></label>
  
  <input type="radio" name="c1" id="c4" />
  <label for="c4"><?php echo $erow['choice4']; ?></label>

  <?php } ?>
 
  </form>
  
</div>
  

 </body>
 </html>
 <?php } ?>

<?php 
session_start();
$cemail = $_SESSION['email'];
if (isset($cemail)) {
  

 ?>

<?php 
include 'connection_establish.php';
$sql = "SELECT * FROM exam_date";
$result = mysqli_query($con,$sql);
$row = mysqli_fetch_array($result);
$date = date("Y-m-d");

if ($date!=$row['edate']) {
  $tdate = $row['edate'];
    echo "<html><head><script src='dist/sweetalert.min.js'></script></head></html>";	
    echo "<script>swal('Examination date is not fixed yet', '', 'info')
  .then((value) => {
  window.location='index.php';
});

</script>";

		exit();
}

$status = "SELECT exam_status FROM stu_reg WHERE email='$cemail' ";

$query = mysqli_query($con,$status);

// print_r($query);
// die();
// $fetch=mysqli_num_row($query);
$fetch = mysqli_fetch_array($query);
if ($fetch['exam_status']=="taken") {
  echo "
  <script>
  window.location='index.php';
  </script>

  ";
}


else{
 ?>
 <!DOCTYPE html>
 <html>
 <head>
 	  <link rel="stylesheet" href="examcss/style.css">
    <link rel="stylesheet" type="text/css" href="css/bootstrap.css">
    <link rel="stylesheet" type="text/css" href="bootstrap.min.css">
    <script type="text/javascript" src="js/jquery-2.1.4.min.js"></script>
 	<title>Exam</title>
 </head>
 <body>
  <div class="container-fluid">
  
  <div class="row">
   <div class="col-sm-2"></div>
 	 <div class="col-sm-8 col-sm-offset-3" >
  <h1> <center><b>Online Entrance Examination <br><?php echo date('Y');?></b></center></h1>
  <p style="float: right"><b>Full Marks: 20 <br> Pass Marks:8 <br> Time: 45 min</b></p><br>
  <p><i>Candidates are higly restricted to bring external devices such as mobile, pendrive, <br>external disks etc and They should click on only one botton.</i></p>
  <b>Attempt all questions </b><span style="float: right;"><input type="text" id="dat" value="44" disabled style="width: 30px;color: lightseagreen;height: 20px;">
<input type="text" id="dats" value="60" disabled style="width: 30px;color: red;height: 20px;"></span><span style="float: right;">Remaining time</span><br><br>

<script type="text/javascript">

  setInterval(timer,60000);

  function timer(){
    var v=  document.getElementById('dat').value;
    var time = parseInt(v);
    time = time-1;
    if (time!=0) {
      document.getElementById('dat').value =time;
    }
    if (time==0) {
      document.querySelector("input[type='submit']").click()
    }
    
     
    
  }
  setInterval(secTimer,1000)
  function secTimer(){
    var x = document.getElementById('dats').value;
    var stimer = parseInt(x);
    stimer = stimer-1;
    if (stimer!=0) {
      document.getElementById("dats").value=stimer;
    }
    if (stimer==0) {
    document.getElementById("dats").value=60;
    }

  }
  
  
</script>

 <form action="exam2process.php" method="post">
  <?php 

  $esql = "SELECT * FROM question_table ORDER BY RAND()";
  $eresult = mysqli_query($con,$esql);
  $sn =0;
  
  while($erow = mysqli_fetch_array($eresult))	
  
      {
        $sn = $sn +1;
   ?>

 <?php echo $sn.")" ; ?> <?php echo $erow['question']; ?>
  <br>

  &nbsp;&nbsp;<input type="radio" id="q<?php echo $erow['q_id']; ?>" name="q<?php echo $erow['q_id'] ; ?>" value ="<?php echo $erow['choice1']; ?>">

<label for="q<?php echo $erow['q_id']; ?>"><?php echo $erow['choice1'];?></label>
 

  <input type="radio" id="r<?php echo $erow['q_id']; ?>" name="q<?php echo $erow['q_id']; ?>" value ="<?php echo $erow['choice2']; ?>">

<label for="r<?php echo $erow['q_id']; ?>"><?php echo $erow['choice2']; ?></label>


  <input type="radio" id="s<?php echo $erow['q_id']; ?>" name="q<?php echo $erow['q_id']; ?>" value ="<?php echo $erow['choice3']; ?>">

<label for="s<?php echo $erow['q_id']; ?>"><?php echo $erow['choice3']; ?></label>
  

  <input type="radio" id="t<?php echo $erow['q_id']; ?>" name="q<?php echo $erow['q_id']; ?>" value ="<?php echo $erow['choice4']; ?>">

<label for="t<?php echo $erow['q_id']; ?>"><?php echo $erow['choice4']; ?></label>
  

  
<br><br>

  <?php } ?>
<?php 

 // $eesql = "SELECT * FROM question_table ORDER BY RAND() LIMIT 1";
 //  $eeresult = mysqli_query($con,$eesql);
  
 //  $eerow = mysqli_fetch_array($eeresult);
 //  if($_SESSION['rid']!=$eerow['q_id']) {
       

 //        echo $eerow['q_id'];
 //     }
   

 ?>

<input type="submit" value="submit" class="btn btn-primary"><br><br>
 
  </form>
 
  
</div>
<div class="col-sm-2"></div>
</div>  
</div>
 </body>
 </html>
 <?php } ?>
 <?php 
}
else{
  echo "<script>window.location='login.php';</script>";
}


  ?>

   <?php 
    session_start();
    if(!isset($_SESSION['admin']))
    {
      echo "<script>window.location = 'login.php'</script>";
    }

    ?>
   <?php
	include'header.php';
	?>
  <?php 
    include 'connection_establish.php';
    $sql = "SELECT count('email') FROM stu_reg";
    $result = mysqli_query($con,$sql);
    $row = mysqli_fetch_array($result);

    $sql1 = "SELECT count('email') FROM teacher_reg";
    $result1 = mysqli_query($con,$sql1);
    $row1 = mysqli_fetch_array($result1);

   ?>

  <div class="content-wrapper">
    <div class="container-fluid">
      <div class="row" style="margin-top: -10px;">
       
       <div class="col-sm-3 stats_left counter_grid" style="background: #76DAFF;">

         <img src="images/seat.png" width="80px" height="50px" style="margin-top: 32px;">
         <p style="color: white;position:static;padding: 5px;"><span class="counter" style ="color:white;padding: 5px;font-size: 23px;">55</span>Seats</p>
       </div>

        <div class="col-sm-3 stats_left counter_grid1" style="background: #47CF73;">
         <img src="images/student.png" width="80px" height="80px">
         <p style="color: white;position:static;padding: 5px;"><span class="counter" style ="color:white;padding: 5px;font-size: 23px;"><?php echo($row['0']); ?></span>Students</p>
       </div>

        <div class="col-sm-3 stats_left counter_grid2" style="background: #FCD000;">
         <img src="images/subject.png" width="80px" height="80px">
          <p style="color: white;position:static;padding: 5px;"><span class="counter" style ="color:white;padding: 5px;font-size: 23px;">4</span>Subjects</p>
       </div>

        <div class="col-sm-3 stats_left counter_grid3" style="background: #FF3C41;">
         <img src="images/teacher.png" width="80px" height="80px">
          <p style="color: white;position:static;padding: 5px;"><span class="counter" style ="color:white;padding: 5px;font-size: 23px;"><?php echo($row1['0']); ?></span>Teachers</p>
       </div>
        
    </div>
    

    <div class="row">
      <div class="col-sm-6" style="margin-top: 50px;"">
        <h2 style="color: #20B2AA">Set Examination Date</h2>
       <button style="background-color: #20B2AA" type="button" class="btn btn-info" data-toggle="modal" data-target="#myModal">Open </button>
      

<!-- Modal 1 -->
<div id="myModal" class="modal fade" role="dialog">
  <div class="modal-dialog">

    <!-- Modal content-->
    <div class="modal-content">
      <div class="modal-header">
        
        <h4 class="modal-title"><p>Examination Date</p></h4>
      </div>
      <div class="modal-body">
        <form action="set_exam_date.php" method="post">
      Date:
    <input type="date" name="edate" required style="background:lightseagreen;color: white;">
    <button type="submit" class=" btn-primary" style="background: lightseagreen;">Set Exam Date</button>

    </form>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
      </div>
    </div>

  </div>
</div>
<!-- Modal 1 ends -->

        </div>
      <div class="col-sm-6" style="margin-top: 50px;">
        <h2 style="color: #20B2AA;float: right;">Set Result Date</h2>
        <button style="background-color: #20B2AA;float: right;margin-top:40px;margin-right: -70px;" type="button" class="btn btn-info" data-toggle="modal" data-target="#myModal2">Open </button>

       <!-- Modal 2 -->
<div id="myModal2" class="modal fade" role="dialog">
  <div class="modal-dialog">

    <!-- Modal content-->
    <div class="modal-content">
      <div class="modal-header">
        
        <h4 class="modal-title">Result Date</h4>
      </div>
      <div class="modal-body">
       <form action="set_result_date.php" method="post">
    Date:
    <input type="date" name="rdate" required style="color: white;background-color: lightseagreen">
    <button type="submit" class=" btn-primary" style="background: lightseagreen">Publish Result</button>

    </form>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
      </div>
    </div>

  </div>
</div>
<!-- Modal 1 ends -->
        
        </div>


        <script type="text/javascript" src="js/bootstrap.min.js"></script>

    </div>

    <div class="row">
      <div class="col-sm-12">
        <br>
         <h3 style="color: #20B2AA">Grant permission to the teachers</h3>
         <!-- conection to the database -->
                  <table class="table table-responsive"  cellpadding="1" cellspacing="0" >
<tr bgcolor="lightseagreen">
    <td class="tdc">SN</td>
    <td class="tdc">Name</td>
    <td class="tdc">Subject</td>
    <td class="tdc">Gender</td>
    <td class="tdc">Address</td>
    <td class="tdc">Phone No</td>
    <td class="tdc">Email</td>
    <td class="tdc">Permission</td>
    
<style type="text/css">
  

</style>

<style type="text/css">
  .tdc{
    color: white;
  }
</style>
<?php
include 'connection_establish.php';
$sql ="SELECT * FROM teacher_reg";
$result = mysqli_query($con,$sql);
$count = 0;
while ($row = mysqli_fetch_array($result)) {
  $count++;
  ?>

  <tr bgcolor="whitesmoke">
    <td><?php echo $count; ?></td>
    <td><?php echo $row['t_name']; ?></td>
    <td><?php echo $row['subject']; ?></td>
    <td><?php echo $row['t_gender']; ?></td>
    <td><?php echo $row['t_address']; ?></td>
    <td><?php echo $row['t_phone']; ?></td>
    <td><?php echo $row['t_email']; ?></td>
    <td><a href="grant_permission.php?id=<?php echo $row['t_email'];?>"> <button type="buttton" class="btn btn-primary">Grant</button></a></td>
    
     </tr>
<?php
}


mysqli_close($con);


?>
</table>

      </div>
    </div>

 </div>
   
  <script type="text/javascript" src="js/jquery-2.2.3.min.js"></script>
    <script src="js/jquery.waypoints.min.js"></script>
  <script src="js/jquery.countup.js"></script>
  <script>
    $('.counter').countUp();
  </script>
  <!-- content-wrapper ends -->
  </div>

	
	<?php
	include'footer.php';
	?>
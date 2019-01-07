<?php
include"header.php";
include "connect.php";
?>
  <div class="content-wrapper">
    <div class="container-fluid">
      <!-- Breadcrumbs-->
      <ol class="breadcrumb">
        <li class="breadcrumb-item">
          <a href="#"> <i class="fa fa-fw fa-dashboard"></i> &nbsp; &nbsp; &nbsp;Dashboard</a>
        </li>
        <li class="breadcrumb-item active">Service Table</li>
      </ol>
      <!-- Example DataTables Card-->
      <div class="card mb-3">
        <div class="card-header">
          <i class="fa fa-table"></i> Service List </div>
        <div class="card-body">
          <div class="table-responsive">
            <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
              <thead>
                <tr>
                  <th>S.n</th>
                  <th>Date</th>
                  <th>Service</th>
                  <th>Icon </th>
                  <th>Details</th>
                  <th>Images</th>
                  <th>Operation</th>
                </tr>
              </thead>
              <tfoot>
          <tr>
                  <th>S.n</th>
                  <th>Date</th>
                  <th>Service</th>
                  <th>Icon </th>
                  <th>Details</th>
                  <th>Images</th>
                  <th>Operation</th>
                </tr>
              </tfoot>
              <tbody>
        <!-- Feching data From Product Table -->
         <?php
        $sql = "SELECT * FROM service ORDER BY service_id DESC";
          $result = $conn->query($sql);

          if ($result->num_rows > 0) {
            // output data of each row
            while($row = $result->fetch_assoc()) {
        ?>
                <tr>
                  <td><?php echo $row['service_id']; ?></td>
                  <td><?php echo $row['date']; ?></td>
          <td><?php echo $row['service']; ?></td>
          <td><?php echo $row['icon'];?></td>
                  
          <?php
          $info = substr($row['details'],0,250);
          ?>
                  <td><?php echo $info;?></td>
                  
                  <td><img src="serviceuploads/<?php echo $row['image']; ?>" width="80px" height="60px" class="img-thumbnail"> </td>
          <!-- 1st  Modal for Edit   -->
          <td>
      <button type="button" class="btn btn-info" data-toggle="modal" data-target="#myModal" title=" Edit.!"><i class="fa fa-pencil-square-o" aria-hidden="true"></i></button>

                  <!-- Modal -->
                  <div id="myModal" class="modal fade" role="dialog">
                    <div class="modal-dialog modal-lg">

                    <!-- Modal content-->
                    <div class="modal-content">
                      <div class="modal-header">
                      <button type="button" class="close" data-dismiss="modal">&times;</button>
                      <h4 class="modal-title">Modal Header</h4>
                      </div>
                      <div class="modal-body">
                      <!-- Edit Form  popup-->
                      <?php
                      include'producteditform.php';
                      ?>
                      <!-- End Of Edit Form  popup-->
                      </div>
                      <div class="modal-footer">
                      <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                      </div>
                    </div>

                    </div>
                  </div>
          
          <!-- 1st  End of Model   -->
          
          <!-- 2st  Modal for Edit   -->
          <button type="button" class="btn btn-success" data-toggle="modal" data-target="#myModal" title=" View.!"><i class="fa fa-eye" aria-hidden="true"></i></button>

                  <!-- Modal -->
                  <div id="myModal" class="modal fade" role="dialog">
                    <div class="modal-dialog modal-lg">

                    <!-- Modal content-->
                    <div class="modal-content">
                      <div class="modal-header ">
                      <div class="row">
                      <div class="col-sm-4" style="float:right; margin-right:200px;">
                    
                      <button type="button" class="close" data-dismiss="modal">&times;</button>
                      </div>
                      <div class="col-sm-4" style="float:left; margin-left:200px;">
                       <h3 class="modal-ti"  >Modal Header</h3> 
                      </div>
                      </div>
                      </div>
                     </div>
                      <div class="modal-body">
                      <!-- Edit Form  popup-->
                      <?php
                      include'producteditform.php';
                      ?>
                      <!-- End Of Edit Form  popup-->
                      </div>
                      <div class="modal-footer">
                      <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                      </div>
                    </div>

                    </div>
                  </div>
          
          <!-- End of Model   -->
          
          <button type="button" class="btn btn-danger" data-toggle="tooltip" title="Delete.!"><i class="fa fa-trash" aria-hidden="true"></i></button>       
          </td>
                  
                </tr>
        <?php
                }
          } else {
            echo "0 results";
          }
                ?>
              </tbody>
            </table>
          </div>
        </div>
    <!-- /.code for latest update-->
    <?php
    
    $sqli = "SELECT * FROM service ORDER BY service_id DESC limit 0,1";
          $result = $conn->query($sqli);

          if ($result->num_rows > 0){
            $row = $result->fetch_assoc();
            $latest=$row['date'];
          }
        
    ?>
    <!-- /.End of Code-->
        <div class="card-footer small text-muted"> Last Updated at <?php echo $latest; ?> </div>
      </div>
    </div>
    <!-- /.container-fluid-->
    <!-- /.content-wrapper-->
    <footer class="sticky-footer">
      <div class="container">
        <div class="text-center">
          <small>Copyright © Your Website 2017</small>
        </div>
      </div>
    </footer>
    <!-- Scroll to Top Button-->
    <a class="scroll-to-top rounded" href="#page-top">
      <i class="fa fa-angle-up"></i>
    </a>
    <!-- Logout Modal-->
    <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
      <div class="modal-dialog" role="document">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title" id="exampleModalLabel">Ready to Leave?</h5>
            <button class="close" type="button" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">×</span>
            </button>
          </div>
          <div class="modal-body">Select "Logout" below if you are ready to end your current session.</div>
          <div class="modal-footer">
            <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
            <a class="btn btn-primary" href="login.html">Logout</a>
          </div>
        </div>
      </div>
    </div>
  
   <?php
   $conn->close();
   include "footer.php";
   ?>
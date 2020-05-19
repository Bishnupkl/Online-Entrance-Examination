<?php 
session_start();
if(!isset($_SESSION["email"])){

  echo  "<script>window.location='login.php';</script>";

}
$email = $_SESSION["email"];

?>


<?php

//------------------------------------
// methods_test.php
// provides form elements for testing 
// API endpoints
// created: October 2016
// author: Steve Rucker
//------------------------------------

include('Kairos1.php');

?>

<html>
    <head>
      <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.0/jquery.min.js"></script>
      <?php include 'head-file.php'; ?>
    
      <script src="assets1/js/scripts1.js"></script>
      <link href="assets1/css/bootstrap.min.css" rel="stylesheet">
      <link href="assets1/css/styles.css" rel="stylesheet">

      <link rel="icon" href="../../favicon.ico">
  <link href="jumbotron-narrow.css" rel="stylesheet">
 <style>
#camera {
  width: 70%;
  height: 250px;
}
input[type="file"] {
      color: #fff;
  background-color: #337ab7;
  border-color: #2e6da4;
    display: inline-block;
    padding: 1px;
    height: 30px;
    margin-left: -5cm;
    cursor: pointer;
}


</style> 
  </head>
  <body>
    <?php include 'header.php'; ?>

  <!-- camera open -->
<center>
  <div class="mains" style="margin-top: -20px;">
     <form >

           <!-- APP ID:  --><input type="hidden" class="app_id" value=" b91c191d" disabled>
           <!--  APP KEY:  --><input type="hidden" class="app_key" value="3d61b73125a7d66d8588d8414b6a15a9" disabled>
            <input type="button" style="display: none;" id="validateKeys" value="Validate" />

       </form>

      <h1 style="color:#286090;">Take your photo</h1>

       <div class="col-md-6 col-md-offset-4">

        <div class="text-center">
          <div id="camera_info"></div>
            <div id="camera"></div><br>
              <button style="float: left;height:31px;" id="take_snapshots" id="btnsm" class="btn btn-primary btn-sm">Take Snapshots</button>
                </div>

     

        <form id="recognizeForm">
              <input type="file" size="60" class="image-upload" name="Image Upload" class="btn btn-primary btn-sm">
                <!--  Gallery Name: --> <input type="hidden" class="gallery_name" name="Gallery Name" value="<?php echo $email; ?>">
                   <input style="height: 31px;width: 75px;margin-top: -7px;" type="button" id="testRecognize" value="Verify" class="btn btn-primary btn-sm"  />
                     </form>




                <div class="row">
                   <!--  <h5>Response:</h5> -->
                    <img src="assets/images/loading.gif" id="loader">
                       <div id="view_data" class="col-lg-8"></div>
          

          <style type="text/css">
            
            .para{
              margin-top: 50px;
              margin-left: -123px;
            }
          </style>

          <p style="margin-left: -470px;margin-top: 5px;font-size: 25px;">Instructions</p>
          <p class="para">1. Let browser use your camera device</p>
          <p style="margin-top: 80px;margin-left: -260px;">2.Click on snapshot button</p>
          <p style="margin-top: 110px;margin-left: -182px;">3. Browse the recently clicked picture</p>
          <p style="margin-top: 140px;margin-left: -256px;">4. Click on verify picture </p>

            </div>
             </div>
              </div>
               </center>

  <!-- camera open ends -->

  <!-- camera js file -->

  <script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>
<script src="jpeg_camera/jpeg_camera_with_dependencies.min.js" type="text/javascript"></script>
<script>
    var options = {
      shutter_ogg_url: "jpeg_camera/shutter.ogg",
      shutter_mp3_url: "jpeg_camera/shutter.mp3",
      swf_url: "jpeg_camera/jpeg_camera.swf",
    };
    var camera = new JpegCamera("#camera", options);
  
  $('#take_snapshots').click(function(){
    var snapshot = camera.capture();
    snapshot.show();
    
    snapshot.upload({api_url: "action.php"}).done(function(response) {
$('#imagelist').prepend("<tr><td><img src='"+response+"' width='100px' height='100px'></td><td>"+response+"</td></tr>");
}).fail(function(response) {
  alert("Upload failed with status " + response);
});
})

function done(){
    $('#snapshots').html("uploaded");
}
</script>
      <!-- end of camera js file -->
    </body>
</html> 
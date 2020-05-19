<?php session_start(); ?>
<!DOCTYPE html>
<html>
<head>
	<title>Password Recovery</title>
	<script type="text/javascript" src="dist/sweetalert.min.js"></script>
</head>
<body>

<?php
$email=$_SESSION["email"];
include 'connection_establish.php';


$sql = mysqli_query($con,"SELECT email from stu_reg where email = '$email'");
if(mysqli_num_rows($sql)<1){
	 echo"<script>swal('No such email found !!!', '', 'warning')
                    .then((value) => {
                        window.location='password_recovery.php';
                        });

                        </script>";
}
else{
	$confirm_code = rand(100,1000000);
	require 'PHPMailer-master/PHPMailerAutoload.php';

	$mail = new PHPMailer();

//Enable SMTP debugging.
	$mail->SMTPDebug = 1;
//Set PHPMailer to use SMTP.
	$mail->isSMTP();
//Set SMTP host name
	$mail->Host = "smtp.gmail.com";
	$mail->SMTPOptions = array(
		'ssl' => array(
			'verify_peer' => false,
			'verify_peer_name' => false,
			'allow_self_signed' => true
		)
	);
//Set this to true if SMTP host requires authentication to send email
	$mail->SMTPAuth = TRUE;
//Provide username and password
	$mail->Username = "oeeproject2018@gmail.com";
	$mail->Password = "finalyear2018";
//If SMTP requires TLS encryption then set it
	$mail->SMTPSecure = "false";
	$mail->Port = 587;
//Set TCP port to connect to

	$mail->From = "oeeproject2018@gmail.com";
	$mail->FromName = "Online Entrance Examination";

	$mail->addAddress($email);

	$mail->isHTML(true);

	$mail->Subject = "Confirmation Code";
	$mail->Body = "<i>This is your Confirmation Code : </i>".$confirm_code;
	if(!$mail->send())
	{
		echo "Mailer Error: " . $mail->ErrorInfo;
	}
	else
	{	
		$sql2 = "INSERT INTO random(number)VALUES('$confirm_code')";
 		$sqle2 =mysqli_query($con,$sql2);
		if($sqle2){
		
			echo "<script>window.location='input_pin.php';</script>";
		}
		else{
			echo "Error";
		}

	}
}


mysqli_close($con);


?>


</body>
</html>

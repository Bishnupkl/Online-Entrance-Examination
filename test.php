<?php 

$salt = "23lkjfsdlk";
$username = "sigdel";

$hashed_value = sha1($salt.$username);
echo $hashed_value;
if ($hashed_value==sha1($salt.$username)) {
	echo "true";
}
else{
	echo "false";
}

 ?>
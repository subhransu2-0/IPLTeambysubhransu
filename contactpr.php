<?php
if ($_SERVER['REQUEST_METHOD']=="POST") {
	
	$fname=$_POST["fname"];
	$email=$_POST["email"];
	$country=$_POST["country"];
	$message=$_POST["message"];
	//$description=$_POST["description"];

include'include/database.php';
	
	$f=mysqli_real_escape_string($con,$fname);
	$e=mysqli_real_escape_string($con,$email);
	$c=mysqli_real_escape_string($con,$country);
	$m=mysqli_real_escape_string($con,$message);
	//$d=mysqli_real_escape_string($con,$description);
	$sql="INSERT INTO `contact`(`fname`,`email`,`country`,`message`) VALUES('$f','$e','$c','$m')";

	//echo $sql;
	$RES=mysqli_query($con,$sql);
	// if (mysqli_affected_rows($con)) {
	// 	$msg="register successfull";
	// }else
	// {
	// 	$msg="try again";
	// }

	if ($RES) {
		echo '<script type="text/javascript">alert("data Saved Successfully")</script>';
	}else
	{
				echo '<script type="text/javascript">alert("data not saved")</script>';

	}
}
?>
<?php
if ($_SERVER['REQUEST_METHOD']=="POST") {
	
	$playerName=$_POST["playerName"];
	$from_team=$_POST["from_team"];
	$price=$_POST["price"];
	$isplaying=$_POST["isplaying"];
	$description=$_POST["description"];

include'database.php';
	
	$pn=mysqli_real_escape_string($con,$playerName);
	$f=mysqli_real_escape_string($con,$from_team);
	$p=mysqli_real_escape_string($con,$price);
	$i=mysqli_real_escape_string($con,$isplaying);
	$d=mysqli_real_escape_string($con,$description);
	$sql="INSERT INTO `team`(`playerName`,`from_team`,`price`,`isplaying`,`description`) VALUES('$pn','$f','$p','$i','$d')";

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
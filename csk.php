<?php
include_once('teams/database.php');
$result = mysqli_query($con,"SELECT * FROM `team` where `from_team`='csk'");
?>
<?php
include'upperbar.php';
include'cskstatus.php';
include'cskcard.php';
include'teams/retrive.php';
?>
<!DOCTYPE html>
<html>
<head>
	<style> 
body 
{

  background-repeat: no-repeat;
  background-image:  url("images/1.jpeg") ;
  background-color: #fffb00;
  background-attachment: fixed;
  background-position: center;
  height: 100%;
  }
  
</style>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	
</head>
<body >

  <img src="images/csk/cskscore.jpg">
</body>

</html>
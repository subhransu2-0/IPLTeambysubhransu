<?php
include_once('teams/database.php');
$result = mysqli_query($con,"SELECT * FROM `team` where `from_team`='rr'");
?>
<?php
include'upperbar.php';
include'rrstatus.php';
include'rrcard.php';
include'teams/retrive.php';
?>
<style> 
body 
{

  background-repeat: no-repeat;
  background-image:  url("images/8.jpeg") ;
  background-color: #1e25fa;
  background-attachment: fixed;
  background-position: center;
  height: 100%;
  }
  
</style>
<body>
  <img src="images/rr/rr.jpg">
</body>
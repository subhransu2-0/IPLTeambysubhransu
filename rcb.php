<?php
include_once('teams/database.php');
$result = mysqli_query($con,"SELECT * FROM `team` where `from_team`='rcb'");
?>
<?php
include'upperbar.php';
include'rcbstatus.php';
include'rcbcard.php';
include'teams/retrive.php';
?>
<style> 
body 
{

  background-repeat: no-repeat;
  background-image:  url("images/4.jpeg") ;
  background-color: #fffb00;
  background-attachment: fixed;
  background-position: center;
  height: 100%;
  }
  
</style>
<body>
  <img src="images/rcb/teams.jpg">
</body>
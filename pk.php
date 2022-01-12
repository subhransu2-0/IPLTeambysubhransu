<?php
include_once('teams/database.php');
$result = mysqli_query($con,"SELECT * FROM `team` where `from_team`='pk'");
?>
<?php
include'upperbar.php';
include'pkstatus.php';
include'pkcard.php';
include'teams/retrive.php';
?>
<style> 
body 
{

  background-repeat: no-repeat;
  background-image:  url("images/5.jpeg") ;
  background-color: #fffb00;
  background-attachment: fixed;
  background-position: center;
  height: 100%;
  }
  
</style>
<body>
  <img src="images/pk/pking.jpg">
</body>
<?php
include_once('teams/database.php');
$result = mysqli_query($con,"SELECT * FROM `team` where `from_team`='MI'");
?>
<?php
include'upperbar.php';
include'mistatus.php';
include'micard.php';
include'teams/retrive.php';
?>
<style> 
body 
{

  background-repeat: no-repeat;
  background-image:  url("images/3.jpeg") ;
  background-color: #fffb00;
  background-attachment: fixed;
  background-position: center;
  height: 100%;
  }
  
</style>
<body>
  <img src="images/mi/miscore.jpg">
</body>
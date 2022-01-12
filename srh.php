<?php
include_once('teams/database.php');
$result = mysqli_query($con,"SELECT * FROM `team` where `from_team`='srh'");
?>
<?php
include'upperbar.php';
include'srhstatus.php';
include'srhcard.php';
include'teams/retrive.php';
?>
<style> 
body 
{
  background-repeat: no-repeat;
  background-image:  url("images/2.jpeg");
  background-color: #d6990b;
  background-attachment: fixed;
  background-position: center;
  height: 100%;
  }
  div{
  	opacity:0.5;
  }
  
</style>
<body>
  <img src="images/srh/srh.jpg">
</body>
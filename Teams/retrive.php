<!DOCTYPE html>
<html>
 <head>
 <title> Team Status</title>
<style type="text/css">
    .myOtherTable { background-color:#4D565C;border-collapse:collapse;color:#000;font-size:18px; }
.myOtherTable th { background-color:#2F3F4A;width:50%; }
.myOtherTable td, .myOtherTable th { padding:20px;border:0; }
.myOtherTable td { font-family:Georgia, Garamond, serif; border-bottom:1px dotted #BDB76B; }
</style>
 </head>
<body>
<?php
if (mysqli_num_rows($result) > 0) {
?>
  <table class="myOtherTable">
  
  <tr>
    <td><h3>Player Name</h3></td>
    <td><h3>From</h3></td>
    <td><h3>Price</h3></td>
    <td><h3>Playing Status</h3></td>
    <td><h3>Role</h3></td>
  </tr>
<?php
$i=0;
while($row = mysqli_fetch_array($result)) {
?>
<tr>
    <td><?php echo $row["playerName"]; ?></td>
    <td><?php echo $row["from_team"]; ?></td>
    <td><?php echo $row["price"]; ?></td>
    <td><?php echo $row["isplaying"]; ?></td>
    <td><?php echo $row["description"]; ?></td>
</tr>
<?php
$i++;
}
?>
</table>
 <?php
}
else{
    echo "No result found";
}
?>
 </body>
</html>
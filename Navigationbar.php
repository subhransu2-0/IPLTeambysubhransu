
<?php
include"include/submitpros.php";
?>


<!DOCTYPE html>
<html><head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<div class="w3-container">
</div>
<style>
  .dropbtn {
  background-color: #04AA6D;
  color: white;
  padding: 16px;
  font-size: 16px;
  border: none;
  cursor: pointer;
}

.dropbtn:hover, .dropbtn:focus {
  background-color: #3e8e41;
}

#myInput {
  box-sizing: border-box;
  background-image: url('searchicon.png');
  background-position: 14px 12px;
  background-repeat: no-repeat;
  font-size: 16px;
  padding: 14px 20px 12px 45px;
  border: none;
  border-bottom: 1px solid #ddd;
}

#myInput:focus {outline: 3px solid #ddd;}

.dropdown {
  position: relative;
  display: inline-block;
}

.dropdown-content {
  display: none;
  position: absolute;
  background-color: #f6f6f6;
  min-width: 230px;
  overflow: auto;
  border: 1px solid #ddd;
  z-index: 1;
}

.dropdown-content a {
  color: black;
  padding: 12px 16px;
  text-decoration: none;
  display: block;
}

.dropdown a:hover {background-color: #ddd;}

.show {display: block;}
  .topnav .search-container {
  float: right;
}

.topnav input[type=text] {
  padding: 6px;
  margin-top: 8px;
  font-size: 17px;
  border: none;
}

body {font-family: Arial, Helvetica, sans-serif;}
* {box-sizing: border-box;}

/* Full-width input fields */
input[type=text], input[type=password] {
  width: 100%;
  padding: 15px;
  margin: 5px 0 22px 0;
  display: inline-block;
  border: none;
  background: #f1f1f1;
}

/* Add a background color when the inputs get focus */
input[type=text]:focus, input[type=password]:focus,input[type=num]:focus , option[name=from]:focus {
  background-color: #ddd;
  outline: none;
}

/* Set a style for all buttons */
button {
  background-color: #04AA6D;
  color: white;
  padding: 14px 20px;
  margin: 8px 0;
  border: none;
  cursor: pointer;
  width: 100%;
  opacity: 0.9;
}

button:hover {
  opacity:1;
}

.cancelbtn {
  padding: 14px 20px;
  background-color: #f44336;
}

.cancelbtn, .signupbtn {
  float: left;
  width: 50%;
}
.container {
  padding: 16px;
}

.modal {
  display: none; 
  position: fixed; 
  z-index: 1; 
  left: 0;
  top: 0;
  width: 100%; 
  height: 100%; 
  overflow: auto; 
  background-color: #474e5d;
  padding-top: 50px;
}

/* Modal Content/Box */
.modal-content {
  background-color: #fefefe;
  margin: 5% auto 15% auto; 
  border: 1px solid #888;
  width: 80%; 
}

hr {
  border: 1px solid #f1f1f1;
  margin-bottom: 25px;
}
 
.close {
  position: absolute;
  right: 35px;
  top: 15px;
  font-size: 40px;
  font-weight: bold;
  color: #f1f1f1;
}

.close:hover,
.close:focus {
  color: #f44336;
  cursor: pointer;
}

/* Clear floats */
.clearfix::after {
  content: "";
  clear: both;
  display: table;
}

@media screen and (max-width: 300px) {
  .cancelbtn, .signupbtn {
     width: 100%;
  }
}
</style>
</head>
<body >
<div class="w3-bar w3-green ">
<button onclick="document.getElementById('id01').style.display='block'" style="width:auto;" class="w3-bar-item w3-button">ADD TEAMS</button>
</div>
<div class="dropdown">

  <button onclick="myFunction()" class="dropbtn">&#128270 Teams</button>
  <div id="myDropdown" class="dropdown-content">
    <input type="text" placeholder="Search.." id="myInput" onkeyup="filterFunction()">
    <a href="csk.php"><abbr title="Chennai Super king">CSK</abbr></a>
    <a href="mi.php"><abbr title="Mumbai Indians">MI</a></abbr>
    <a href="dc.php">DC</a>
    <a href="kkr.php"><abbr title="Kol">KKR</a></abbr>
    <a href="rcb.php">RCB</a>
    <a href="rr.php">RR</a>
    <a href="srh.php">SRH</a>
  </div>
</div>

<div id="id01" class="modal">
  <span onclick="document.getElementById('id01').style.display='none'" class="close" title="Close Modal">&times;</span>
  <form class="modal-content" method="post">
    <div class="container">
      <h1>Add Team Member</h1>
      <p>Please fill in this form to create a new Team member.</p>
      <hr>
      <label for="playerName"><b>Player Name</b></label>
      <input type="text" placeholder="Enter Player name" name="playerName" required>

      <label for="from_team"><b>From</b></label><br>
<!--       <input type="password" placeholder="Enter Password" name="psw" required>
 -->  <input type="radio" id="from_team1" name="from_team" value="CSK" required><label for="from_team1">CSK</label>
      <input type="radio" id="from_team2" name="from_team" value="DC">DC
      <input type="radio" id="from_team3" name="from_team" value="KKR">KKR
      <input type="radio" id="from_team4" name="from_team" value="MI">MI
      <input type="radio" id="from_team5" name="from_team" value="PK">PK
      <input type="radio" id="from_team6" name="from_team" value="RCB">RCB
      <input type="radio" id="from_team7" name="from_team" value="RR">RR
      <input type="radio" id="from_team8" name="from_team" value="SRH">SRH<br><br><br><br>
      
      <label for="price"><b>Price for Player</b></label>
      <input type="text" placeholder="10.00 cr" name="price" required>
      
      <label for="isplaying"><b>Is Playing</b></label><br>
      <input type="radio" name="isplaying" value="true" required>true
      <input type="radio" name="isplaying" value="false">false <br><br><br>

    <label for="description"><b>Description</b></label>
      <input type="radio" name="description" value="ALL-Rounder">All-Rounder
      <input type="radio" name="description" value="Batsman">Batsman
      <input type="radio" name="description" value="Bowler">Bowler
     <br><br><br>

            <label>
        <input type="checkbox" checked="checked" name="remember" style="margin-bottom:15px"> Remember me
      </label>

      <p>By creating an account you agree to our <a href="#" style="color:dodgerblue">Terms & Privacy</a>.</p>

      <div class="clearfix">
        <button type="button" onclick="document.getElementById('id01').style.display='none'" class="cancelbtn">Cancel</button>
        <button type="submit" class="signupbtn">Submit</button>
      </div>
    </div>
  </form>
</div>
<script>
  function myFunction() {
  document.getElementById("myDropdown").classList.toggle("show");
}

function filterFunction() {
  var input, filter, ul, li, a, i;
  input = document.getElementById("myInput");
  filter = input.value.toUpperCase();
  div = document.getElementById("myDropdown");
  a = div.getElementsByTagName("a");
  for (i = 0; i < a.length; i++) {
    txtValue = a[i].textContent || a[i].innerText;
    if (txtValue.toUpperCase().indexOf(filter) > -1) {
      a[i].style.display = "";
    } else {
      a[i].style.display = "none";
    }
  }
}
var modal = document.getElementById('id01');

window.onclick = function(event) {
  if (event.target == modal) {
    modal.style.display = "none";
  }
}
</script>


</body>
</html>
<span> <?php echo @$msg; ?></span>
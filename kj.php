<?php
include'upperbar.php';
?>
<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<style>
.myTable { background-color:#ff173e;border-collapse:collapse;color:#000;font-size:18px; }
/*.myTable th { background-color:#2F3F4A;width:50%; }*/
.myTable td, .myTable th { padding:20px;border:0; }
.myTable td { font-family:Georgia, Garamond, serif; border-bottom:1px dotted #BDB76B; }


img.sticky {
  position: -webkit-sticky;
  position: sticky;
  top: 0;
  width: 200px;
  border-radius: 80%;
  background-color: #f5405e;
}
.cardss {
  display: grid;
  grid-template-columns: repeat(auto-fill, minmax(1000px, 1fr)); /* see notes below */
  grid-auto-rows: minmax(300px, auto);
  grid-gap: 1rem;
}
.card-contents {
    font-size: .75rem;
    display: flex;
    -webkit-box-orient: vertical;
    -webkit-box-direction: normal;
    -ms-flex-direction: column;
    flex-direction: column;
    -webkit-box-flex: 1;
    -ms-flex: 1;
    flex: 1;
}
.cardo {
  /*height: 200px;*/
  /*background: red;*/
  border: 2px solid #e7e7e7;
  border-radius: 4px;
  padding: .5rem;
  -webkit-box-shadow: 0 2px 2px rgba(0, 0, 0, 0.15);
  box-shadow: 0 2px 2px rgba(0, 0, 0, 0.15);
  display: flex;
  /* -webkit-box-orient: vertical; */
  /* -webkit-box-direction: normal; */
  -ms-flex-direction: column;
  flex-direction: column;
  position: relative;
  color: #5d5e5e;
}
.category__10 {
  background-color: #50c6db;
}
</style>
</head>
<body> 
<section class="cardss">
<article class="cardo" style="background-color:darkred;opacity: 0.7;">
<div class="card-contents">


<img class="sticky" src="images/RCB/kj.png" alt="Avatar">
<h1>BOWLER</h1>

<table class="myTable">
<tr>
<th>NAME</th>
<th>TEAM</th>
<th>PRICE</th>
<th>PLAYING STATUS</th>
<th>ROLE</th>


</tr>
<tr>
<th>Kyle Jamieson</th>
<th>Royal Challengers Bangalore</th>
<th>15CR</th>
<th>PLAYING</th>
<th>BOWLER</th>
</tr>
</table>

</div></article></section>
<H2>Kyle Jamieson  record in IPL</H2>
<p>Kyle Jamieson is living up to his lofty billing in the Indian Premier League.

The Black Caps allrounder was again a key contributor for Royal Challengers Bangalore, snaring three vital wickets as captain Virat Kohli’s side won a third straight match, against Kolkata Knight Riders on Monday (NZT).</p><P>

Jamieson ended with figures of 3-41 off three overs as coach Brendon McCullum and captain Eoin Morgan’s KKR were restricted to 166-8. RCB clinched a 38-run victory in Chennai, to remain the only unbeaten team.</p>
</body>

</html>

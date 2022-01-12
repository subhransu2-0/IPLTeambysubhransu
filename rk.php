<?php
include'upperbar.php';
?>
<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<style>
.myTable { background-color:#e69509;border-collapse:collapse;color:#000;font-size:18px; }
/*.myTable th { background-color:#2F3F4A;width:50%; }*/
.myTable td, .myTable th { padding:20px;border:0; }
.myTable td { font-family:Georgia, Garamond, serif; border-bottom:1px dotted #BDB76B; }


img.sticky {
  position: -webkit-sticky;
  position: sticky;
  top: 0;
  width: 200px;
  border-radius: 80%;
  background-color: #e74c3c;
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
  color: #e69509;
}

</style>
</head>
<body> 
<section class="cardss">
<article class="cardo" style="background-color:darkred; opacity: 0.8;">
<div class="card-contents">


<img class="sticky" src="images/srh/rh.png" alt="Avatar">

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
<th>Rashid Khan</th>
<th>SunRisers Hyderabad</th>
<th>9CR</th>
<th>PLAYING</th>
<th>BOWLER</th>
</tr>
</table>

</div></article></section>
<H2>Rashid Khan record in IPL</H2>

<p>In March 2018, during the 2018 Cricket World Cup Qualifier, he captained Afghanistan for the first time in an ODI match. At the age of 19 years and 165 days, he became the youngest player to captain an international side.[9] In the final of the Cricket World Cup Qualifier, against the West Indies, Khan became the fastest and youngest bowler to take 100 wickets in ODIs when he dismissed Shai Hope.[10] He took 44 matches to take his 100th dismissal, breaking the previous record of 52 matches, set by Mitchell Starc of Australia.[10] In June 2018, he became the fastest bowler, in terms of time, to take 50 wickets in T20Is. He reached the milestone in two years and 220 days, in the first T20I against Bangladesh.[11] In October 2021, he also became the fastest bowler, in terms of matches, to take 100 wickets in T20I cricket, in his 53rd match.</p>
</body>

</html>

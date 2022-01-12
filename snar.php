<?php
include'upperbar.php';
?>
<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<style>
.myTable { background-color:#7409e6;border-collapse:collapse;color:#000;font-size:18px; }
/*.myTable th { background-color:#2F3F4A;width:50%; }*/
.myTable td, .myTable th { padding:20px;border:0; }
.myTable td { font-family:Georgia, Garamond, serif; border-bottom:1px dotted #BDB76B; }


img.sticky {
  position: -webkit-sticky;
  position: sticky;
  top: 0;
  width: 200px;
  border-radius: 80%;
  background-color: #7409e6;
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
  color: #7409e6;
}

</style>
</head>
<body> 
<section class="cardss">
<article class="cardo" style="background-color:purple; opacity: 0.89;">
<div class="card-contents">


<img class="sticky" src="images/kkr/snar.png" alt="Avatar">


<h1>ALL-Rounder</h1>

<table class="myTable">
<tr>
<th>NAME</th>
<th>TEAM</th>
<th>PRICE</th>
<th>PLAYING STATUS</th>
<th>ROLE</th>


</tr>
<tr>
<th>Sunil Narine</th>
<th>Kolkata Knight Riders</th>
<th>12.5CR</th>
<th>PLAYING</th>
<th>ALL-Rounder</th>
</tr>
</table>


</div></article></section>
<H2>Sunil Narine record in IPL</H2>

<p>Narine has the reputation of a "mystery bowler", due to the variations that he has on his off breaks, and how he disguises them, but has been reported for a suspect bowling action on a number of occasions.[42] He missed playing in the final of the 2014 Champions League Twenty20 after being suspended for an illegal action with his arm bent by more than 15 degrees and in November 2015 was suspended from bowling in international cricket.[43] His action was reported during the third ODI game against Sri Lanka.[43] In April 2016, he was cleared for bowling in all formats of domestic and international cricket.

Narine's action was again reported during the 2018 Pakistan Super League, but was cleared soon after.[44] In 2020 it was reported yet again, this time during the 2020 Indian Premier League. It was cleared by the IPL Suspect Bowling Action Committee later in the season.</p>
</body>

</html>

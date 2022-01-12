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


<img class="sticky" src="images/srh/kj.png" alt="Avatar">

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
<th>Kedar Jadhav</th>
<th>SunRisers Hyderabad</th>
<th>2CR</th>
<th>PLAYING</th>
<th>ALL-Rounder</th>
</tr>
</table>

</div></article></section>
<H2>Kedar Jadhav record in IPL</H2>

<p>In the IPL, Jadhav got picked by Bangalore in 2016 after a steady time with the Delhi franchise, where he impressed everyone with his hitting prowess in the middle-order. His sudden rise in international cricket is what prompted Kohli's IPL unit to pick him. However, in the auction overhaul of 2018, he found a new home in Chennai. He injured his hamstring in the season opener against Mumbai Indians and retired hurt, but returned to take the side home in dramatic fashion by scooping a six on one leg over fine leg in the final over. However, he missed the rest of the season due to the injury.</p><P>

A fully-fit Jadhav was expected to be a massive boost to Dhoni's side for the 2019 season as he gives the luxury of playing an overseas player in the bowling department. His flattish and slowish off-spin could be effective on Chepauk's pitches as well. Barring his sluggish fielding and at times puzzling running between the wickets, Jadhav is a fine cricketer with a steely determination to overcome the toughest of situations. However, ended up having a poor season, adding to the woes of the batting department that struggled except for skipper MS Dhoni.</p>
</body>

</html>

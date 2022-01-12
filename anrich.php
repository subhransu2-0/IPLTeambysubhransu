<?php
include'upperbar.php';
?>
<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<style>
.myTable { background-color:#2a75f7;border-collapse:collapse;color:#000;font-size:18px; }
/*.myTable th { background-color:#2F3F4A;width:50%; }*/
.myTable td, .myTable th { padding:20px;border:0; }
.myTable td { font-family:Georgia, Garamond, serif; border-bottom:1px dotted #BDB76B; }


img.sticky {
  position: -webkit-sticky;
  position: sticky;
  top: 0;
  width: 200px;
  border-radius: 80%;
  background-color: #2a75f7;
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

</style>
</head>
<body> 
<section class="cardss">
<article class="cardo" style="background-color:skyblue;">
<div class="card-contents">


<img class="sticky" src="images/dc/an.png" alt="Avatar">


<h1>Bowler</h1>

<table class="myTable">
<tr>
<th>NAME</th>
<th>TEAM</th>
<th>PRICE</th>
<th>PLAYING STATUS</th>
<th>ROLE</th>


</tr>
<tr>
<th>Anrich Nortje</th>
<th>Delhi Capitals</th>
<th>30L</th>
<th>PLAYING</th>
<th>Bowler</th>
</tr>
</table>

</div></article></section>
<H2>Anrich Nortje record in IPL</H2>

<p>The South African bowling reserves with the addition of Kagiso Rabada and Lungi Ngidi looks richer than ever and the coffers will be overflowing as someone like Anrich Nortje is in the waiting. Tall, pacy and at the sticks always, not to forget at a pace that can be unsettling, Anrich is one pacer that can be labelled tearaway at the domestic level. His penchant to bowl the yorkers makes him a quintessential cricketer for the white ball formats.
</p><p>
Nortje had earlier travelled to India with South Africa A and also has pocketed 24 wickets in the 4-day Franchise series in the 2018-2019 season to be grabbing all the attention. Unfortunately, the tearaway quick had to miss the 2018 MSL T20 mid-way after he sustained an ankle injury. His bad luck continued as a maiden Indian Premier League appearance with the Knight Riders from Kolkata falling flat with a shoulder injury which also robbed him of possible honours in the 2019 World Cup. However, the selectors kept tab of the pacy Bowler and he eventually made his Test debut against India in Pune.</p>
</body>

</html>

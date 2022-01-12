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


<img class="sticky" src="images/kkr/ar.png" alt="Avatar">


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
<th>Andre Russell</th>
<th>Kolkata Knight Riders</th>
<th>8.5CR</th>
<th>PLAYING</th>
<th>ALL-Rounder</th>
</tr>
</table>


</div></article></section>
<H2>Andre Russell record in IPL</H2>

<p>After shining as a power-hitter for the Caribbean unit, the IPL pundits decided to buy his services for the Jamboree in 2012. Delhi Daredevils were at the fore-front and they fetched him for a whopping sum of 450,000 USD. But sparse chances and injuries restricted his number of games to a handful for the 2012 and 2013 editions.

Year 2014 was when fortunes turned around for the burly hitter as he was roped in by KKR. But even 2014 only saw him compete in a couple of games for the Kolkata side which won the tournament for the second time that year. But the tide changed for good in 2015 and it saw Andre Russell being Man of the Match thrice in that edition of the tourney. His three fifties that season saw him tally 326 runs at an astounding strike-rate of 192. He also starred with the ball and picked up 14 wickets to be adjudged as the MVP of the 2015 IPL.</p>
</body>

</html>

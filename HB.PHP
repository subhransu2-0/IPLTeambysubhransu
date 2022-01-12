<?php
include'upperbar.php';
?>
<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<style>
.myTable { background-color:#e74c3c;border-collapse:collapse;color:#000;font-size:18px; }
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
  color: #5d5e5e;
}

</style>
</head>
<body> 
<section class="cardss">
<article class="cardo" style="background-color:darkred; opacity: 0.78;">
<div class="card-contents">


<img class="sticky" src="images/pk/hb.PNG" alt="Avatar">


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
<th>Harpreet Brar</th>
<th>Punjab Kings</th>
<th>20L</th>
<th>PLAYING</th>
<th>BOWLER</th>
</tr>
</table>
</div></article></section>
<H2>Harpreet Brar record in IPL</H2>
<p>After a 7-year wait. Attending 4 trails, Harpreet Brar finally has an IPL contract. For a long time, he had been knocking the doors of the Punjab franchise and in the 2018 auctions, he was bought for his base price of 20 Lakh. A left-arm orthodox spinner, Harpreet started off for Roopar in the Punjab inter-district cricket tournament and regularly topped the wicket-takers charts. However, once his team was relegated, the 6 feet 2 inches spinner made a move to Mohali on Gurkeerat Singh Maan's insistence and that worked wonders for the youngster. He hasn't put a foot wrong since then and went onto represent Punjab U-23 team. Harpreet has taken 18 wickets and also has scored 206 runs in five matches so far.
</p><p>
The all-rounder was handed a debut against Delhi at the Kotla and played a crucial knock with the bat for his team. Harpreet walked in at a tricky situation when Punjab were six down for 129. They needed a desperate lift in the slog overs and Harpreet came to the fore - struck a quick-fire 12-ball 20 which included two fours and one six. But he couldn't quite reciprocate the same success with the ball having leaked 24 runs off his 2 overs as Punjab threw in the towel.</p>
</body>

</html>

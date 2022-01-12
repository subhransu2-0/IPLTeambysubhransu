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


<img class="sticky" src="images/pk/kr.PNG" alt="Avatar">


<h1>BATSMAN</h1>

<table class="myTable">
<tr>
<th>NAME</th>
<th>TEAM</th>
<th>PRICE</th>
<th>PLAYING STATUS</th>
<th>ROLE</th>


</tr>
<tr>
<th>KL Rahul</th>
<th>Punjab Kings</th>
<th>11CR</th>
<th>PLAYING</th>
<th>BATSMAN</th>
</tr>
</table>
</div></article></section>
<H2>KL Rahul record in IPL</H2>
<p>On the back of his performances in the Syed Mushtaq Ali tournament in 2013, KL Rahul was drafted into the Royal Challengers Bangalore set-up, a line-up which boasted the names of Virat Kohli, AB de Villiers and Chris Gayle. In the following year, he was roped in by Sunrisers Hyderabad for Rs. 1 crore, where he got more opportunities to bat in the top/middle order. He returned to RCB in 2016 and the Karnataka batter proved his mettle in that edition of the Indian Premier League. He piled 397 runs in 14 matches and ended up as the third highest run-getter for his club.</p><P>

Strangely, he wasn’t retained by RCB and Kings XI Punjab took advantage of that in the 2018 IPL auctions. Rahul was bought for Rs. 11 crore, which turned out to be the joint-third highest price for that year. Batting at the top of the order, Rahul proved his worth by amassing 659 runs (average: 54.91, strike-rate: 158.41). He struck six fifties in 14 matches, out of which three were 90+ scores. KL Rahul also holds the record for the fastest IPL fifty (off just 14 balls).</p>
</body>

</html>

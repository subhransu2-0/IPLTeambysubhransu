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


<img class="sticky" src="images/srh/jh.png" alt="Avatar">

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
<th>Jason Holder</th>
<th>SunRisers Hyderabad</th>
<th>75L</th>
<th>PLAYING</th>
<th>ALL-Rounder</th>
</tr>
</table>

</div></article></section>
<H2>Jason Holder record in IPL</H2>

<p>When the players backed out of the India tour in 2014, citing trouble with payment issues, the board axed Dwayne Bravo from the skipper's role and handed it to Holder. His first real assignment came in the away series against South Africa, where his captaincy came under scanner for allowing the hosts to put up 439 in the second game at Wanderers. Nonetheless, West Indies chief selector Clive Lloyd felt that Holder was the best man to lead the Caribbean side during the 2015 World Cup and he continues to do so.</p><p>

Although Holder copped severe criticism for his captaincy, the selectors continued to give him the confidence which worked wonders when the Windies toured England in 2017. Chasing a record 322 runs at Leeds, the Caribbean side surprised themselves with a stunning victory riding on significant contributions from Shai Hope and Kraigg Brathwaite. During the post-match presentations, Hope admitted that Holder reminded him of the feeling of claiming a hundred and cited that as one of the main reasons behind his dogged determination. That win at Leeds was also Windies first Test win in England in 17 years. The Windies eventually lost the series 2-1, but not before giving England a run for their money. Holder, the bowler, excelled leaps and bounds in that series which can be termed as the zenith of his captaincy career.</p>
</body>

</html>

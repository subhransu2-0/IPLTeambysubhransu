<?php
include'upperbar.php';
?>
<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<style>
.myTable { background-color:#2160ff;border-collapse:collapse;color:#000;font-size:18px; }
/*.myTable th { background-color:#2F3F4A;width:50%; }*/
.myTable td, .myTable th { padding:20px;border:0; }
.myTable td { font-family:Georgia, Garamond, serif; border-bottom:1px dotted #BDB76B; }


img.sticky {
  position: -webkit-sticky;
  position: sticky;
  top: 0;
  width: 200px;
  border-radius: 80%;
  background-color: #2160ff;
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
<article class="cardo" style="background-color:darkblue; opacity: 0.78;">
<div class="card-contents">


<img class="sticky" src="images/rr/MV.PNG" alt="Avatar">


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
<th>Manan Vohra</th>
<th>Rajasthan Royals</th>
<th>20L</th>
<th>PLAYING</th>
<th>BATSMAN</th>
</tr>
</table>
</div></article></section>
<H2>Manan Vohra record in IPL</H2>
<p>Impressive domestic performances in the 2012-13 season saw Manan Vohra getting an IPL contract with the Kings XI Punjab, his native franchise. The first two seasons saw him impressing immensely with his shot-making ability. What was striking about Vohra was his skill in manufacturing incredible shots out of
not-so-bad deliveries, almost at will. The brashness of the age meant that there were many rash dismissals but his talent was unquestionable. Despite getting a solid platform to push himself up the ladder in India’s batting department, Vohra failed to consolidate on the gains, enduring below par IPL
seasons thereafter barring 2017 when he had a reasonable season including a sensational innings of 95 against a quality SRH bowling attack.</p><p>Not being a regular starter also hampered Vohra’s growth for a considerable amount of time although this can’t be mentioned as an excuse. Any quality player will tell you that you need to pounce on the limited opportunities in the initial stages to get the luxury of a long rope and this is where Vohra hasn’t
really stamped his authority. A brief stint with Royal Challengers Bangalore in the 2018 season saw no signs of improvement and at the 2019 auctions, Rajasthan Royals picked him in a bid to boost their domestic batting department. Still very young, Vohra has time to turn things around but it remains to be</p>
</body>

</html>

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


<img class="sticky" src="images/rr/cm.jpg" alt="Avatar">


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
<th>Chris Morris</th>
<th>Rajasthan Royals</th>
<th>16.25CR</th>
<th>PLAYING</th>
<th>ALL-Rounder</th>
</tr>
</table>
</div></article></section>
<H2>Chris Morris record in IPL</H2>
<p>During the 2013 IPL auctions, Morris was bought by Chennai Super Kings for US$650,000. He commented that he had \"never seen so much money\". Morris went on to play a vital role in getting Chennai to the final of the IPL where they lost to Mumbai Indians.</p><p>

The IPL continued to remain kind to him, and in 2016, he was signed up for a whopping US$1 million by Delhi Daredevils. On Morris's part, he did justice to that price tag, finishing as their leading wicket-taker that season. Prior to this tournament, Morris had made his Test debut for South Africa in the New Year's Test against England. In the following one-day series, with South Africa 1-2 down and on the brink of losing the fourth ODI as well, Morris turned the match around from out of nowhere and stunned England with his power-hitting. The hosts eventually went on to win that series.</p>
</body>

</html>

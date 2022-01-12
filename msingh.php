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


<img class="sticky" src="images/pk/ms.PNG" alt="Avatar">


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
<th>Mandeep Singh</th>
<th>Punjab Kings</th>
<th>1.4CR</th>
<th>PLAYING</th>
<th>ALL-Rounder</th>
</tr>
</table>
</div></article></section>
<H2>Mandeep Singh record in IPL</H2>
<p>His impressive show in the domestic circuit earned him an IPL contract from Kolkata Knight Riders in 2010, but he could not do much in the three games that he played in that season. He moved to Kings XI Punjab (KXIP) the next season but the story was no different. However, in 2012, he ended IPL-5 as KXIP's highest run-getter and also won the 'Rising Star of the Tournament' award as he piled 432 runs from 16 games in But his numbers fell like a pack of cards in the next season - IPL 2013 - as he averaged only 20 in the 16 games that he played.
</p><p>
The following edition in 2014 saw Mandeep turning up for the Kings only thrice and hence they let him go to RCB for the next season. At RCB, Mandeep could only show glimpses of his brilliance in an envious batting line-up. He missed IPL 2016 due to an injury and barring a couple of handy knocks, he had an ordinary outing in the next season. However, RCB persisted with him and bought him for INR 1.40 crore at the 2018 auctions. As a ‘finisher’, Mandeep scored 252 runs in 14 games. In 2019, he will return to his home franchise as RCB traded him in exchange for Marcus Stoinis</p>
</body>

</html>

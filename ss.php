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
  grid-template-columns: repeat(auto-fill, minmax(1000px, 1fr)); 
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


<img class="sticky" src="images/rr/ll.png" alt="Avatar">


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
<th>Sanju Samson</th>
<th>Rajasthan Royals</th>
<th>8CR</th>
<th>PLAYING</th>
<th>BATSMAN</th>
</tr>
</table>
</div></article></section>
<H2>Sanju Samson record in IPL</H2>
<p>A stylish shotmaker who also keeps wickets, Sanju Samson was initially part of the Kolkata Knight Riders but never got any opportunities there. It was his stint at the Rajasthan Royals that enabled him to showcase his talent to the world. During the 2013-15 phase, he was one of the vital cogs of the RR batting line-up, lending stability with his solid gameplay and also helping them accelerate with his sizzling strokeplay. Temperamental issues aside, Samson was considered a future superstar and his IPL exploits even saw him rise rapidly in the pecking order to be MS Dhoni’s successor.</p><P>

However, over the years, he has never had that breakthrough season which would help him to push his case forward. Often, Samson would start an IPL season with a flurry of impressive scores, only to fizzle out as the tournament progressed. Lack of interest in glovework in domestic cricket set him back considerably and by the time he restarted being a gloveman, he had slipped a lot in the category of India’s wicketkeeper batsmen. A short stint with Delhi further saw Samson exhibiting his strengths but the weaknesses too remained the same over the last five years. He got back to RR at the fresh auctions in 2018 and another underwhelming season ensued after it had began well, again. 2019 wasn't all that different either, and this will frustrate Sanju no end.</p>
</body>

</html>

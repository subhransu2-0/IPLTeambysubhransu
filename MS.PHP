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


<img class="sticky" src="images/pk/mshami.PNG" alt="Avatar">


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
<th>Mohammed Shami</th>
<th>Punjab Kings</th>
<th>4.8CR</th>
<th>PLAYING</th>
<th>BOWLER</th>
</tr>
</table>
</div></article></section>
<H2>Mohammed Shami record in IPL</H2>
<p>Initially part of his home franchise - Kolkata Knight Riders - Mohammed Shami got only a handful of opportunities. Post his impressive international debut, Delhi Daredevils bought him for Rs. 4.25 crore in 2014. Shami has been on the expensive side with the ball in the Indian Premier League and injuries hasn’t helped his cause either. With his IPL economy rate above 9, his 5-year association with Delhi ended as the franchise decided to release him. During the 2019 IPL auctions, Shami was roped in by Kings XI Punjab for Rs 4.40 crore. Having regained his mojo in white-ball cricket, Shami will be a vital cog as KXIP eye their maiden IPL win.</p>
</body>

</html>

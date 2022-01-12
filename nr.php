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


<img class="sticky" src="images/kkr/nr.png" alt="Avatar">


<h1>Batsman</h1>

<table class="myTable">
<tr>
<th>NAME</th>
<th>TEAM</th>
<th>PRICE</th>
<th>PLAYING STATUS</th>
<th>ROLE</th>


</tr>
<tr>
<th>Nitish Rana</th>
<th>Kolkata Knight Riders</th>
<th>3.4CR</th>
<th>PLAYING</th>
<th>Batsman</th>
</tr>
</table>


</div></article></section>
<H2>Nitish Rana record in IPL</H2>

<p>A left-handed batsman with a silken touch, Nitish Rana has been an vital cog in Kolkata Knight Riders' batting strategy, especially at the top of the order. His Indian Premier League (IPL) journey started with the Mumbai Indians (MI) in 2015. In a team that was packed with an overdose of talent, Rana had to wait for his chances, which came in spurts in 2016 and capitulated him into fame in 2017 - where he made 333 runs from 13 matches.
</p><p>
Kolkata Knight Riders (KKR) came calling after he was released from the MI squad - ahead of the 2018 auctions and since then, he has become an integral part of the set-up, grabbing headlines with his match-winning knocks. If there's one negative aspect about Rana - it's his inability to convert his start into a big knock and his tendency to fall away as the season approaches its finale - it happened in MI in 2017 and repeated with KKR in 2018, thereby not letting the talented batsman to knock the doors on national selection.</p>
</body>

</html>

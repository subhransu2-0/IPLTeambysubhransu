<?php
include'upperbar.php';
?>
<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<style>
.myTable { background-color:#ffcd17;border-collapse:collapse;color:#000;font-size:18px; }
/*.myTable th { background-color:#2F3F4A;width:50%; }*/
.myTable td, .myTable th { padding:20px;border:0; }
.myTable td { font-family:Georgia, Garamond, serif; border-bottom:1px dotted #BDB76B; }


img.sticky {
  position: -webkit-sticky;
  position: sticky;
  top: 0;
  width: 200px;
  border-radius: 80%;
  background-color: #fff021;
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
.category__10 {
  background-color: #50c6db;
}
</style>
</head>
<body> 
<section class="cardss">
<article class="cardo" style="background-color:yellow; ">
<div class="card-contents">


<img class="sticky" src="images/csk/rjadeja.png" alt="Avatar">

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
<th>Ravindra Jadeja</th>
<th>Chennai Super Kings</th>
<th>7CR</th>
<th>PLAYING</th>
<th>ALL-Rounder</th>
</tr>
</table>

</div></article></section>
<H2>Ravindra Jadeja  record in IPL</H2>
<p>One of the finest all-rounders, if not the finest, going around, Ravindra Jadeja is nothing short of a captain’s delight on the cricket field. The left-arm spinner can restrict the run flow and his ability to chip in with crucial wickets makes him even more effective. Not to forget, Jadeja can change the course of the game with his batting prowess as well. He’s also a phenomenal fielder, arguably the best going around.

Making his international debut back in 2009, Jadeja didn’t really burst onto the scenes. He was then seen as a one-dimensional bowler who can chip in with his batting skills on odd days. However, things changed a couple of years later. Jadeja worked on his game and became a force to reckon with. The same made him a vital cog of the Indian team across formats.</p>
</body>

</html>

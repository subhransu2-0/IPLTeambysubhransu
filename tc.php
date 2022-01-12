<?php
include'upperbar.php';
?>
<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<style>
.myTable { background-color:#2a75f7;border-collapse:collapse;color:#000;font-size:18px; }
/*.myTable th { background-color:#2F3F4A;width:50%; }*/
.myTable td, .myTable th { padding:20px;border:0; }
.myTable td { font-family:Georgia, Garamond, serif; border-bottom:1px dotted #BDB76B; }


img.sticky {
  position: -webkit-sticky;
  position: sticky;
  top: 0;
  width: 200px;
  border-radius: 80%;
  background-color: #2a75f7;
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
<article class="cardo" style="background-color:skyblue;">
<div class="card-contents">


<img class="sticky" src="images/dc/tc.png" alt="Avatar">


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
<th>Tom Curran</th>
<th>Delhi Capitals</th>
<th>5.25cr</th>
<th>PLAYING</th>
<th>ALL-Rounder</th>
</tr>
</table>

</div></article></section>
<H2>Tom Curran record in IPL</H2>

<p>Tom Curran’s all-round talent and skill doesn’t come as a surprise because cricket runs in his family. Tom’s father played international cricket for Zimbabwe, the youngest brother Sam Curran plays for England too while Ben Curran plays professionally for Northamptonshire.
</p><p>
Tom’s performances as a youngster saw him getting fast-tracked to the England side and he made his international debut in a T20I against the Proteas with an impressive 3/33. By the end of that year, Tom Curran had made his debut for England in all three formats at the age of 22.
</p><p>
Over the years since then, Tom Curran’s variations and skills with the white-ball, and handy batting in the lower-middle order have seen him turn into a regular for England in both the limited-overs formats.
</p><p>
With 42 wickets at an average under 20 over three seasons in the BBL for Sydney Sixers, Tom Curran caught the eye of IPL scouts. Eventually, DC won his services for IPL 2021 with a bid of Rs. 5.25 crore and he’ll be raring to go once the tournament restarts in the UAE.</p>
</body>

</html>

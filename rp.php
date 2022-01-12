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


<img class="sticky" src="images/dc/rp.png" alt="Avatar">


<h1>Bowler</h1>

<table class="myTable">
<tr>
<th>NAME</th>
<th>TEAM</th>
<th>PRICE</th>
<th>PLAYING STATUS</th>
<th>ROLE</th>


</tr>
<tr>
<th>Ripal Patel</th>
<th>Delhi Capitals</th>
<th>20L</th>
<th>PLAYING</th>
<th>Bowler</th>
</tr>
</table>

</div></article></section>
<H2>Ripal Patel record in IPL</H2>

<p>When we saw the white Kookaburra rocket off Ripal Patel’s blade at training sessions we realized why his Gujarat and now Delhi Capitals teammate Axar Patel holds him in such high regard.
</p><p>
Ripal Patel is an explosive middle-order batter (as his T20 career strike rate of almost 190 suggests!) and a handy medium pacer. He made his List A and T20 debuts for Gujarat in 2019 and since then has played 20 matches for his state, contributing with bat and ball.</p>
<p>

It is his first stint with an IPL franchise, and come the second half of the IPL 2021, we’d love to see more of Ripal’s big hits!</p>
</body>

</html>

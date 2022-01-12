<?php
include'upperbar.php';
?>
<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<style>
.myTable { background-color:#213ecf;border-collapse:collapse;color:#000;font-size:18px; }
/*.myTable th { background-color:#2F3F4A;width:50%; }*/
.myTable td, .myTable th { padding:20px;border:0; }
.myTable td { font-family:Georgia, Garamond, serif; border-bottom:1px dotted #BDB76B; }


img.sticky {
  position: -webkit-sticky;
  position: sticky;
  top: 0;
  width: 200px;
  /*border-radius: 80%;*/
  background-color: #50c6db;
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
<article class="cardo" style="background-color:skyblue;">
<div class="card-contents"><H1>Anukul Roy</H1>


<img class="sticky" src="images/mi/aroy.png" alt="Avatar">

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
<th>ANUKUL ROY</th>
<th>MUMBAI INDIANS</th>
<th>20L</th>
<th>PLAYING</th>
<th>ALL-Rounder</th>
</tr>
</table>

</div></article></section>
<h2>Anukul Roy record in IPL</h2>
<p>
  The slow left-armer finished as the joint leading wicket taker in a victorious campaign for India under-19s in the 2018 under-19 World Cup. His 14 wickets came from 6 games at a frugal avera...</p>
<p>
  Being a slow left-armer and a left-handed batsman, it is a no-brainer that Roy looks up to Ravindra Jadeja for inspiration. He himself is a live-wire on the field with a very strong throwing arm. Anukul debuted for Jharkhand in the List-A format after his exploits in the under-19 triumph and was also picked up by Mumbai Indians at the IPL auctions in 2018.
</p>
</body>

</html>

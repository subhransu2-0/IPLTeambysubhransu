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


<img class="sticky" src="images/csk/raina.png" alt="Avatar">

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
<th>Suresh Raina</th>
<th>Chennai Super Kings</th>
<th>11CR</th>
<th>PLAYING</th>
<th>BATSMAN</th>
</tr>
</table>

</div></article></section>
<H2>Suresh Raina record in IPL</H2>
<p>Often called Mr. IPL, Suresh Raina has truly aced the IPL. Raina has been the talisman for the Chennai Super Kings over the years. In nine of the 12 seasons, Raina has aggregated 400-plus runs. His lowest return was 374 runs, in 2015. With an aggregate of 5,368 runs, he is the tournament’s second highest run-scorer. Averaging 33.34, he has hit 38 fifties and one century, with an overall strike rate of 137.14.



Raina missed his first IPL match only in the ninth season due to the birth of his first child. He scored 442 runs for Gujarat Lions in the 10th edition of IPL. Often called ‘Chinna Thala’ by the locals of Tamil Nadu, Raina truly is a urban legend for the franchise.</p>
</body>

</html>

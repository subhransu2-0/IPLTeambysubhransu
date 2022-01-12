<?php
include'upperbar.php';
?>
<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<style>
.myTable { background-color:#ff173e;border-collapse:collapse;color:#000;font-size:18px; }
/*.myTable th { background-color:#2F3F4A;width:50%; }*/
.myTable td, .myTable th { padding:20px;border:0; }
.myTable td { font-family:Georgia, Garamond, serif; border-bottom:1px dotted #BDB76B; }


img.sticky {
  position: -webkit-sticky;
  position: sticky;
  top: 0;
  width: 200px;
  border-radius: 80%;
  background-color: #f5405e;
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
<article class="cardo" style="background-color:darkred;opacity: 0.7;">
<div class="card-contents">


<img class="sticky" src="images/RCB/gmax.png" alt="Avatar">
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
<th>Glenn Maxwell</th>
<th>Royal Challengers Bangalore</th>
<th>14.25CR</th>
<th>PLAYING</th>
<th>ALL-Rounder</th>
</tr>
</table>

</div></article></section>
<H2>Glenn Maxwell  record in IPL</H2>
<p>On the tour to India in 2017, Maxwell was handed a Test comeback in Ranchi and he grabbed the opportunity with both hands, scoring an uncharacteristically patient maiden Test hundred and securing a draw for Australia. He retained his spot for the final Test against India and the subsequent tour to Bangladesh as well. However, with his dipping form, he was dropped from Tests again in favour of Shaun Marsh. He continues to knock on the selectors' door as he made a typically aggressive 278 in the 2017/18 Sheffield Shield, but has clearly failed to nail his spot in the side, perhaps more because of his temperamental ability to consistently do what he did in the Ranchi Test and grind the bowlers out, than due to technical shortcomings. His freak-ish innings of 127 off 102 against New South Wales,after coming in with the scoreline at a sorry 9 for 6, was appreciable, but also highlighted his inability to grind it out, and his tendency to hit his way out of trouble (which happened to work, in this case).</p>
</body>

</html>

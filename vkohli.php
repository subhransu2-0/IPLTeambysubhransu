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


<img class="sticky" src="images/RCB/VHOHLI.png" alt="Avatar">
<h1>CAPTAIN</h1>

<table class="myTable">
<tr>
<th>NAME</th>
<th>TEAM</th>
<th>PRICE</th>
<th>PLAYING STATUS</th>
<th>ROLE</th>


</tr>
<tr>
<th>Virat Kohli</th>
<th>Royal Challengers Bangalore</th>
<th>17CR</th>
<th>PLAYING</th>
<th>Batsman</th>
</tr>
</table>

</div></article></section>
<H2>Virat Kohli  record in IPL</H2>
<p>He continued his emphatic run in the World T20, batting (and running) like a man possessed, thrashing boundaries with ridiculous ease. Despite an 89* in the semi-final against the West Indies (extending his inhuman run of form in the format), India's bowling panicked at a crucial stage. One had to feel sorry for him as he had to make do with the 'Player of the tournament' award for the second successive Twenty20 World Cup; a distinction he would've gladly exchanged for the elusive World T20 trophy. Kohli's thirst for runs showed no signs of slowing down as he looted a small matter of 973 runs during the 2016 edition of the Indian Premier League, the most (by far) by any batsman in the history of the tournament - as he led his Royal Challengers Bangalore (RCB) franchise to a runners-up finish.</p>
</body>

</html>

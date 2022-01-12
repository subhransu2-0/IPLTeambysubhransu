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


<img class="sticky" src="images/csk/itahir.png" alt="Avatar">

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
<th>Imran Tahir</th>
<th>Chennai Super Kings</th>
<th>1CR</th>
<th>PLAYING</th>
<th>BOWLER</th>
</tr>
</table>

</div></article></section>
<H2>Imran Tahir record in IPL</H2>
<p>At 37 years of age, Imran Tahir became the World No.1 bowler in the shortest format of the game. His positivity and never-say-die attitude have been his success mantra all through these years, which is on display, every time he takes to the field. From his customary sprint, after he picks up a wicket to the roars, Tahir’s enthusiasm has kept him going. After representing Delhi Daredevils for two seasons, Tahir was included in the RPS squad for two seasons. The tenth edition of the league saw some match-winning performances by Tahir as he ended up picking 18 wickets in that season. Tahir is now all set to represent Chennai Super Kings.</p>
</body>

</html>

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


<img class="sticky" src="images/kkr/em.png" alt="Avatar">


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
<th>Eoin Morgan</th>
<th>Kolkata Knight Riders</th>
<th>8.5CR</th>
<th>PLAYING</th>
<th>Batsman</th>
</tr>
</table>


</div></article></section>
<H2>Eoin Morgan record in IPL</H2>

<p>The 2015 World Cup humiliation is what inspired Morgan to lead an ODI renaissance, that saw England re-brand itself as New England. The captain's new-age methods found support from Andrew Strauss, who was made the Director of Cricket by the ECB, and together the pair worked diligently to rework the archaic methods that plagued England's ODI mindset for long. Flatter limited-overs pitches were encouraged, players were given more confidence to play freely and an IPL window was opened for the players to try and seek exposure of the big platform. And the transformation has been such that England changed drastically from a conservative limited-overs side to one of the most feared batting units in the world in white-ball cricket.</p>
</body>

</html>

<?php
include'upperbar.php';
?>
<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<style>
.myTable { background-color:#2160ff;border-collapse:collapse;color:#000;font-size:18px; }
/*.myTable th { background-color:#2F3F4A;width:50%; }*/
.myTable td, .myTable th { padding:20px;border:0; }
.myTable td { font-family:Georgia, Garamond, serif; border-bottom:1px dotted #BDB76B; }


img.sticky {
  position: -webkit-sticky;
  position: sticky;
  top: 0;
  width: 200px;
  border-radius: 80%;
  background-color: #2160ff;
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
<article class="cardo" style="background-color:darkblue; opacity: 0.78;">
<div class="card-contents">


<img class="sticky" src="images/rr/yj.PNG" alt="Avatar">


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
<th>Yashasvi Jaiswal</th>
<th>Rajasthan Royals</th>
<th>2.4CR</th>
<th>PLAYING</th>
<th>BATSMAN</th>
</tr>
</table>
</div></article></section>
<H2>Yashasvi Jaiswal record in IPL</H2>
<p>Yashasvi Jaiswal's cricketing journey is an inspiration to many. Coming from a humble background, he waded through struggles to achieve his dreams. The Mumbai lad was in the news for making his entry into the Indian U-19 team for the Sri Lankan tour in August. Coming through the junior cricket ranks, Yashasvi has hit 49 centuries in the last five years, but he wasn't doing that well for the national team.</p><P>

In his first two matches, the youngster could muster paltry scores of 15 and 1, which saw him getting dropped from the side before a hammering 114 in the final helped him cement his place in the side. In the ACC U-19 Asia Cup, Yashasvi has started well by hitting his second ton against Nepal. Through a phenomenal U19 World Cup campaign in 2020, Yashasvi made a massive statement to everyone, that he had indeed arrived. Being picked for the Royals in the IPL was another boost and if he gets chances, the youngster will be keen to make his talent count.</p>
</body>

</html>

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


<img class="sticky" src="images/RCB/abv.png" alt="Avatar">
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
<th>AB de Villiers</th>
<th>Royal Challengers Bangalore</th>
<th>11CR</th>
<th>PLAYING</th>
<th>BATSMAN</th>
</tr>
</table>

</div></article></section>
<H2>AB de Villiers  record in IPL</H2>
<p>AB de Villiers started his Indian Premier League (IPL) career with the Delhi Daredevils franchise (now Delhi Capitals) in 2008. He represented Delhi Daredevils in the first three IPL seasons and scored 671 runs in the three seasons, including a century in the second edition. In 2011, Royal Challengers Bangalore (RCB) bought him for Rs 5 crore and the franchise has not released him since. He has single handedly won his team several matches -- the most famous of his innings was of 18 runs in a Dale Steyn over. In 175 matches so far, he has scored 5053 runs with an average of 41.08 and strike rate of 152.70. He has scored 3 centuries and 40 fifties, his highest score is 133 runs. 
</p><P>
AB de Villiers played his first T20 International match against Australia at The Wanderers Stadium in Johannesburg on February 24, 2006. He scored 1,672 runs in 78 matches at an average of 26.12 and a strike rate of 131.17. He holds the record for scoring the fastest fifty by a South African in T20Is.</p>
</body>

</html>

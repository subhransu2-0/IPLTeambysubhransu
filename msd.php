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


<img class="sticky" src="images/csk/msd.png" alt="Avatar">

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
<th>Mahendra Singh Dhoni</th>
<th>Chennai Super Kings</th>
<th>15CR</th>
<th>PLAYING</th>
<th>BATSMAN</th>
</tr>
</table>

</div></article></section>
<H2>MS Dhoni record in IPL</H2>
<p>MS Dhoni and Chennai Super Kings is a great yellove story. Ever since the Indian Premier League idea spread vigorously among the cricketing fraternity, people wondered which team would pouch the then Indian captain. The Super Kings, run by an organisation that knew the nuances of running sports, knew they wanted a strong leader to lay a strong base and they made a grand opening by bagging Dhoni for a whopping 6 Crore, the highest bid back then. The IPL would be born on April 18, 2008 and on June 1, Dhoni was there leading CSK in the final, albeit in a losing cause in a final-ball finish.</p>
<p>With a mature head on his shoulders and an astute and shrewd cricketing mind, Dhoni was recommended by senior players like Sachin Tendulkar and Rahul Dravid for captaincy after Rahul Dravid stepped down as skipper.</p>
</body>

</html>

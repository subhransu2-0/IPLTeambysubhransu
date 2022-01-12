<?php
include'upperbar.php';
?>
<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<style>
.myTable { background-color:#e69509;border-collapse:collapse;color:#000;font-size:18px; }
/*.myTable th { background-color:#2F3F4A;width:50%; }*/
.myTable td, .myTable th { padding:20px;border:0; }
.myTable td { font-family:Georgia, Garamond, serif; border-bottom:1px dotted #BDB76B; }


img.sticky {
  position: -webkit-sticky;
  position: sticky;
  top: 0;
  width: 200px;
  border-radius: 80%;
  background-color: #e74c3c;
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
  color: #e69509;
}

</style>
</head>
<body> 
<section class="cardss">
<article class="cardo" style="background-color:darkred; opacity: 0.8;">
<div class="card-contents">


<img class="sticky" src="images/srh/dw.png" alt="Avatar">

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
<th>David Warner</th>
<th>SunRisers Hyderabad</th>
<th>9CR</th>
<th>PLAYING</th>
<th>BOWLER</th>
</tr>
</table>

</div></article></section>
<H2>David Warner record in IPL</H2>

<p>One of the most destructive openers across formats, David Warner captained SRH to their maiden tournament win in 2016. He was the second-highest run-scorer for them in their title-winning effort with a monumental 848 runs at a strike rate of 151.42. He had a good IPL season in 2017 as well and returned back strong in 2019 scoring 692 runs in 12 matches. As captain in the 2020 IPL edition, he took Sunrisers Hyderabad to No.3 on the points table and will be looking to clinch the title in 2021.</p>
</body>

</html>

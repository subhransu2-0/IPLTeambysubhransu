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


<img class="sticky" src="images/RCB/msiraj.png" alt="Avatar">
<h1>Bowler</h1>

<table class="myTable">
<tr>
<th>NAME</th>
<th>TEAM</th>
<th>PRICE</th>
<th>PLAYING STATUS</th>
<th>ROLE</th>


</tr>
<tr>
<th>Mohammed Siraj</th>
<th>Royal Challengers Bangalore</th>
<th>2.6CR</th>
<th>PLAYING</th>
<th>Bowler</th>
</tr>
</table>

</div></article></section>
<H2>Mohammed Siraj  record in IPL</H2>
<p>The right-arm quick caught the eyeballs during the 2017 IPL auctions when Sunrisers Hyderabad bought him for INR 2.6 crore from a base price of 20 lakh. He didn't feature much as he got only six games, but he impressed by picking up 10 wickets. However, his erratic bowling nature worked against him as he was let go the next season.</p><p>

Royal Challengers Bangalore trying to form a new team identified Siraj's talent and went after him in the 2018 auctions. They beat four other franchises to land Siraj at Bangalore for INR 2.6 crore. He did not start the first few games but once picked he became Kohli's go-to death bowler and ended the season with 11 scalps and thus ensured he was retained for the following edition.</p>
</body>

</html>

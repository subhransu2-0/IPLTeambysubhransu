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


<img class="sticky" src="images/kkr/hs.png" alt="Avatar">


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
<th>Harbhajan Singh</th>
<th>Kolkata Knight Riders</th>
<th>2CR</th>
<th>PLAYING</th>
<th>Bowler</th>
</tr>
</table>


</div></article></section>
<H2>Harbhajan Singh record in IPL</H2>

<p>In the latter half of his career, Harbhajan's success has been mostly in the IPL where he played a crucial part in the success of the Mumbai franchise who have won the title thrice. He was a regular member of the team since 2008 and even captained the side. He picked up as many as 24 wickets in the 2013 season and played a vital role in Mumbai's maiden title-winning season. He was also very handy with the bat, scoring a 24-ball 64 against Kings XI Punjab in 2015, a match he tried to win after the top-order was blown away.
</p><p>
With time, Harbhajan became a bowler who would be more economical than a really good wicket-taking bowler. After a decade long association, Mumbai released him and he was bought by Chennai Super Kings, for whom he played 13 games in 2018. With more favourable turning tracks at Chepauk, Harbhajan has continued to be a force to reckon with, at least in CSK's home games where he has been strangling opponents.</p>
</body>

</html>

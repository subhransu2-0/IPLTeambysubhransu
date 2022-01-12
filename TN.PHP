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


<img class="sticky" src="images/srh/tn.png" alt="Avatar">

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
<th>T Natarajan</th>
<th>SunRisers Hyderabad</th>
<th>40L</th>
<th>PLAYING</th>
<th>Bowler</th>
</tr>
</table>

</div></article></section>
<H2>T Natarajan record in IPL</H2>

<p>Touted as India's Mustafizur Rahman, KXIP picked him up 3 crores for IPL 2017 after his sterling performances in the domestic season and in the first season of TNPL as well. He played in 6 games in his debut IPL season and picked up 2 wickets. That was anti-climactic but was a good learning curve for someone so raw.</p><P>

Natarajan's early promise was spotted by A Jayaprakash, a division cricketer. Natarajan moved to Chennai and the rest as they say is history. Natarajan missed the 2017-18 season of Ranji season owing to an elbow injury but was still picked up during the 2018 IPL auctions by SRH for 40 lakhs. However, he was benched for the entire season with plenty of experienced campaigners competing for the role.</p>
</body>

</html>

<?php
include'upperbar.php';
?>
<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<style>
.myTable { background-color:#2a75f7;border-collapse:collapse;color:#000;font-size:18px; }
/*.myTable th { background-color:#2F3F4A;width:50%; }*/
.myTable td, .myTable th { padding:20px;border:0; }
.myTable td { font-family:Georgia, Garamond, serif; border-bottom:1px dotted #BDB76B; }


img.sticky {
  position: -webkit-sticky;
  position: sticky;
  top: 0;
  width: 200px;
  border-radius: 80%;
  background-color: #2a75f7;
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
<article class="cardo" style="background-color:skyblue;">
<div class="card-contents">


<img class="sticky" src="images/dc/sd.png" alt="Avatar">


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
<th>Shikhar Dhawan</th>
<th>Delhi Capitals</th>
<th>5.2cr</th>
<th>PLAYING</th>
<th>Batsman</th>
</tr>
</table>

</div></article></section>
<H2>Shikhar Dhawan record in IPL</H2>

<p>Shikhar Dhawan garnered a lot of praise with his outstanding performance in the 2003-04 Under-19 World Cup, scoring 505 runs from seven matches and winning the Player of the Tournament award. However, Dhawan's debut for the senior side was delayed as India already had a strong and steady opening pair. Dhawan impressed everyone as soon as given a chance, showing his hard-hitting skills in limited-overs and eventually making his mark in Tests with the fastest century on debut.
</p><P>
A part of many of India's triumphs, Dhawan soon became the team's reliable opening option. His tremendous success in world events since the 2013 Champions Trophy made him India’s ‘Man for ICC tournaments’. One of his most significant performances came during the 2015 World Cup, where he emerged as India's highest run-getter with 412 runs, a couple of centuries and a half-century.</P><p>

Dhawan has been one of the consistent performers in the IPL and was a part of Delhi's outfit earlier. After representing teams such as Mumbai Indians, Deccan Chargers and Sunrisers Hyderabad, Dhawan came back to his hometown to represent Delhi Capitals in IPL 2019 and racked up 521 runs. In 2020, he upped his game further, going past 600 runs for the season and scoring a century (two back-to-back, in fact) for the first time in his IPL career. He sits atop the run-scorers list after the first half of the 2021 edition, scoring his runs at a significantly better average and strike rate as compared to his career numbers. All of Delhi hopes he can retain the Orange Cap!</p>
</body>

</html>

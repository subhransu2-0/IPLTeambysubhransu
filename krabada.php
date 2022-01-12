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


<img class="sticky" src="images/dc/kr.png" alt="Avatar">


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
<th>Kagiso Rabada</th>
<th>Delhi Capitals</th>
<th>4.2CR</th>
<th>PLAYING</th>
<th>Bowler</th>
</tr>
</table>

</div></article></section>
<H2>Kagiso Rabada record in IPL</H2>

<p>A rhythmic run-up followed by a quick arm action, Kagiso Rabada is known for his thunderbolts with an average speed of over 140kph. His breathtaking performance in the 2014 U-19 World Cup ensured that he was fast-tracked to the senior team, and in the last five years, the 24-year-old has become the leader of the Proteas bowling attack. Rabada was only the second bowler in the history of one-day cricket to have taken a hat-trick on his debut.
</p><p>
Rabada made his IPL debut for the Delhi franchise in 2017, where he was promising in his short stint. He missed the entire 2018 season due to an unfortunate injury. A stronger and more experienced Rabada returned in and set the IPL alight in 2019! He finished only one wicket behind the Purple Cap holder Imran Tahir, despite having played five games fewer. He brought the same form to the UAE in IPL 2020, extending his streak of IPL games with at least one wicket to a staggering 25. With 30 wickets and the Purple Cap, he helped us get to our first ever IPL final in the 2020 edition, and he’ll be back in the latter half of IPL 2021 to breathe some more fire and take us closer to that coveted title.</p>
</body>

</html>

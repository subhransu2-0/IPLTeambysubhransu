<?php
include'upperbar.php';
?>
<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<style>
.myTable { background-color:#213ecf;border-collapse:collapse;color:#000;font-size:18px; }
/*.myTable th { background-color:#2F3F4A;width:50%; }*/
.myTable td, .myTable th { padding:20px;border:0; }
.myTable td { font-family:Georgia, Garamond, serif; border-bottom:1px dotted #BDB76B; }


img.sticky {
  position: -webkit-sticky;
  position: sticky;
  top: 0;
  width: 200px;
  /*border-radius: 80%;*/
  background-color: #50c6db;
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
<article class="cardo" style="background-color:skyblue;">
<div class="card-contents"><H1>SURYAKUMAR YADAV</H1>


<img class="sticky" src="images/mi/syadav.png" alt="Avatar">

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
<th>SURYAKUMAR YADAV</th>
<th>MUMBAI INDIANS</th>
<th>3.2CR</th>
<th>PLAYING</th>
<th>BATSMAN</th>
</tr>
</table>

</div></article></section>
<h2>Suryakumar Yadav record in IPL</h2>
<p>Suryakumar Yadav popularly known by the name of ‘SKY’ is an Indian cricketer who has debuted for team India in limited overs game and plays for IPL franchise Mumbai Indians.
  <h2>Records</h2>
1.Most Expensive uncapped player in 2018 (INR 3.2 crore)<br>
2.Highest run getter in MI in 2018 (512 runs)<br>
3.2nd highest run getter in MI in 2019 (424 runs)<br>
4.3rd highest run getter in MI in 2020 (480 runs)<br>
</p>
</body>

</html>

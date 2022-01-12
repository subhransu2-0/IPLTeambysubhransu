<?php
include 'upperbar.php';
?>
<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<style>
.myTable { background-color:#0F6AFC;border-collapse:collapse;color:#000;font-size:18px; }
/*.myTable th { background-color:#2F3F4A;width:50%; }*/
.myTable td, .myTable th { padding:20px;border:0; }
.myTable td { font-family:Georgia, Garamond, serif; border-bottom:1px dotted #BDB76B; }


img.sticky {
  position: -webkit-sticky;
  position: sticky;
  top: 0;
  width: 200px;
  border-radius: 80%;
  background-color: #0F6AFC;
}
.cardss {
  display: grid;
  grid-template-columns: repeat(auto-fill, minmax(400px, 1fr)); /* see notes below */
  grid-auto-rows: minmax(auto, auto);
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
.about-section {
  padding: 50px;
  text-align: center;
  background-color: #474e5d;
  color: white;
}
</style>
</head>
<body style="background-color: lightpink;"> 
	<div class="about-section">
  <h1>IPL</h1>
  <p>The Indian Premier League (IPL) is a professional men's Twenty20 cricket league, contested by ten teams based out of ten Indian cities.[3] The league was founded by the Board of Control for Cricket in India (BCCI) in 2007. It is usually held between March and May of every year and has an exclusive window in the ICC Future Tours Programme.[4]

The IPL is the most-attended cricket league in the world and in 2014 was ranked sixth by average attendance among all sports leagues.[5] In 2010, the IPL became the first sporting event in the world to be broadcast live on YouTube.[6][7] The brand value of the IPL in 2019 was ₹47,500 crore (US$6.3 billion), according to Duff & Phelps.[8] According to BCCI, the 2015 IPL season contributed ₹1,150 crore (US$150 million) to the GDP of the Indian economy.[9] The 2020 IPL season set a massive viewership record with 31.57 million average impressions and with an overall consumption increase of 23 per cent from the 2019 season.

There have been fourteen seasons of the IPL tournament. The current IPL title holders are the Chennai Super Kings, winning the 2021 season.[10] The venue for the 2020 season was moved due to the COVID-19 pandemic and games were played in the United Arab Emirates.[11][12]</p>
  <!-- <p>Resize the browser window to see that this page is responsive by the way.</p> -->
</div>
<section class="cardss">
<article class="cardo" style="background-color:#80A8E8; opacity: 1;">
<div class="card-contents">


<img class="sticky" src="images/ipllogo	.png" alt="Avatar">

<table >
<tr>
<th>Country:</th>
<td><a href="https://en.wikipedia.org/wiki/India">India</a></td>
</tr>
<tr>
<th>Administrator:</th>
<td><a href="https://en.wikipedia.org/wiki/Board_of_Control_for_Cricket_in_India">BCCI</a></td>
</tr>

<tr>
<th>Format:</th>
<td><a href="https://en.wikipedia.org/wiki/2008_Indian_Premier_League">Twenty20</a></td>
</tr>
<tr>
<th>Latest edition:</th>
<td><a href="https://en.wikipedia.org/wiki/2021_Indian_Premier_League">2021</a></td>
</tr>
<tr>
<th>Next edition:</th>
<td><a href="https://en.wikipedia.org/wiki/2022_Indian_Premier_League">2022</a></td>
</tr>
<tr>
<th>Tournament Format:</th>
<td><a href="https://en.wikipedia.org/wiki/Round-robin_tournament">Double round-robin and playoffs</a></td>
</tr>
<tr>
<th>Number of teams:</th>
<td>10</td>
</tr>
<tr>
<th>Current champion:</th>
<td><a href="https://en.wikipedia.org/wiki/Chennai_Super_Kings">Chennai Super Kings
(4th title)</a></td>
</tr>
<tr>
<th>Most successful:</th>
<td><a href="https://en.wikipedia.org/wiki/Mumbai_Indians">Mumbai Indians (5 titles)</a></td>
</tr>
<tr>
<th>Most runs:</th>
<td><a href="https://en.wikipedia.org/wiki/Virat_Kohli">Virat Kohli (6283)</a></td>
</tr>
<tr>
<th>Most wickets:</th>
<td><a href="https://en.wikipedia.org/wiki/Lasith_Malinga">Lasith Malinga (170)</a></td>
</tr>
<tr>
<th>TV:</th>
<td><a href="https://en.wikipedia.org/wiki/Indian_Premier_League#Broadcasting">List of broadcasters</a></td>
</tr>
<tr>
<th>Website:</th>
<td><a href="https://www.iplt20.com/">iplt20.com</a></td>
</tr>
</table>



</div></article></section>
<p></p>
</body>

</html>

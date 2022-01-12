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


<img class="sticky" src="images/csk/sthakur.png" alt="Avatar">

<h1>BOWLER</h1>



<table class="myTable">
<tr>
<th>NAME</th>
<th>TEAM</th>
<th>PRICE</th>
<th>PLAYING STATUS</th>
<th>ROLE</th>


</tr>
<tr>
<th>Shardul Thakur</th>
<th>Chennai Super Kings</th>
<th>2.6CR</th>
<th>PLAYING</th>
<th>BOWLER</th>
</tr>
</table>

</div></article></section>
<H2>Shardul Thakur  record in IPL</H2>
<p>Thakur's forte in the fast-bowling domain is a little different from what Mumbai, and by extension, India have been used to in their history. Thakur is a hit the deck bowler, getting extra bounce and occasional unpredictable seam movement which makes him practically unplayable at times. Over the years, he has also developed other skills, such as the outswinger, which he is extremely proficient at bowling. With the ability to maintain his seam positions while maintaining his pace, he poses a serious threat to batsmen the world over.</p><P>

His bowling style might not be best suited for T20 cricket as proved by his not-so-glittery IPL career, but he is the kind of asset India would want in off-white attire in the near future. Shardul's career and his success is a testimony to the hard work he has done, and after an impressive start to his limited-overs international career, he certainly looks like a talent to watch out for in future. With his batting being resourceful, especially in powerhitting, India have tended to use Shardul purely to increase batting depth. Which brings in the point that he could become an all-rounder if he wants to. Realistically, it's about being a more complete bowler with the batting an added bonus..</p>
</body>

</html>

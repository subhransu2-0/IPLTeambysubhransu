
<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<style>
.myTable { background-color:#2160ff;border-collapse:collapse;color:#000;font-size:18px; }
/*.myTable th { background-color:#2F3F4A;width:50%; }*/
.myTable td, .myTable th { padding:20px;border:0; }
.myTable td { font-family:Georgia, Garamond, serif; border-bottom:1px dotted #BDB76B; }


img.sticky {
  position: -webkit-sticky;
  position: sticky;
  top: 0;
  width: 200px;
  border-radius: 80%;
  background-color: #2160ff;
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
<article class="cardo" style="background-color:darkblue; opacity: 0.78;">
<div class="card-contents">


<img class="sticky" src="images/rrlogo.jpg" alt="Avatar">


<table class="myTable">
<tr>
<th>Played</th>
<th>Own</th>
<th>Lost</th>
<th>Tied</th>
<th>N/R</th>
<th>IPL OWN</th>


</tr>
<tr>
<th>178</th>
<th>84</th>
<th>86</th>
<th>3</th>
<th>2</th>
<th>1 (2008)</th>
</tr>
</table>

</div></article></section>
<p></p>
</body>

</html>

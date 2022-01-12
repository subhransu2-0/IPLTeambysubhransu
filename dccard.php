
<style type="text/css">
    

    @import url('https://fonts.googleapis.com/css?family=Montserrat:400,500,600,700');

* {
  -webkit-box-sizing: border-box;
    -moz-box-sizing: border-box;
    box-sizing: border-box;
}

body {
  font-family: "Montserrat";
}

a {
  text-decoration: none;
  color: orange;
}

h2 {
  color: #000;
  margin: 2rem 0 .5rem;
  font-size: 1.25rem;
  font-weight: 400;
  text-transform: uppercase;
}

img {
  display: block;
    border: 0;
    width: 100%;
    height: auto;
}

/***************************           Cards            *******************************/

.cards {
  display: grid;
  grid-template-columns: repeat(auto-fill, minmax(250px, 1fr)); /* see notes below */
  grid-auto-rows: minmax(200px, auto);
  grid-gap: 1rem;
}

.card {
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
} /* li item */

.thumbnail img {
  /*fill: #ffffff;*/
  height: 150px;
 /* opacity: .25;
  padding: 0rem;*/
}

.card-content {
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

.panel.card-panel .panel-header {
    background-color: #ffffff;
    font-size: .75rem;
    font-weight: 400;
    height: 25px !important;
}

.panel.card-panel .panel-content {
  -webkit-box-flex: 1;
  -ms-flex: 1;
  flex: 1;
}

.category {
  font-size: .75rem;
  text-transform: uppercase;
}

footer {
  border-top: 2px solid #e7e7e7;
  margin: .5rem 0 0;
  min-height: 30px;
  font-size: .5rem;
}

.category {
    position: static;
    top: 110px;
    mid: 0;
    color: #fff;
   /* background: #e74c3c;*/
    padding: 10px 15px;
    font-size: 14px;
    font-weight: 600;
    text-transform: uppercase;
}

.category__01 {
  background-color: #50c6db;
}

.category__02 {
  background-color: #FFFF00;
}

.category__03 {
  background-color: #f72a2a;
}

.category__04 {
  background-color: #2a9ef7;
}

.category__05 {
  background-color: #8350a0;

}
.category__06 {
  background-color: #f7452a;
}
.category__07 {
  background-color: #8d2af7;
}
.category__08 {
  background-color: #2a83f7;
}
.post-meta {
  margin-top: .5rem;
}


</style>
<section class="cards">
<!--   card 1 -->
  <article class="card " style="background-color:lavenderblush ;">
    <picture class="thumbnail">
        <a href="anrich.php"> <img class="category__04" src="images/dc/an.png" alt="" />
    </picture>
    <div class="card-content">
      <p class="category category__04">Anrich Nortje</p>
      <!-- <h2>&#x1f3c6;2013, 2015, 2017, 2019, 2020</h2> -->
    </a>
   </div><!-- .card-content -->
   
  </article>
<!--   card 2 -->
  <article class="card" style="background-color:lavenderblush ;">
    <picture class="thumbnail">
        <a href="krabada.php"> <img class="category__04" src="images/dc/kr.png" alt="" />
    </picture>
    <div class="card-content">
      <p class="category category__04">Kagiso Rabada</p>
      <!-- <h2>&#x1f3c6;2010, 2011, 2018, 2021</h2> -->
      </a>
   </div><!-- .card-content -->
   
  </article>
<!--   card 3 -->
  <article class="card" style="background-color:lavenderblush ;">
    <picture class="thumbnail">
         <a href="rp.php"><img class="category category__04 " src="images/dc/rp.png" alt="" />
    </picture>
    <div class="card-content">
      <p class="category category__04">Ripal Patel</p>
      <h2></h2>
    </a>
   </div><!-- .card-content -->
  </article>
<!--   card 4 -->
  <article class="card" style="background-color:lavenderblush ;">
    <picture class="thumbnail">
       <a href="sd.php">  <img class="category__04" src="images/dc/sd.png" alt="" />
    </picture>
    <div class="card-content">
      <p class="category category__04">Shikhar Dhawan</p>
      <!-- <h2>&#x1f3c6;2008</h2> -->
      </a>
   </div><!-- .card-content -->
    
  </article>
<!--   card 5 -->
  <article class="card" style="background-color:lavenderblush ;">
    <picture class="thumbnail">
       <a href="tc.php">  <img class="category__04" src="images/dc/tc.png" alt="" />
    </picture>
    <div class="card-content">
      <p class="category category__04">Tom Curran</p>
      <h2></h2>
      </a>
   </div>
  </article><br>
 
</section>

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

.comments {
  margin-left: .5rem;
}
</style>
<section class="cards">
<!--   card 1 -->
  <article class="card " style="background-color:lavenderblush ;">
    <picture class="thumbnail">
        <a href="mi.php"> <img class="category__01" src="images/MIlogo.png" alt="" />
    </picture>
    <div class="card-content">
      <p class="category category__01">MUMBAI INDIANS</p>
      <h2>&#x1f3c6;2013, 2015, 2017, 2019, 2020</h2>
<p><h6>Team strength : 26</h6>
      <h6>Top Batsmans:</h6><br> Rohit Sharma , Kieron Pollard, Chris Lynn, Hardik Pandya
      <h6>Top Bowlers:</h6><br>Jasprit Bumrah,Nathan Coulter-Nile,Adam Milne</p>
      </a>
   </div>
    <footer>
   MUMBAI INDIANS
    </footer>
  </article>
<!--   card 2 -->
  <article class="card" style="background-color:lavenderblush ;">
    <picture class="thumbnail">
        <a href="csk.php"> <img class="category__02" src="images/csklogo.png" alt="" />
    </picture>
    <div class="card-content">
      <p class="category category__02">CHENNAI SUPER KINGS</p>
      <h2>&#x1f3c6;2010, 2011, 2018, 2021</h2>
      <p><h6>Team strength :25</h6>
      <h6>Top Batsmans:</h6><br> MS Dhoni , Suresh Raina, Chris Lynn, Michael Hussey
      <h6>Top Bowlers:</h6><br> Ravichandran Ashwin ,Dwayne Bravo ,Albie Morkel</p>
     
     </a>
   </div><!-- .card-content -->
    <footer>
      CHENNAI SUPER KINGS
    </footer>
  </article>
<!--   card 3 -->
  <article class="card" style="background-color:lavenderblush ;">
    <picture class="thumbnail">
         <a href="rcb.php"><img class="category category__03 " src="images/RCBlogo.png" alt="" />
    </picture>
    <div class="card-content">
      <p class="category category__03">Royal challengers banglore</p>
      <h2></h2>
      <p><h6>Team strength :25</h6>
      <h6>Top Batsmans:</h6><br> Virat Kohli ,Rajat Patidar, Suyash Prabhudessai
      <h6>Top Bowlers:</h6><br> Navdeep Saini ,Yuzvendra Chahal ,Kane Richardson</p>
     </a>
   </div>
    <footer>
      Royal challengers banglore
    </footer>
  </article>
<!--   card 4 -->
  <article class="card" style="background-color:lavenderblush ;">
    <picture class="thumbnail">
       <a href="rr.php">  <img class="category__04" src="images/RRlogo.jpg" alt="" />
    </picture>
    <div class="card-content">
      <p class="category category__04">rajasthan royals</p>
      <h2>&#x1f3c6;2008</h2>
       <p><h6>Team strength :24</h6>
      <h6>Top Batsmans:</h6><br> Chris Morris ,Sanju Samson, Jos Buttler
      <h6>Top Bowlers:</h6><br> Jofra Archer ,Jaydev Unadkat ,Rahul Tewatia</p>
</a>
   </div>
   <footer>Rajasthan Royals</footer>
   
  </article>
<!--   card 5 -->
  <article class="card" style="background-color:lavenderblush ;">
    <picture class="thumbnail">
       <a href="pk.php">  <img class="category__06" src="images/pklogo.png" alt="" />
    </picture>
    <div class="card-content">
      <p class="category category__06">Punjab Kings</p>
      <h2></h2>
         <p><h6>Team strength :25</h6>
      <h6>Top Batsmans:</h6><br> KL Rahul ,Shahrukh Khan, Nicholas Pooran
      <h6>Top Bowlers:</h6><br> Jhye Richardson ,Riley Meredith ,Mohammed Shami</p>
</a>
   </div>
    <footer>
      Punjab Kings
    </footer>
  </article><br>
  <!--   card 6 -->
  <article class="card" style="background-color:lavenderblush ;">
    <picture class="thumbnail">
        <a href="srh.php"> <img class="category__01" src="images/SHlogo.png" alt="" />
    </picture>
    <div class="card-content">
      <p class="category category__01">Sunrisers Hyderabad</p>
      <h2>&#x1f3c6;2016</h2>
         <p><h6>Team strength :25</h6>
      <h6>Top Batsmans:</h6><br> David Warner ,Manish Pandey, Jonny Bairstow
      <h6>Top Bowlers:</h6><br> Rashid Khan ,Bhuvneshwar Kumar ,Shahbaz Nadeem</p>
</a>
   </div>
       <footer>
      Sunrisers Hyderabad
          </footer>
  </article>
  <!--   card 7 -->
  <article class="card" style="background-color:lavenderblush ;">
    <picture class="thumbnail">
        <a href="kkr.php"> <img class="category__07" src="images/kkrlogo.png" alt="" />
    </picture>
    <div class="card-content">
      <p class="category category__07">kolkata knight riders</p>
      <h2>&#x1f3c6;2012, 2014</h2>
          <p><h6>Team strength :25</h6>
      <h6>Top Batsmans:</h6><br>Dinesh Karthik ,Eoin Morgan, Nitish Rana
      <h6>Top Bowlers:</h6><br> Pat Cummins ,Kuldeep Yadav ,Kamlesh Nagarkoti</p>
</a>
   </div><!-- .card-content -->
    <footer>
      Kolkata Knight Riders    </footer>
  </article>
  <!--   card 8 -->
  <article class="card" style="background-color:lavenderblush ;">
    <picture class="thumbnail">
        <a href="dc.php"> <img class="category__08" src="images/dclogo.png" alt="" />
    </picture>
    <div class="card-content">
      <p class="category category__08">delhi capitals</p>
      <h2>Photo Storage</h2>
          <p><h6>Team strength :25</h6>
      <h6>Top Batsmans:</h6><br> Rishabh Pant ,Shimron Hetmyer, Ajinkya Rahane
      <h6>Top Bowlers:</h6><br>R Ashwin,Amit Mishra ,Kagiso Rabada</p>
</a>
   </div>
    <footer>
     Delhi Capitals
    </footer>
  </article>

</section>

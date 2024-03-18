<?php
 
 $conn = mysqli_connect("localhost","root","","tour");

 session_start();

?>

<?php

 $profpic="web/1.jpg";
 $propic="web/footer-bg.jpg";
 $logopic="web/logo1.png";

?>



<!DOCTYPE html>
<html>
<head>
	   <meta charset="utf-8">
	   <meta name="viewport" content="width=device-width, initial-scale=1">
	   <title>Tour</title>
<!--  google font link -->

     <link rel="preconnect" href="https://fonts.googleapis.com">
     <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>

<!-- swiper css link -->

     <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@8/swiper-bundle.min.css"/>

<!-- font awesome cdn link -->
    
     <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css"/>

<!-- font awesome icon link -->

     <link rel="stylesheet" type="text/css" href="https://fontawesome.com/v4.7.0/icons">

<!-- custom css link -->

	   <link rel="stylesheet" type="text/css" href="css/style.css">

</head>

<style>

@import url('https://fonts.googleapis.com/css2?family=Kalam&display=swap');

:root{
	--main-color:#008080;
	--black:#222;
	--white:#fff;
	--light-black:#777;
	--light-white:#fff9;
	--dark-bg:rgba(0,0,0,0.7);
	--light-bg:#eee;
	--border:1px solid var(--black);
	--box-shadow:0 .5rem 1rem rgba(0,0,0,0.1);
	--text-shadow:0 1.5rem 3rem rgba(0,0,0,0.3);
}
	
*{
	font-family: 'Kalam', cursive;
	margin: 0;
	padding: 0;
	box-sizing: border-box;
	outline: none;
	border: none;
	text-decoration: none;
	text-transform: capitalize;
}

html{
  font-size: 55.5%; 
  overflow-x: hidden;
}

html::-webkit-scrollbar{
	width: 1rem;
}

html::-webkit-scrollbar-track{
	background-color: var(--white);
}

html::-webkit-scrollbar-thumb{
	background-color: var(--main-color);
}

/* nav section start */

section{
	padding: 5rem 10%;
}

.btn{
	display: inline-block;
	margin-top: .8rem;
	background: var(--black);
	color: #fff;
	padding: .5rem 2rem;
	border: 0.1rem solid var(--black);
	cursor: pointer;
	font-size: 1.5rem;
}
.btn:hover{
	background: var(--main-color);
	color: var(--white);
}


.heading-title{
	text-align: center;
	margin-bottom: 3rem;
	font-size: 6rem;
	text-transform: uppercase;
	color: var(--black);
}

.header{
	position: sticky;
	top: 0;
	left: 0;
	right: 0;
	z-index: 1000;
	background-color: var(--white);
  display: flex;
	padding-top: 2rem;
	padding-bottom: 2rem;
	box-shadow: var(--box-shadow);
	align-items: center;
	justify-content: space-between;

}

.header .logo img{

	width: 15rem;
	
}

.header .navbar a{
	font-size: 2.5rem;
	margin-left: 1rem;
	color: var(--black);

}

.header .navbar a:hover{
	color: var(--main-color);
}
.header .box{
   width: 100%;
   font-size: 1.6rem;
   color:var(--light-black);
   text-transform: none;
   border: 1px solid var(--black);
}

.btn1{
	display: inline-block;
	margin-top: .1rem;
	background: var(--black);
	color: #fff;
	padding: .5rem 2rem;
	border: 0.1rem solid var(--black);
	cursor: pointer;
	font-size: 1.5rem;
}

#menu-btn{
	font-size: 2.5rem;
	cursor: pointer;
	color: var(--black);
}

/* nav section end */

/* home section start */

.home{
	background-image:linear-gradient(rgba(0,0,0,0.2),rgba(0,0,0,0.4)),url('<?php echo $profpic ?>');
	background-size: cover;
	background-position: center;
}

header{
	width: 100%;
	height: 80vh;
	display: flex;
	color: white;
	justify-content: center;
	align-items: center;
	text-align: center;
}

main h3{
	font-size: 35px;
	font-weight: 400; 
	letter-spacing: 3px;
	text-shadow: 1px 1px 2px black;
}
main h1{
	margin: 30px 0 20px 0;
	font-size: 55px;
	font-weight: 800;
	text-shadow: 2px 1px 5px black;
	text-transform: uppercase;
	word-spacing: 5px;
}

main p{
	font-size: 25px;
	word-spacing: 2px;
	margin-bottom: 50px;
	text-shadow: 1px 1px 1px black;
}

main a,button{
	padding: 12px 30px;
	border-radius: 4px;
	outline: none;
	text-transform: uppercase;
	font-size: 13px;
	font-weight: 500;
	text-decoration: none;
	letter-spacing: 1px;
}

main a i{
	padding: 15px;
}
.change_content:after{
	content: '';
	animation: changetext 10s infinite linear;
	color: var(--main-color);
	word-spacing: 5px;
}


@keyframes changetext{
	 0%{content: "Delhi";}
	10%{content: "Goa";}  
	20%{content: "Aasam";}
	30%{content: "Rajasthan";}
	40%{content: "Kerala";}
	50%{content: "Gujarat";}
	60%{content: "Himachal-Pradesh";}
	70%{content: "Maharashtra";}
	80%{content: "West-Bengal";}
	90%{content: "Sikkim";}
 100%{content:"Jammu-kashmir";}
}


.modal {
  display: none; /* Hidden by default */
  position: fixed; /* Stay in place */
  z-index: 1; /* Sit on top */
  padding-top: 100px; /* Location of the box */
  left: 0;
  top: 0;
  width: 100%; /* Full width */
  height: 100%; /* Full height */
  overflow: auto; /* Enable scroll if needed */
  background-color: rgb(0,0,0); /* Fallback color */
  background-color: rgba(0,0,0,0.4); /* Black w/ opacity */
}

/* Modal Content */
.modal-content {
  background-color: #fefefe;
  margin: auto;
  padding: 20px;
  border: 1px solid #888;
  width: 40%;
  height: 50%;
}

/* The Close Button */
.close {
  color: #aaaaaa;
  float: right;
  font-size: 28px;
  font-weight: bold;
}

.close:hover,
.close:focus {
  color: #000;
  text-decoration: none;
  cursor: pointer;
}

/* home section end */

/* service section start */

.services .box-container{
	display: grid;
	grid-template-columns: repeat(auto-fit, minmax(16rem, 1fr));
	gap:1.5rem;
}

.services .box-container .box{
	padding: 3rem 2rem;
	text-align: center;
	background: var(--main-color);
	cursor: pointer;
	color: var(--black);
}

.services .box-container .box:hover{
	background: var(--black);
}

.services .box-container .box style{
  height: 80rem;
}

.services .box-container .box h3{
	color: var(--white);
	font-size: 1.7rem;
	padding-top: 1rem;
}

/* service section end */

/* about section start */

.home-about{
	display: flex;
	align-items: center;
	flex-wrap: wrap;
}

.home-about .image{
	flex: 1 1 41rem;

}

.home-about .image img{
	width: 100%;
}

.home-about .content{
	flex: 1 1 41rem;
	padding: 3rem;
	background: var(--light-bg);
}

.home-about .content h3{
	font-size: 3rem;
	color: var(--black);
}

.home-about .content p{
	font-size: 1.5rem;
	padding: 1rem 0;
	line-height: 2;
	color: var(--black);
}

/* about section end */

/* package section start */

.home-packages{
	background: var(--light-bg);
}

.home-packages .box-container{
  display: inline-grid;
	grid-template-columns: repeat(auto-fit, minmax(30rem, 1fr));
	padding: 10px;
}

.home-packages .box-container .box{
	border: var(--border);
	box-shadow: var(--box-shadow);
	background: var(--white);
}

.home-packages .box-container .box .image{
	height: 25rem;
	overflow: hidden;
	
}

.home-packages .box-container .box .image img{
	width: 336px;
	height: 300px;
	object-fit: cover;
	transition: .2s linear;
}

.home-packages .box-container .box .content{
	padding: 2rem;
	text-align: left;
}

.home-packages .box-container .box .content h3{
	font-size: 2.5rem;
	color: var(--black);
}

.home-packages .box-container .box .content h4{
	font-size: 1.5rem;
	color: var(--black);
}


/* package section end */

/* offer section statr */

.home-offer{
	text-align: center;
}

.home-offer .content{
	max-width: 50rem;
	margin: 0 auto;
}

.home-offer .content h3{
	font-size: 3rem;
	color: var(--black);
}

.home-offer .content p{
	font-size: 1.5rem;
	color: var(--light-black);
}

/* offer section end */


/* footer section end */

.footer{
	background-image:linear-gradient(rgba(0,0,0,0.3),rgba(0,0,0,0.1)),url('<?php echo $propic ?>');
	background-size: cover;
	background-position: center;
	
}

.footer .box-container{
	display: grid;
	grid-template-columns: repeat(auto-fit, minmax(15rem, 1fr));
	gap:3rem;
}

.footer .box-container .box h3{
	color: var(--white);
	font-size: 2.5rem;
	padding-bottom: 2rem;
}

.footer .box-container .box a{
	color: var(--light-white);
	font-size: 1.5rem;
	padding-bottom: 1rem;
	display: block;
}

.footer .box-container .box a i{
	color: var(--main-color);
	padding-right: .5rem;
	transition: .2s linear;
}

.footer .box-container .box a:hover i{
	
	padding-right: 2rem;
	
}

.footer .credit{
	text-align: center;
	padding-top: 3rem;
	margin-top: 3rem;
	border-top: .1rem solid var(--light-white);
	font-size: 2rem;
	color: var(--white);
}

.footer .credit span{
	color: var(--main-color);
}

.icon{
	font-size: 70px;
}

.itext h4{
	font-size: 18px;
}

.itext h5{
	font-size: 15px;
}

.ibtn a{
	display: inline-block;
	margin-top: .8rem;
	background: var(--black);
	color: #fff;
	padding: .5rem 2rem;
	border: 0.1rem solid var(--black);
	cursor: pointer;
	font-size: 1.5rem;
}
.ibtn a:hover{
	background: var(--main-color);
	color: var(--white);
}




/* footer section end */

</style>


<!-- header section start -->


<section class="header">

<?php

$r_id = $_REQUEST['r_id'];

$sql = "select name, email_id from registration_table where r_id=".$r_id;

$result = mysqli_query($conn,$sql);
while($row = mysqli_fetch_array($result)){

?>
	
  <a href="#" class="logo"><img src="web/.png" alt=""></a>
      
     <form action="search.php" method="post">
     	<div class="box">
           <input type="text" name="search" placeholder="Search...">
           <input type="hidden" value="<?php echo $r_id;?>" class="btn" name="r_id">
           <input type="submit" value="search" class="btn1" name="submit">  
        </div>  
     </form>
     

   <nav class="navbar">
   	   <a href="<?php echo "user_page.php?r_id=".$r_id.""?>">Home</a>
   	   <a href="<?php echo "about.php?r_id=".$r_id.""?>">About</a>
   	   <a href="<?php echo "package.php?r_id=".$r_id.""?>">Package</a>
   	   <a href="login.php">logout</a>
   	   <a href="#" id="myBtn" class="fas fa-user"></a>

<!-- The Modal -->
<div id="myModal" class="modal">

  <!-- Modal content -->
  <div class="modal-content">
    <span class="close">&times;</span>
    <div class="icon">
    <i class="fa fa-user-circle" aria-hidden="true"></i>
  </div>
  <div class="itext">
    <h4><?php echo $row['email_id']?></h4>
    <h5><?php echo $row['name']?></h5>
    <a href="<?php echo "view_book_package.php?r_id=".$r_id.""?>" class="ibtn">view</a>
  </div>
    <br>
</div>

</div>

   </nav>
   <!-- Trigger/Open The Modal -->

<?php 

}

?> 

</section>

<!-- header section ends -->

<!-- home section start -->


<section class="home">
  <header>
	  <main>
		  <h3>Welcome To India</h3>
			<h1> Do Come & Visit <span class="change_content"> </span> </h1>
			<p>"India once is not enough"</p>
		</main>	
	</header>
</section>

<!-- home section end -->


<!-- services section start -->

<section class="services">

   <h1 class="heading-title"> our services </h1>

   <div class="box-container">

      <div class="box">
         <img src="web/icon-1.png" alt="">
         <h3>adventure</h3>
      </div>

      <div class="box">
         <img src="web/icon-2.png" alt="">
         <h3>tour guide</h3>
      </div>

      <div class="box">
         <img src="web/icon-3.png" alt="">
         <h3>trekking</h3>
      </div>

      <div class="box">
         <img src="web/icon-4.png" alt="">
         <h3>camp fire</h3>
      </div>

      <div class="box">
         <img src="web/icon-5.png" alt="">
         <h3>off road</h3>
      </div>

      <div class="box">
         <img src="web/icon-6.png" alt="">
         <h3>camping</h3>
      </div>

   </div>

</section>


<!--services section ends -->

<!--about section ends -->

<section class="home-about">

	<div class="image">
		<img src="web\cople.jpg" alt="">
	</div>

	<div class="content">
		<h3>about us</h3>
		<p>Tour and travel System is an implementation of a managing Tour website which helps the customers to see availability of tourist places, along with the different packages available.<br>
        The Tour and travel System is a web based application.<br>
        Tour and travel System only have india best places.<br>
        The project is designed with MySQL Server as backend.
        </p>
        <a href="about.php" class="btn">read more</a>
    </div>
	
</section>

<!--about section ends -->


<!-- package section start -->

<section class="home-packages">

<?php


$qry = "Select * from state_table";
$result = mysqli_query($conn,$qry);

while($row = mysqli_fetch_array($result))


echo "
  <div class=\"box-container\">
		
    <div class=\"box\">
    	<div class=\"image\">
    		<img src =".$row[2].">
    	</div>
    	<div class=\"content\">
    		<h3><i class=\"fas fa-map-marker-alt\"></i> "  . $row[1] . " </h3>
    		
    		<a href=\"view.php?state_id=".$row[0]."&r_id=".$r_id."\" class=\"btn\">view more</a>
    	</div>
    </div>

	</div>
"

?>

</section>


<!--package section ends -->


<!--offer section strat -->

<section class="home-offer">
	
  <div class="content">
  	
    <h3>Upto 50% off</h3>
    <p>Tour and travel System is an implementation of a managing Tour website which helps the customers to see availability of tourist places, along with the different packages available.</p>
    <a href="book.php" class="btn">book now</a>

  </div>

</section>

<!--offer section ends -->

<!-- footer section start -->

<section class="footer">
	
  <div class="box-container">
  	
      <div class="box">
      	<h3>quick links</h3>
         <a href="user_page.php"> <i class="fas fa-angle-right"></i>Home</a>
          <a href="about.php"> <i class="fas fa-angle-right"></i>About</a>
          <a href="package.php"> <i class="fas fa-angle-right"></i>Package</a>
          <a href="package.php"> <i class="fas fa-angle-right"></i>Book</a>
          <a href="logout.php"> <i class="fas fa-angle-right"></i>Logout</a>
      </div>

      <div class="box">
      	<h3>extra links</h3>
          <a href="#"> <i class="fas fa-angle-right"></i>Ask question</a>
   	      <a href="#"> <i class="fas fa-angle-right"></i>About us</a>
   	      <a href="#"> <i class="fas fa-angle-right"></i>Privacy policy</a>
   	      <a href="#"> <i class="fas fa-angle-right"></i>terms of use</a>
      </div>

      <div class="box">
      	<h3>Contact info</h3>
          <a href="#"> <i class="fas fa-phone"></i> +123-456-7890</a>
   	      <a href="#"> <i class="fas fa-phone"></i> +111-222-3333</a>
   	      <a href="#"> <i class="fas fa-envelope"></i> yash2964@gmail.com</a>
   	      <a href="#"> <i class="fas fa-map"></i> Gujarat, India - 400104</a>
      </div>

      <div class="box">
      	<h3>follow us</h3>
          <a href="#"> <i class="fab fa-facebook-f"></i> facebook</a>
   	      <a href="#"> <i class="fab fa-twitter"></i> twitter</a>
   	      <a href="#"> <i class="fab fa-instagram"></i> instagram</a>
      </div>
 </div>

 <div class="credit"> Created by <span>Yash Patel</span></div>

</section>


<!-- footer section ends -->


<script>
// Get the modal
var modal = document.getElementById("myModal");

// Get the button that opens the modal
var btnn = document.getElementById("myBtn");

// Get the <span> element that closes the modal
var span = document.getElementsByClassName("close")[0];

// When the user clicks the button, open the modal 
btnn.onclick = function() {
  modal.style.display = "block";
}

// When the user clicks on <span> (x), close the modal
span.onclick = function() {
  modal.style.display = "none";
}

// When the user clicks anywhere outside of the modal, close it
window.onclick = function(event) {
  if (event.target == modal) {
    modal.style.display = "none";
  }
}
</script>


</body>
</html>
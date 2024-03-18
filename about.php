<?php

$profpic="web/footer-bg.jpg";
$propic="web/header-bg-1.png";
$r_id = $_REQUEST['r_id'];

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
	margin-left: 2rem;
	color: var(--black);

}

.header .navbar a:hover{
	color: var(--main-color);
}


#menu-btn{
	font-size: 2.5rem;
	cursor: pointer;
	color: var(--black);
	display: none;
}

.heading{
	
	height: 100%;
	background-attachment: fixed;
	background-size: cover !important;
	background-position: center !important;
	padding-top: 10rem;
	padding-bottom: 15rem;
	display: flex;
	align-items: center;
	justify-content: center;
}

.heading h1{
	font-size: 6rem;
	text-transform: uppercase;
	color: var(--white);
	text-shadow: var(--text-shadow);
}


/* nav section end */

/*header section start */



.about{
	display: flex;
	align-items: center;
	flex-wrap: wrap;
	gap: 3rem;
}

.about .image{
	flex: 1 1 41rem;
}

.about .image img{
	width: 100%;
	height: 500px;
}

.about .content{
	flex: 1 1 41rem;
	text-align: center;
}

.about .content h3{
	font-size: 3rem;
	color: var(--black);
}

.about .content p{
	font-size: 1.5rem;
	color: var(--light-black);
	line-height: 2;
	padding: 1rem 0;
}

.about .content .icons-container{
	margin-top: 2rem;
	display: flex;
	flex-wrap: wrap;
	gap: 1.5rem;
	align-items: flex-end;
}

.about .content .icons-container .icons{
	background: var(--light-bg);
	padding: 2rem;
}

.about .content .icons-container .icons i{
	font-size: 1rem;
	margin-bottom: 1rem;
	color: var(--main-color);
}

.about .content .icons-container .icons span{
	font-size: 1.5rem;
	color: var(--light-black);
}

/*header section end */

/* footer section start */

.footer{
	background-image:linear-gradient(rgba(0,0,0,0.3),rgba(0,0,0,0.1)),url('<?php echo $profpic ?>');
	background-size: cover;
	background-position: center;
	background-attachment: fixed;
	
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

/* footer section end */

</style>

<!-- header section start -->

<section class="header">
	
  <a href="#" class="logo"><img src="web/.png" alt=""></a>

   <nav class="navbar">
      <a href="<?php echo "user_page.php?r_id=".$r_id.""?>">Home</a>
   	   <a href="<?php echo "about.php?r_id=".$r_id.""?>">About</a>
   	   <a href="<?php echo "package.php?r_id=".$r_id.""?>">Package</a>
   	   <a href="login.php">logout</a>
   </nav>

   <div id="menu-btn" class="fas fa-bars"></div>

</section>

<!-- header section ends -->


<div class="heading" style="background:url('<?php echo $propic ?>') no-repeat">
   <h1>about us</h1>
</div>

<!-- about section start -->
<section class="about">

	<div class="image">
		<img src="web\cople.jpg" alt="">
	</div>

	<div class="content">
		<h3>why choose us?</h3>
		<p>Tour and travel System is an implementation of a managing Tour website which helps the customers to see availability of tourist places, along with the different packages available.<br>
    The Tour and travel System is a web based application.<br>
    Tour and travel System only have india best places.<br>
    The project is designed with MySQL Server as backend.
    </p>
    <p>Tour and travel System is an implementation of a managing Tour website which helps the customers to see availability of tourist places, along with the different packages available.</p>
    <div class="icons-container">
    	<div class="icons">
    		<i class="fas fa-map"></i>
    		<span>top destinations</span>
    	</div>
    	<div class="icons">
    		<i class="fas fa-hand-holding-usd"></i>
    		<span>affordable price</span>
    	</div>
    	<div class="icons">
    		<i class="fas fa-headset"></i>
    		<span>24/7 guide service</span>
    	</div>
    </div>
	</div>

</section>


<!-- about section end -->







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
<!-- swiper js file -->

	<script src="https://cdn.jsdelivr.net/npm/swiper@8/swiper-bundle.min.js"></script>

<!-- custom js file -->

	<script src="js/script.js"></script>
</body>
</html>
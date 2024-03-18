<?php

$conn = mysqli_connect("localhost","root","","tour");
?>
<?php

$r_id = $_REQUEST['r_id'];

?>
<?php

$profpic="web/footer-bg.jpg";


?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title></title>
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

/* nav section end */

/* form section srtat */
	
.form-container{
	min-height: 100vh;
	display: flex;
	align-items: center;
	justify-content: center;
	padding: 20px;
	padding-bottom: 60px;
	background: #eee;
}

.form-container form{
  padding: 20px;
  border-radius: 5px;
  box-shadow: 0 5px 10px rgba(0, 0, 0, .1);
  background: #fff;
  text-align: center;
  width: 500px;
}

.form-container form h3{
	font-size: 30px;
	text-transform: uppercase;
	margin-bottom: 10px;
	color: #333;
}

.form-container form input,
.form-container form select{
  width: 100%;
	padding: 7px 7px;
	font-size: 15px;
  margin: 8px 0;
  background: #eee;
  border-radius: 5px;
}

.form-container form select option{
	background: #fff;
}

.form-container form .form-btn{
	background: rgba(0, 0, 0, 0.4);
	color: black;
	text-transform: capitalize;
	font-size: 17px;
	cursor: pointer;
}

.form-container form .form-btn:hover{
	background: black;
	color: #fff;
}

.form-container form p{
	margin-top: 10px;
	font-size: 15px;
	color: #333;
}

.form-container form p a{
	color: black;
}

.form_container form .error-msg{
	margin: 10px 0;
	display: block;
	background: black;
	color: #fff;
	border-radius: 5px;
	font-size: 15px;
	padding: 10px;
}

/* form section end */

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

<body>

<!-- header section start -->

<section class="header">
	
  <a href="#" class="logo"><img src="web/.png" alt=""></a>

   <nav class="navbar">
       <a href="user_page.php">Home</a>
   	   <a href="about.php">About</a>
   	   <a href="package.php">Package</a>
   	   <a href="login.php">Login</a>
   </nav>

   <div id="menu-btn" class="fas fa-bars"></div>

</section>


<section class="form">

	<div class="form-container">
<?php

$state_id = $_REQUEST['state_id'];

$qry = "Select * from state_table where state_id=".$state_id;
$result = mysqli_query($conn,$qry);

while($row = mysqli_fetch_array($result)){
	?>

	<form method="post" action="state_query.php">
          <input type="text" name="state_name" value="<?php echo $row['state_name'] ?>" >
          <input type="email_id" name="state_image" value="<?php echo $row['state_image'] ?>">
          
   <input type="hidden" value="<?php echo $r_id;?>" class="btn" name="r_id">
   <input type="hidden" value="<?php echo $state_id;?>" class="btn" name="state_id">

  
  <button type="submit" name="update" class="btn">Update User</button>
</form>
<?php
}

?>
</div>
</section>

<!-- footer section start -->

<section class="footer">
	
  <div class="box-container">
  	
      <div class="box">
      	<h3>quick links</h3>
          <a href="user_page.php"> <i class="fas fa-angle-right"></i>Home</a>
   	      <a href="about.php"> <i class="fas fa-angle-right"></i>About</a>
   	      <a href="package.php"> <i class="fas fa-angle-right"></i>Package</a>
   	      <a href="login.php"> <i class="fas fa-angle-right"></i>Login</a>
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

<!-- footer section end -->

</section>

</body>
</html>
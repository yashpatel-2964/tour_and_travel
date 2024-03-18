<?php

$profpic="web/footer-bg.jpg";


?>

<?php

$conn = mysqli_connect("localhost","root","","tour");


if (isset($_POST['submit']))
 {
    $name = $_POST['name'];
    $email_id = $_POST['email_id'];
    $password = $_POST['password'];
    $state = $_POST['state'];
    $city = $_POST['city'];
    $pincode = $_POST['pincode'];
    $contact_number = $_POST['contact_number'];
    $user_type = $_POST['user_type'];
    
    

    	$insert_sql = "INSERT INTO registration_table(name,email_id,password,state,city,pincode,contact_number,user_type) VALUES('$name','$email_id','$password','$state','$city','$pincode','$contact_number','$user_type')";
        $res = mysqli_query($conn,$insert_sql);
        header('location:login.php');
 };

?>



<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>register form</title>

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

<!-- header section end -->

<!-- form section start -->

<section class="form">

	<div class="form-container">
		
        <form action="" method="post">
        	<h3>Register now</h3>
        	<?php
               if(isset($error)){
               	foreach($error as $error){
               		echo '<span class="error-msg">'.$error.'</span>';
               	};
              };
            ?>
        	<input type="text" name="name" required placeholder="enter your name">
        	<input type="email_id" name="email_id" required placeholder="enter your email_id">
        	<input type="password" name="password" required placeholder="enter your password">
        	<input type="state" name="state" required placeholder="enter your state">
        	<input type="city" name="city" required placeholder="enter your city">
        	<input type="pincode" name="pincode" required placeholder="enter your pincode">
        	<input type="contact_number" name="contact_number" required placeholder="enter your contact_number">
            <select name="user_type">
        		<option value="user">User</option>
        		<option value="admin">Admin</option>
        	</select>


        	<input type="submit" name="submit" value="Register now" class="form-btn">
        	<p>already have an account? <a href="login.php"> Login now</a></p>
        </form>

	</div>
</section>

<!-- form section end -->

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
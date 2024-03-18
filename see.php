<?php
 
$conn = mysqli_connect("localhost","root","","tour");   
 
?>
<?php

session_start();

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
  --main-color:#8e44ad;
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

.btn{display: inline-block;
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

/* detail section start */

.home-about{
  display: flex;
  align-items: center;
  flex-wrap: wrap;
}

.home-about .image{
  flex: 1 1 41rem;

}

.home-about .image img{
  width: 450px;
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

/* detail section end */

</style>
<body>

<!-- header section start -->
<?php

$r_id = $_REQUEST['r_id'];

?>

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

<!-- detail section start -->

<section class="home-about">

<?php


$package_id = $_REQUEST['package_id'];



$qry1 = "select i.image_path, pd.day_description from image_table i,packa_table p, package_d_table pd where p.package_id=pd.package_id and i.image_id=pd.image_id and p.package_id=".$package_id;

$result = mysqli_query($conn, $qry1);
while($row = mysqli_fetch_array($result))

echo "
  <section class=\"home-about\">
   
     <div class=\"image\">
       <img src=".$row['image_path'].">
     </div>

     <div class=\"content\">
   
       <p>".$row['day_description']."</p>
       <a href=\"book.php?package_id=".$package_id."&r_id=".$r_id."\" class=\"btn\">book now</a>

     </div>
  
  </section>
"
?>

<!-- detail section end -->

</section>

</body>
</html>
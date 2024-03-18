<?php

$conn = mysqli_connect("localhost","root","","tour");

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
    font-size: 80%; 
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

section{
	padding: 2rem 1%;
}

.btn{
	display: inline-block;
	margin-top: .3rem;
	background: var(--black);
	color: #fff;
	padding: .5rem 2rem;
	border: 0.1rem solid var(--black);
	cursor: pointer;
	font-size: 1rem;
}
.btn:hover{
	background: var(--main-color);
	color: var(--white);
}

.heading-title{
	text-align: center;
	margin-bottom: 2rem;
	font-size: 3rem;
	text-transform: uppercase;
	color: var(--black);
}

table{
	font-family: arial, sans-serif;
	border-collapse: collapse;
	width: 100%;
}

td,th{
	border: 1px solid #dddddd;
	text-align: left;
	padding: 8px;
}

.act{
	text-align: center;
}

tr:nth-child(even){
	background: #dddddd;
}


</style>
<body>

<section class="registration">

<h1 class="heading-title"> Registration </h1>


<table>
	
	<tr>
		<th>Reg_id</th>
		<th>Name</th>
		<th>Email</th>
		<th>Password</th>
		<th>State</th>
		<th>City</th>
		<th>Pincode</th>
		<th>Contact Number</th>
		<th colspan="2" class="act">Actions</th>
		
	</tr>

<?php

$qry = "Select * from registration_table";
$result = mysqli_query($conn,$qry);

while($row = mysqli_fetch_array($result))

echo"
	<tr>
		<td>".$row[0]."</td>
		<td>".$row[1]."</td>
		<td>".$row[2]."</td>
		<td>".$row[3]."</td>
		<td>".$row[4]."</td>
		<td>".$row[5]."</td>
		<td>".$row[6]."</td>
		<td>".$row[7]."</td>
		<td><a href='delete.php?r_id=" . $row['r_id'] . "' class=\"btn\">Delete</a></td>
		<td><a href='form.php?r_id=" . $row['r_id'] . "' class=\"btn\">Edit</a></td>
	</tr>
	"
?>
</table>
</section>

<section class="Package">

<h1 class="heading-title"> Package </h1>


<table>
	<tr>
		<th>Package_id</th>
		<th>Package_name</th>
		<th>price</th>
		<th>Day_night</th>
		<th>image</th>
		<th colspan="3" class="act">Actions</th>
		
	</tr>

<?php

$qry = "Select * from packa_table";
$result = mysqli_query($conn,$qry);

while($row = mysqli_fetch_array($result))

echo"
	<tr>
		<td>".$row['package_id']."</td>
		<td>".$row['package_name']."</td>
		<td>".$row['price']."</td>
		<td>".$row['day_night']."</td>
		<td>".$row['image']."</td>
		<td><a href = \"form.php?package_id=".$row[0]."\" class=\"btn\">Update</a></td>
		<td><a href = \"procces.php\" class=\"btn\">Delete</a></td>
		<td><a href = \"delete.php\" class=\"btn\">Add</a></td>
	</tr>
	"
?>
</table>
</section>

<section class="Package_detail">

<h1 class="heading-title"> Package_d_table </h1>


<table>
	<tr>
		<th>Package_d_id</th>
		<th>day_description</th>
		<th>package_id</th>
		<th>image_id</th>
		<th colspan="3" class="act">Actions</th>
		
	</tr>

<?php

$qry = "Select * from package_d_table";
$result = mysqli_query($conn,$qry);

while($row = mysqli_fetch_array($result))

echo"
	<tr>
		<td>".$row['package_d_id']."</td>
		<td>".$row['day_description']."</td>
		<td>".$row['package_id']."</td>
		<td>".$row['image_id']."</td>
		<td><a href = \"package-update.php?package_id=".$row[0]."\" class=\"btn\">Update</a></td>
		<td><a href = \"delete.php\" class=\"btn\">Delete</a></td>
		<td><a href = \"delete.php\" class=\"btn\">Add</a></td>
	</tr>
	"
?>
</table>
</section>

<section class="image">

<h1 class="heading-title"> image_table </h1>


<table>
	<tr>
		<th>image_id</th>
		<th>image_path</th>
		<th colspan="3" class="act">Actions</th>
		
	</tr>

<?php

$qry = "Select * from image_table";
$result = mysqli_query($conn,$qry);

while($row = mysqli_fetch_array($result))

echo"
	<tr>
		<td>".$row['image_id']."</td>
		<td>".$row['image_path']."</td>
		<td><a href = \"package-update.php?package_id=".$row[0]."\" class=\"btn\">Update</a></td>
		<td><a href = \"delete.php\" class=\"btn\">Delete</a></td>
		<td><a href = \"delete.php\" class=\"btn\">Add</a></td>
	</tr>
	"
?>
</table>
</section>
</body>
</html>
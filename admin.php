<?php

$conn = mysqli_connect("localhost","root","","tour");
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width,initial-scale=1,maximum-scale=1">
    <title>Modern Admin Dashboard</title>
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="https://maxst.icons8.com/vue-static/landings/line-awesome/line-awesome/1.3.0/css/line-awesome.min.css">
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
<style type="text/css">

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
  --color-dark: #008080;
  --text-grey: #B0B0B0;
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



section{
  padding: 1rem 1%;
}

.btn i{
    color: black;
}

.sidebar {
    position: fixed;
    height: 100%;
    width: 165px;
    left: 0;
    bottom: 0;
    top: 0;
    z-index: 100;
    background: var(--color-dark);
    transition: left 300ms;
}



.side-content {
    height: calc(100vh - 60px);
    overflow: auto;
}

/* width */
.side-content::-webkit-scrollbar {
  width: 5px;
}

/* Track */
.side-content::-webkit-scrollbar-track {
  box-shadow: inset 0 0 5px grey; 
  border-radius: 10px;
}
 
/* Handle */
.side-content::-webkit-scrollbar-thumb {
  background: #b0b0b0; 
  border-radius: 10px;
}

/* Handle on hover */
.side-content::-webkit-scrollbar-thumb:hover {
  background: #b30000; 
}

.logo img{
    width: 10rem;
    
}

.sidebar {
    /*overflow-y: auto;*/
}

.side-menu ul {
    text-align: center;
}

.side-menu a {
    display: block;
    padding: 1.2rem 0rem;
}

.side-menu a.active{
    color: var(--main-color);
}

.side-menu a:hover{
    background: #fff;
   
}

.side-menu a.active span, .side-menu a.active small {
    color: var(--black);
}

.side-menu a span {
    display: block;
    text-align: center;
    font-size: 1.7rem;
}

.side-menu a span, .side-menu a small {
    color: var(--black);
}

.main-content {
    margin-left: 165px;
    width: calc(100% - 165px);
    transition: margin-left 300ms;
}
.user {
    display: flex;
    align-items: center;
}

.user div, .client-img {
    height: 40px;
    width: 40px;
    margin-right: 1rem;
}

.user span:last-child {
    display: inline-block;
    margin-left: .3rem;
    font-size: .8rem;
}

main {
    margin-top: 0;
}

.page-header {
    padding: 1.3rem 1rem;
    background: #E9edf2;
    border-bottom: 1px solid #dee2e8;
}

.page-header h1, .page-header small {        
    color: #74767d;
}

.page-content {
    padding: 1.3rem 1rem;
    background: #f1f4f9;
}

.analytics {
    display: grid;
    grid-template-columns: repeat(4, 1fr);
    grid-gap: 2rem;
    margin-top: .5rem;
    margin-bottom: 2rem;
}

.card {
    box-shadow: 0px 5px 5px -5px rgb(0 0 0 / 10%);
    background: #fff;
    padding: 1rem;
    border-radius: 3px;
}

.card-head {
    display: flex;
    justify-content: space-between;
    align-items: center;
}

.card-head h2 {
    color: #333;
    font-size: 1.8rem;
    font-weight: 500;
}

.card-head span {
    font-size: 3.2rem;
    color: var(--text-grey);
}

.card-progress small {
    color: #777;
    font-size: .8rem;
    font-weight: 600;
}

.card-indicator {
    margin: .7rem 0rem;
    height: 10px;
    border-radius: 4px;
    background: #e9edf2;
    overflow: hidden;
}

.indicator {
    height: 10px;
    border-radius: 4px;
}

.indicator.one {
    background: #22baa0;
}

.indicator.two {
    background: #11a8c3;
}

.indicator.three {
    background: #f6d433;
}

.indicator.four {
    background: #f25656;
}

.records {
    box-shadow: 0px 5px 5px -5px rgb(0 0 0 / 10%);
    background: #fff;
    border-radius: 3px;
}

.record-header {
    padding: 1rem;
    display: flex;
    justify-content: space-between;
    align-items: center;
}

.add, .browse {
    display: flex;
    align-items: center;
}

.add span {
    display: inline-block;
    margin-right: .6rem;
    font-size: .9rem;
    color: #666;
}

input, button, select {
    outline: none;
}

.add select, .browse input, .browse select {
    height: 35px;
    border: 1px solid #b0b0b0;
    border-radius: 3px;
    display: inline-block;
    width: 75px;
    padding: 0rem .5rem;
    margin-right: .8rem;
    color: #666;
}

.add button {
    background: var(--main-color);
    color: #fff;
    height: 37px;
    border-radius: 4px;
    padding: 0rem 1rem;
    border: none;
    font-weight: 600;
}

.browse input {
    width: 150px;
}

.browse select {
    width: 100px;
}

.table-responsive {
    width: 100%;
    overflow: auto;
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



.client {
    display: flex;
    align-items: center;
}

.client-img {
    margin-right: .5rem;
    border: 2px solid #b0b0b0;
    height: 45px;
    width: 45px;
}

.client-info h4 {
    color: #555;
    font-size: .95rem;
}

.client-info small {
    color: #777;
}

.actions span {
    display: inline-block;
    font-size: 1.5rem;
    margin-right: .5rem;
}

.paid {
    display: inline-block;
    text-align: center;
    font-weight: 600;
    color: var(--main-color);
    background: #e5f8ed;
    padding: .5rem 1rem;
    border-radius: 20px;
    font-size: .8rem;
}



</style>
<body>
   <input type="checkbox" id="menu-toggle">
    <div class="sidebar">
        <div class="side-content">
            <a href="#" class="logo"><img src="web/.png" alt=""></a>
            <div class="side-menu">
            <ul>
            <li><a href="admin.php" class="active"><span class="las la-home"></span><small>Dashboard</small></a></li>
            <li><a href=""><span class="las la-user-alt"></span><small>Registration</small></a></li>
            <li><a href=""><span class="las la-envelope"></span><small>State</small></a></li>
            <li><a href="package_admin.php"><span class="las la-clipboard-list"></span><small>Packages</small></a></li>
            <li><a href=""><span class="las la-shopping-cart"></span><small>Booking</small></a></li>
            </ul>
            </div>
        </div>
    </div>

    <div class="main-content">
    
<!--   
        
        <header>
            <div class="header-content">
                <label for="menu-toggle">
                    <span class="las la-bars"></span>
                </label>
                
                <div class="header-menu">
                    
                
                    <div class="user">
                        <div class="bg-img" style="background-image: url(img/1.jpeg)"></div>
                        
                        <span class="las la-power-off"></span>
                        <span>Logout</span>
                    </div>
                </div>
            </div>
        </header>
        
 -->       
        <main>
            
            <div class="page-header">
                <h1>Dashboard</h1>
                <small>Home / Dashboard</small>
            </div>
            
            <div class="page-content">
            
                <div class="analytics">

                    <div class="card">
                        <div class="card-head">
                            <h2>107,200</h2>
                            <span class="las la-user-friends"></span>
                        </div>
                        <div class="card-progress">
                            <small><a href="t_report.php"> User activity this month</small></a>
                            <div class="card-indicator">
                                <div class="indicator one" style="width: 60%"></div>
                            </div>
                        </div>
                    </div>

            </div>


                <div class="records table-responsive">

                    <div class="record-header">
                        <div class="add">
                            <span>Entries</span>
                            <select name="" id="">
                                <option value="">ID</option>
                            </select>
                            <button>Add record</button>
                        </div>

                        <div class="browse">
                           <input type="search" placeholder="Search" class="record-search">
                           
                        </div>
                    </div>


                </div>
            </div>
        </main>
<section>
    
<table width="100%">
                            
    <tr>
        <th>ID</th>
        <th>Name</th>
        <th>Email_id</th>
        <th>Password</th>
        <th>State</th>
        <th>City</th>
        <th>Pincode</th>
        <th>Contact_number</th>
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
        <td><a href='delete.php?r_id=" . $row['r_id'] . "' class=\"btn\"><i class=\"fa fa-trash\" aria-hidden=\"true\"></i></a></td>
        <td><a href='form.php?r_id=" . $row['r_id'] . "' class=\"btn\"><i class=\"fa fa-pencil\" aria-hidden=\"true\"></i></a></td>
    </tr>
    "
?>

</table>
                       
</section>
</body>
</html>
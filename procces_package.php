<?php
  // connect to the database
  $conn = mysqli_connect("localhost","root","","tour");


  // process add user form submission
  if (isset($_POST['add'])) {
   
    $package_name = $_POST['package_name'];
    $day_night = $_POST['day_night'];
    $price = $_POST['price'];
    $image = $_POST['image'];
    $state_id = $_POST['state_id'];
    
    

      $insert_sql = "INSERT INTO packa_table(package_id,package_name,day_night,price,image,state_id) VALUES('$package_name','$day_night','$price','$image','$state_id')";
        $res = mysqli_query($conn,$insert_sql);
  }

  // process update user form submission
  if (isset($_POST['update'])) {
    
    $package_name = $_POST['package_name'];
    $day_night = $_POST['day_night'];
    $price = $_POST['price'];
    $image = $_POST['image'];
    $state_id = $_POST['state_id'];
    
    
    $sql = "UPDATE packa_table SET package_name='$package_name', day_night='$day_night', price='$price',image='$image', state_id='$state_id' WHERE package_id='$package_id' ";
    mysqli_query($conn, $sql);
  }

  if (isset($_GET['delete'])) {
    $package_id = $_GET['package_id'];
    $stmt = "DELETE FROM packa_table WHERE package_id = '$package_id'";
    mysqli_query($conn, $stmt);
 
   header("Location: admin.php");
  }

  // close the database connection
  mysqli_close($conn);
?>

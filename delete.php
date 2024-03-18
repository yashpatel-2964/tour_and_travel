<?php
  // connect to the database
  $conn = mysqli_connect("localhost","root","","tour");

  $r_id = $_GET['r_id'];

  $stmt = "DELETE FROM registration_table WHERE r_id = '$r_id'";
  mysqli_query($conn, $stmt);
 
  header("Location: admin_page.php");


  // process delete user request
 // if (isset($_GET['delete'])) {
   // $r_id = $_GET['delete'];
   // $sql = "DELETE FROM `registration_table` WHERE r_id='$r_id'";
  //  mysqli_query($conn, $sql);
  //}

  // close the database connection
 // mysqli_close($conn);
?>

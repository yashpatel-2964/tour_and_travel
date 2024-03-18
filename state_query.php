<?php
  // connect to the database
  $conn = mysqli_connect("localhost","root","","tour");


  // process add user form submission
  if (isset($_POST['add'])) {
   
    $state_name = $_POST['state_name'];
    $state_image = $_POST['state_image'];
    
    

      $insert_sql = "INSERT INTO state_table(state_name,state_image) VALUES('$state_name','$state_image')";
        $res = mysqli_query($conn,$insert_sql);
  }

  // process update user form submission
  if (isset($_POST['update'])) {
    $state_id = $_POST['state_id'];
    $state_name = $_POST['state_name'];
    $state_image = $_POST['state_image'];
    
    
    $sql = "UPDATE state_table SET state_name='$state_name', state_image='$state_image' WHERE state_id='$state_id' ";
    mysqli_query($conn, $sql);
  }

  if (isset($_GET['delete'])) {
    $r_id = $_GET['delete'];
    $sql = "DELETE FROM state_table WHERE state_id='$state_id'";
    mysqli_query($conn, $sql);
  }

  // close the database connection
  mysqli_close($conn);
?>

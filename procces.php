<?php
  // connect to the database
  $conn = mysqli_connect("localhost","root","","tour");


  // process add user form submission
  if (isset($_POST['add'])) {
   
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
  }

  // process update user form submission
  if (isset($_POST['update'])) {
    $r_id = $_POST['r_id'];
    $name = $_POST['name'];
    $email_id = $_POST['email_id'];
    $password = $_POST['password'];
    $state = $_POST['state'];
    $city = $_POST['city'];
    $pincode = $_POST['pincode'];
    $contact_number = $_POST['contact_number'];
    $user_type = $_POST['user_type'];
    
    
    $sql = "UPDATE registration_table SET name='$name', email_id='$email_id', password='$password',state='$state', city='$city', pincode='$pincode', contact_number='$contact_number', user_type='$user_type' WHERE r_id='$r_id' ";
    mysqli_query($conn, $sql);
  }

  if (isset($_GET['delete'])) {
    $r_id = $_GET['r_id'];
    $stmt = "DELETE FROM registration_table WHERE r_id = '$r_id'";
    mysqli_query($conn, $stmt);
 
   header("Location: admin_page.php");
  }

  // close the database connection
  mysqli_close($conn);
?>

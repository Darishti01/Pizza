<?php
  $servername = "localhost:3308";
  $username = "root";
  $password = "";
  
  // Create connection
  $conn = new mysqli($servername, $username, $password);
  mysqli_select_db($conn,'php');
  $username=$_POST['username'];
  $email=$_POST['email']; 
  $message=$_POST['message'];
  $phone=$_POST['phone'];

  $query=" INSERT INTO `pizza`( `Username`, `Email`, `MobileNumber`, `Message`) values('$username','$email','$phone','$message') ";
  // echo "$query";
  // mysqli_query($conn,$query);
  // header("location:index.php");

  if(mysqli_query($conn,$query)===TRUE)
  {
  //   print_r("$query");
    echo "<script>alert('You have successfully inserted the data')</script>";
    echo "<script type='text/javascript'>document.location='index.php'; </script>";
  }
  else
  {
    $error = "error: ".$query."<br>".$conn->error;
    echo "<script>alert('$error')</script>";
  }
?>
<?php
session_start();

$username = "";
$email    = "";
$errors = array(); 

// connect to the database
$db = mysqli_connect('localhost', 'root', '', 'fast_sell');

if (isset($_POST['submit'])) {
  $email = mysqli_real_escape_string($db, $_POST['email']);
  $password = mysqli_real_escape_string($db, $_POST['password']);

  if (empty($email)) {
  	array_push($errors, "Email is required");
    $message = "Email is Required!!";
    echo "<script type='text/javascript'>alert('$message');</script>";
  }
  if (empty($password)) {
  	array_push($errors, "Password is required");
    $message = "Password is required!!";
    echo "<script type='text/javascript'>alert('$message');</script>";
  }

  if (count($errors) == 0) {
  
  	$query = "SELECT * FROM users WHERE email='$email' AND password='$password'";
  	$results = mysqli_query($db, $query);
  	if (mysqli_num_rows($results) == 1) {
  	  $_SESSION['email'] = $email;
  	  $_SESSION['success'] = "You are now logged in";
  	  header('location: home2.php');
  	}else {
  		array_push($errors, "Wrong username/password combination");
        $message = "Wrong username/password combination!!";
        echo "<script type='text/javascript'>alert('$message');</script>";
  	}
  }
}
?>
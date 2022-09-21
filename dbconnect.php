<?php
session_start();

$userName = "";
$email = "";
$errors = array();

//to connect to thee database
$servername = "localhost";
$username = "root";
$password = "";
$dbName="userme";
// Create connection

$conn =  mysqli_connect($servername, $username, $password, $dbName);
// Check connection

//when the signuP button is clicked

if(isset($_POST["signup"])){
  $userName= ($_POST["username"]);
  $email= ($_POST["email"]);
  $password= ($_POST["password"]);
  $password2= ($_POST["password2"]);
}

// to  ensure that the form fields are properly inserted
if(empty($userName)){
  array_push($errors,"Username required");
}
if(empty($email)){
  array_push($errors,"Email required");
}
if(empty($password)){
  array_push($errors,"password required");
}
if($password != $password2){
  array_push($errors,"Passwords do not match");
}


//to save user to database

if(count($errors) == 0){
  $password = md5($password);
  $sql = "INSERT INTO mini_project (username, email, psw) VALUES ('$userName', '$email', '$password')";
  mysqli_query($conn, $sql);
  $_SESSION['username'] = $userName;
  $_SESSION['success'] = 'You are now logged in';
};



?>
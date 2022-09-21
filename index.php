<?php
require_once "dbconnect.php";

if (empty($_SESSION["userName"])){
  header("location: login.php");
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
 
  <title>Document</title>
</head>
<body>

<p>Welcome to the Homepage</p>
  
</body>
</html>

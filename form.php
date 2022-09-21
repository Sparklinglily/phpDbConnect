<?php
  require_once ("dbconnect.php");
?>
<!DOCTYPE html>
<html lang="en">
<head>
  
  <title>Document</title>
</head>

<body>
  <form action="" method="post" >

    <?php require_once( "error.php"); ?>

    
    <label for="name">Username </label>
    <input type="text" name="username" value="<?php  ?>"><br><br>
 

<label for="email">Email</label>
    <input type="email" name="email"><br><br>

<label for="password">Password</label>
    <input type="password" name="password" ><br><br>

<label for="password"> Confirm Password</label>
    <input type="password" name="password2" ><br><br>

    <button class="btn" name="signup">SignUp</button>

    <p>Already have an account? <span class="login">Log In</span></p>


  </form>

  
</body>
</html>

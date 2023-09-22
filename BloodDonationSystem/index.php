<?php

include("./connection.php");
session_start();

?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Admin Login</title>
  <link rel="stylesheet" href="index.css">
</head>
<body>
  <div id="full">
    <div class="header"> 
      <h1>Blood Donation Management System</h1>
    </div>
    <div class="body">
      <br><br><br><br><br><br><br><br><br>
      <form action="index.php" method="post">
      <table align="center">
        <tr>
            <td width="200px" height="70px"><b>User Name:</b></td>
            <td width="30px" height="10px"><input type="text" name="username" placeholder="Enter user name.." class="input1"></td>
        </tr>
        <tr>
            <td width="200px" height="70px"><b>Password:</b></td>
            <td width="30px" height="10px"><input type="password" name="password" placeholder="Enter password.." class="input1"></td>
        </tr>
        <tr>
          <td><input type="submit" value="Login" name="login" class="login"></td>
        </tr>
</table>
</form>
    </div>
</div>
<?php
//admin login
if(isset($_POST['login']))
{
  $username=mysqli_real_escape_string($connection,$_POST['username']);
  $password=mysqli_real_escape_string($connection,$_POST['password']);

  $sql="SELECT * FROM admin WHERE username='$username' AND password='$password'";

  $res=mysqli_query($connection,$sql);
  if(mysqli_num_rows($res)>0)
  {
    $_SESSION['username']=$username;
    header('Location:adminHome.php');
  }
  else
  {
    echo "error";
  }
}?>
</body>
</html>
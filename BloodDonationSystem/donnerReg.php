<?php
include("./connection.php");
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Donner Registration</title>
  <link rel="stylesheet" href="index.css">
</head>
<body>
  <div id="full">
    <div class="header"> 
      <p>
        <h1>Blood Donation Management System </h1>
        <a href="logout.php" class="button1">Logout</a>
      </p>
    </div>
    <div class="body">
    <br><br><br>
    <form method="POST" action="donnerReg.php">
     <center><div id="form">
      <table>
          <tr>
            <td width="200px" height="100px">Enter Name: </td>
            <td width="200px" height="100px"><input type="text" placeholder="Enter your name.. " name="name"></td>
            <td width="200px" height="100px">Enter Father's Name: </td>
            <td width="200px" height="100px"><input type="text" placeholder="Enter father name.." name="fname"></td>
          </tr>
          <tr>
            <td width="200px" height="100px">Enter Address: </td>
            <td width="200px" height="100px"><input type="text" placeholder="Enter your Addess.." name="address"></td>
            <td width="200px" height="100px">Enter City: </td>
            <td width="200px" height="100px"><input type="text" placeholder="Enter City .." name="city"></td>
          </tr>
          <tr>
            <td width="200px" height="100px">Enter Age: </td>
            <td width="200px" height="100px"><input type="text" placeholder="Enter your Age.." name="age"></td>
            <td width="200px" height="100px">Enter Blood Group: </td>
            <td width="200px" height="100px" >
            <select name="bgroup">
              <option>O+</option>
              <option>A</option>
              <option>B</option>
              <option>AB</option>
              <option>O-</option>
            </select>
              </td>
          </tr>
          <tr>
            <td width="200px" height="100px">Enter Email: </td>
            <td width="200px" height="100px"><input type="email" placeholder="Enter Email Address.."  name="email"></td>
            <td width="200px" height="100px">Enter Mobile Number: </td>
            <td width="200px" height="100px"><input type="text" placeholder="Enter Mobile Number .." name="mobileNum"></td>
          </tr>
          
          <tr>
              <td><button name="submit">Submit</button></td>
          </tr>
      </table>
</div></center>
</form>
    </div>
    
</div>
<?php
if(isset($_POST['submit']))
{
  
  $name=mysqli_real_escape_string($connection,$_POST['name']);
  $fname=mysqli_real_escape_string($connection,$_POST['fname']);
  $address=mysqli_real_escape_string($connection,$_POST['address']);
  $city=mysqli_real_escape_string($connection,$_POST['city']);
  $age=mysqli_real_escape_string($connection,$_POST['age']);
  $bgroup=mysqli_real_escape_string($connection,$_POST['bgroup']);
  $email=mysqli_real_escape_string($connection,$_POST['email']);
  $mobileNum=mysqli_real_escape_string($connection,$_POST['mobileNum']);

  $sql="INSERT INTO bloodreg (name,fname,address,city,age,bgroup,email,mobileNum)
  VALUES ('$name','$fname','$address','$city','$age','$bgroup','$email','$mobileNum') ";

  $res=mysqli_query($connection,$sql);
  if($res)
  {
    header('Location:donnerReg.php');
  }
  else
  {
    echo "error";
  }
}
?>
</body>
</html>
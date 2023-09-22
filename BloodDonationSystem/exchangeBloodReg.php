<?php
include("./connection.php");
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Exchange Blood List</title>
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
    <form method="POST" action="exchangeBloodReg.php">
     <center><div id="form">
      <table>
          <tr>
            <td width="200px" height="100px">Enter Name: </td>
            <td width="200px" height="100px"><input type="text" placeholder="Enter your name.. " name="name"></td>
            <td width="200px" height="100px">Enter Age: </td>
            <td width="200px" height="100px"><input type="text" placeholder="Enter your Age.." name="age"></td>
          </tr>
          <tr>
            <td width="200px" height="100px">Enter Address: </td>
            <td width="200px" height="100px"><input type="text" placeholder="Enter your Addess.." name="address"></td>
            <td width="200px" height="100px">Enter City: </td>
            <td width="200px" height="100px"><input type="text" placeholder="Enter City .." name="city"></td>
          </tr>
          <tr>
            <td width="200px" height="100px">Enter Email: </td>
            <td width="200px" height="100px"><input type="email" placeholder="Enter Email Address.."  name="email"></td>
            <td width="200px" height="100px">Enter Mobile Number: </td>
            <td width="200px" height="100px"><input type="text" placeholder="Enter Mobile Number .." name="mobileNum"></td>
          </tr>
          <tr>
          <td width="200px" height="100px">Enter Your Blood Group: </td>
            <td width="200px" height="100px" >
            <select name="bgroup">
              <option>O+</option>
              <option>A</option>
              <option>B</option>
              <option>AB</option>
              <option>O-</option>
            </select>
            </td>

            <td width="200px" height="100px">Exchange Blood Group: </td>
            <td width="200px" height="100px" >
            <select name="exbgroup">
              <option>O+</option>
              <option>A</option>
              <option>B</option>
              <option>AB</option>
              <option>O-</option>
            </select>
            </td>
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
  $age=mysqli_real_escape_string($connection,$_POST['age']);
  $address=mysqli_real_escape_string($connection,$_POST['address']);
  $city=mysqli_real_escape_string($connection,$_POST['city']);
  $email=mysqli_real_escape_string($connection,$_POST['email']);
  $mobileNum=mysqli_real_escape_string($connection,$_POST['mobileNum']);
  $bgroup=mysqli_real_escape_string($connection,$_POST['bgroup']);
  $exbgroup=mysqli_real_escape_string($connection,$_POST['exbgroup']);

  $sql="INSERT INTO exchangeblood (name,age,address,city,email,mobileNum,bgroup,exbgroup)
  VALUES ('$name','$age','$address','$city','$email','$mobileNum','$bgroup','$exbgroup') ";

  $res=mysqli_query($connection,$sql);
  if($res)
  {
    header('Location:exchangeBloodReg.php');
  }
  else
  {
    echo "error";
  }
}
?>
</body>
</html>
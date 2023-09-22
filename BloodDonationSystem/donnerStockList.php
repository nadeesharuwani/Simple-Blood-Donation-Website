<?php
include("./connection.php");
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Donner Stock List</title>
  <link rel="stylesheet" href="index.css">
  <link rel="stylesheet" href="donnerList.css">
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
    <br><br><br><br><br><br>
    <center>
       <table class="listTable">
        <tr>
            <th>Blood Group</th>
            <th>Quantity</th>
        </tr>
        <tr>
            <td>O+</td>
            <td><?php $sql="select * from bloodreg where bgroup='O+' ";
                      $res=mysqli_query($connection,$sql);
                      if($res)
                      {
                        echo $count=mysqli_num_rows($res);
                      }

            ?></td>
        </tr>
        <tr>
            <td>A</td>
            <td><?php $sql="select * from bloodreg where bgroup='A' ";
                      $res=mysqli_query($connection,$sql);
                      if($res)
                      {
                        echo $count=mysqli_num_rows($res);
                      }
            ?></td>
        </tr>
        <tr>
            <td>B</td>
            <td><?php $sql="select * from bloodreg where bgroup='B' ";
                      $res=mysqli_query($connection,$sql);
                      if($res)
                      {
                        echo $count=mysqli_num_rows($res);
                      }
            ?></td>
        </tr>
        <tr>
            <td>AB</td>
            <td><?php $sql="select * from bloodreg where bgroup='AB' ";
                      $res=mysqli_query($connection,$sql);
                      if($res)
                      {
                        echo $count=mysqli_num_rows($res);
                      }
            ?></td>
        </tr>
        <tr>
            <td>O-</td>
            <td><?php $sql="select * from bloodreg where bgroup='O-' ";
                      $res=mysqli_query($connection,$sql);
                      if($res)
                      {
                        echo $count=mysqli_num_rows($res);
                      }
            ?></td>
        </tr>
    </div>
    
</div>
</body>
</html>
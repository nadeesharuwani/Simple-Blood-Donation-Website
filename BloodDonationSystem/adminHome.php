<?php
include("./connection.php");
session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Admin Home</title>
  <link rel="stylesheet" href="index.css">
</head>
<body>
  <div id="full">
    <div class="header"> 
      <p>
        <h1>Blood Donation Management System <?php echo $username=$_SESSION['username']; ?></h1>
        <a href="logout.php" class="button1">Logout</a>
      </p>
    </div>
    <div class="body">
    <br><br><br><br><br><br><br>
     <ul>
      <li><a href="donnerReg.php">Doner Registration</a></li>
      <li><a href="donnerList.php">Doner List</a></li>
      <li><a href="donnerStockList.php">Stock Blood List</a></li>
    </ul><br><br><br><br><br><br>

    <ul>
      
      <li><a href="exchangeBloodReg.php">Exchange Blood Registration</a></li>
      <li><a href="exchangeBloodList.php">Exchange Blood List</a></li>
    </ul>
    </div>
    
</div>
</body>
</html>
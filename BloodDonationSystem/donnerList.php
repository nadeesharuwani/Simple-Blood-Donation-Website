<?php
include("./connection.php");
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Donner List</title>
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
    <br><br>
    <center>
       <table class="listTable">
        <tr>
            <th>Id</th>
            <th>Name</th>
            <th>Father Name</th>
            <th>Address</th>
            <th>City</th>
            <th>Age</th>
            <th>Blood Group</th>
            <th>Email</th>
            <th>Mobile Number</th>
        </tr>
        <?php
          $sql="SELECT * FROM bloodReg ";
          $res=mysqli_query($connection,$sql);
          if(mysqli_num_rows($res)>0)
          {
            while($row=mysqli_fetch_assoc($res))
            {
              echo "<tr>";
              echo "<td>".$row['id']."</td>";
              echo "<td>".$row['name']."</td>";
              echo "<td>".$row['fname']."</td>";
              echo "<td>".$row['address']."</td>";
              echo "<td>".$row['city']."</td>";
              echo "<td>".$row['age']."</td>";
              echo "<td>".$row['bgroup']."</td>";
              echo "<td>".$row['email']."</td>";
              echo "<td>".$row['mobileNum']."</td>";
              echo "</tr>";
            }
          }
        ?>
    </table></center>
    </div>
    
</div>
</body>
</html>
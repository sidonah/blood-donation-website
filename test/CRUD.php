<?php
//including the database connection file
include_once("blood.php");


$result = mysqli_query($conn, "SELECT * FROM donation ORDER BY ID DESC"); 
?>

<html>
<head>  
    <title>Dashboard</title>
    <link rel="stylesheet" href="donate.css">
</head>

<body>

    <nav>
        <input type="checkbox" id="check">
        <label for="check" class="checkbtn">
          <i class="fas fa-bars"></i>
        </label>
        <label class="logo"> <img src="images/logo.jpg" alt="" width="90px" class="logo"> </label>
        <ul>
          <li><a href="home.html">Home</a></li>
          <li><a href="home.html">Bloodtype</a></li>
          <li><a href="about.html">About</a></li>
          <li><a href="donate.html">Donate</a></li>
          <li><a  href="admin.html">Admin</a></li>
          <li><a class="active" href="CRUD.php" >Dashboard</a></li>
    
    
    
        </ul>
      </nav>

      <a href="admin.html">Add New Data</a><br/><br/>

    <table width='80%' border=0>
        <tr bgcolor='#CCCCCC'>
            <td>Name</td>
            <td>Email</td>
            <td>Phone</td>
            <td>Age</td>
            <td>Adress</td>
            <td>Gender</td>
            <td>Blood_type</td>
            <td>Update</td>
        </tr>
        <?php 

        
        while($res = mysqli_fetch_array($result)) {         
            echo "<tr>";
            echo "<td>".$res['Name']."</td>";
            echo "<td>".$res['Email']."</td>";
            echo "<td>".$res['Phone']."</td>"; 
            echo "<td>".$res['Age']."</td>";
            echo "<td>".$res['Address']."</td>";
            echo "<td>".$res['Gender']."</td>";
            echo "<td>".$res['Blood_type']."</td>";   
            echo "<td><a href=\"Update.php?id=$res[ID]\">Update</a> | <a href=\"delete.php?id=$res[ID]\" onClick=\"return confirm('Are you sure you want to delete?')\">Delete</a></td>";       
        }
        ?>
    </table>

    
</body>
</html>
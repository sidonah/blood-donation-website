<?php
// including the database connection file
include_once("blood.php");

if(isset($_POST['update']))
{   
    $id = $_POST['id'];
    
    $name=$_POST['name'];
    $email=$_POST['email']; 
    $phone=$_POST['phone'];
    $age=$_POST['age'];
    $address=$_POST['address'];
    $gender=$_POST['gender']; 
    $blood_type=$_POST['blood_type']; 
    
    // checking empty fields
    if(empty($name) || empty($email) || empty($phone) || empty($age) || empty($address) || empty($gender) || empty($blood_type)) { 
                 
        if(empty($name)) {
            echo "<font color='red'>Name field is empty.</font><br/>";
        }
        
        if(empty($email)) {
            echo "<font color='red'>Email field is empty.</font><br/>";
        }       

        if(empty($phone)) {
            echo "<font color='red'>Phone field is empty.</font><br/>";
        }       
        if(empty($age)) {
            echo "<font color='red'>Age field is empty.</font><br/>";
        }

        if(empty($address)) {
            echo "<font color='red'>Address field is empty.</font><br/>";
        }  
        
        if(empty($gender)) {
            echo "<font color='red'>Gender field is empty.</font><br/>";
        } 
        
        if(empty($blood_type)) {
            echo "<font color='red'>Blood type field is empty.</font><br/>";
        }       
        
        
    } else {    
        //updating the table
        $result = mysqli_query($conn, "UPDATE donation SET Name='$name', Email='$email', Phone=$phone, Age='$age',Address='$address', Gender=$gender, Blood_type='$blood_type' WHERE id=$id");
     
        header("Location: CRUD.php");
    }
}
?>

<?php


$id = $_GET['id'];

$result = mysqli_query($conn, "SELECT * FROM donation WHERE id=$id");

while($res = mysqli_fetch_array($result))
{
    $name = $res['Name'];
    $email = $res['Email'];
    $phone = $res['Phone'];
    $age = $res['Age'];
    $address = $res['Address'];
    $gender = $res['Gender'];
    $blood_type = $res['Blood_type'];
   
    
}
?>
<!-- php ends -->





<!-- html code starts -->
<html>
<head>  
    <title>Update Data</title>
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
          <li><a class="active" href="admin.html">Admin</a></li>
          <li><a href="CRUD.php" >Dashboard</a></li>
    
    
    
        </ul>
      </nav>

    <!-- <a href="CRUD.php">Dashboard</a> -->
    <br/><br/>
    
    <section class="booking">

<form action="Update.php" method="post" class="book-form" name="form1">
    <!-- <table width="25%" border="0"> -->
        <div class="flex" > 

            <div class="inputBox">
              <span>Name :</span>
              <input type="text" placeholder="Enter your name" id="name" name="name">
            </div>
            <div class="inputBox">
              <span>Email :</span>
              <input type="email" placeholder="Enter your email" id="email" name="email">
            </div>
            <div class="inputBox">
              <span>Phone :</span>
              <input type="telephone" placeholder="Enter your number" id="phone" name="phone">
            </div>
            <div class="inputBox">
              <span>Age :</span>
              <input type="text" placeholder="Enter your age" id="age" name="age">
            </div>
            <div class="inputBox">
              <span>Address :</span>
              <input type="text" placeholder="Enter your address" id="address" name="address">
            </div>
            <div class="inputBox" id="gender">
              <span>Gender :</span>
              <label>Female</label>
              <input type="radio" name="gender" value="Female">
              <label>Male</label>
              <input type="radio" name="gender" value="Male">
  
            </div>
            <div class="inputBox">
              <span>Please select blood type</span>
              <select name="blood_type" id="blood_type">
                <option></option>
                <option>A+</option>
                <option>A-</option>
                <option>B+</option>
                <option>B-</option>
                <option>O+</option>
                <option>O-</option>
                <option>AB+</option>
                <option>AB-</option>
  
              </select><br /><br />
            </div>
            <!-- <button id="register" class="btn" name="submit"> Register</button> -->
            <td><input type="submit" name="update" class= "btn" value="Update"></td>
    
</form>
</section>

</body>
</html>
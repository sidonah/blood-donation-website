<?php

require_once('connect.php');

if (isset($_POST['submit'])) {
  $name = $_POST['name'];
  $email = $_POST['email'];
  $phone = $_POST['phone'];
  $age = $_POST['age'];
  $address = $_POST['address'];
  $gender = $_POST['gender'];
  $blood_type = $_POST['blood_type'];

  $query = "INSERT INTO donation (Name, Email, Phone, Age, Address, Gender, Blood_type) value ('${name}', '${email}', '${phone}', '${age}', '${address}', '${gender}', '${blood_type}')";

  $result = mysqli_query($conn, $query);

  if ($result) {

    echo "<font color='green'>Data added successfully.";
        echo "<br/><a href='donate.html'>Go back</a>";
    
  } else {
    mysqli_error($conn);
    header("Location: donate.html");
  }
}

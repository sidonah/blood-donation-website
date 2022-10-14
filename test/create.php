<html>
<head>
    <title>Add Data</title>
</head>

<body>
<?php
//including the database connection file
include_once("blood.php");

if(isset($_POST['Submit'])) {   
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
        // if all the fields are filled insert data to database
        $result = mysqli_query($conn, "INSERT INTO donation (Name,Email,Phone, Age, Address, Gender, Blood_type) VALUES('$name','$email','$phone','$age','$address','$gender','$blood_type')");
        
        //display success message
        echo "<font color='green'>Data added successfully.";
        echo "<br/><a href='CRUD.php'>View Result</a>";
    }
}
?>
</body>
</html>
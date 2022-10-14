<?php
//including the database connection file
include("blood.php");


$id = $_GET['id'];

$result = mysqli_query($conn, "DELETE FROM donation WHERE id=$id");

header("Location:CRUD.php");
?>
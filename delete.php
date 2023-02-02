<?php

$con=new mysqli("localhost","root","","AddBook");

if(!$con)
{
    die("Connection failed: " . mysqli_connect_error());
}

$id = $_GET['id']; // get id through query string

$del = mysqli_query($con,"DELETE FROM bookpost WHERE id = '$id'"); // delete query

if($del)
{
    mysqli_close($con); // Close connection
    header("location:Recently_Added.php"); // redirects to all records page
    exit;	
}
else
{
    echo "<scrript>alert('Error deleting record')</script>"; // display error message if not delete
}
?>
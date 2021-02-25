<?php
// Create connection
include 'include/config.php';
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 

$name = $_POST['name'];
$type = $_POST['type'];
$email = $_POST['email'];
$review = $_POST['message'];
$date= date('m-d-y');
$time= date('H:i:s');
$day= date('l');

$sql = "INSERT INTO reviews (
			 type,
			 name,
             email,
             review,
             time,
             date,			 
			 day
			 )
			 
			 VALUES(
			 '$type',
			 '$name', 
			 '$email',
			 '$review',
			 '$date',
			 '$time',
			 '$day'
			 )";

if ($conn->query($sql) === TRUE) {
    header("Location: rooms.php"); 
    exit;
} else {
    $msg = "You need to Login or Sign up to post a review !!! ";  
     header("Location: login.php?msg=$msg"); 
}
$conn->close();
?>
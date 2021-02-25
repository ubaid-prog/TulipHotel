<?php
// Create connection
include 'include/config.php';
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 

$name = $_POST['name'];
$email = $_POST['email'];
$comment = $_POST['message'];
$date= date('m-d-y');
$time= date('H:i:s');
$day= date('l');

$sql = "INSERT INTO blog_comments (
			 name,
             email,
             comment,
             time,
             date,			 
			 day
			 )
			 
			 VALUES(
			 '$name', 
			 '$email',
			 '$comment',
			 '$date',
			 '$time',
			 '$day'
			 )";

if ($conn->query($sql) === TRUE) {
    header("Location: blog.php"); 
    exit;
} else {
    $msg = "You need to Login or Sign up to post a review !!! ";  
     header("Location: login.php?msg=$msg"); 
}
$conn->close();
?>
<?php
$con=mysqli_connect("localhost","root","","obaid1");


$id=$_GET['id'];
mysqli_query($con,"DELETE FROM users WHERE id='$id'");

$msg = "You have deleted one User Succesfully.";
header("Location:users.php?msg=$msg");


mysqli_close($con);
?>
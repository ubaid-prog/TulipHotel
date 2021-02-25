<?php
$con=mysqli_connect("localhost","root","","obaid1");


$id=$_GET['id'];
mysqli_query($con,"DELETE FROM bookings WHERE id='$id'");

$msg = "You have deleted one booking Succesfully.";
header("Location:bookings.php?msg=$msg");


mysqli_close($con);
?>
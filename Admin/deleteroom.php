<?php
$con=mysqli_connect("localhost","root","","obaid1");


$id=$_GET['id'];
mysqli_query($con,"DELETE FROM rooms WHERE id='$id'");

$msg1 = "You have deleted one Room Succesfully.";
header("Location:viewrooms.php?msg=$msg1");


mysqli_close($con);
?>
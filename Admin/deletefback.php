<?php
$con=mysqli_connect("localhost","root","","obaid1");


$id=$_GET['id'];
mysqli_query($con,"DELETE FROM feedbacks WHERE id='$id'");

$msg = "You have deleted one Feedback Succesfully.";
header("Location:feedbacks.php?msg=$msg");


mysqli_close($con);
?>
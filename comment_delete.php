<?php
/* Database String connection */ 
$con = mysqli_connect(
                     "localhost",
                     "root",
					 "",
					 "obaid1"
					  );

/* Get the Id of Seletced Message */ 

$id=$_GET['id'];

/* Delete the orders in to database by posted id */ 
mysqli_query($con,"DELETE FROM `obaid1`.`blog_comments` WHERE `blog_comments`.`id` = $id;");
/* Error meesages */ 

/* Pass the message to next page  */ 
header("Location:blog.php");


mysqli_close($con);
?>
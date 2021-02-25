<?php
$con = mysql_connect( 'localhost', 'root', '' );
$db =  mysql_select_db( 'obaid1' );		
$username=$_POST['username'];
$password=$_POST['password'];

	if (isset($email) && isset($password)) {	
			/*$errorMessage = 'Sorry, fields are empty';*/
			/*header("Location: admin.php?registration=unavailable");*/ 
		}

$sql="SELECT * FROM admin WHERE admin='$username' and password='$password'";
$result=mysql_query($sql);
$count=mysql_num_rows($result);
if($count>0)
{
session_start();
$_SESSION['username']=$username;
$_SESSION['password']=$password;
$session=$_SESSION['username'];
header("location:index.php?user=$session");
}
else
{	
header("Location: login.php?registration=unavailable");
}

?>
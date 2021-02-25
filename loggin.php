<?php // php code for logging in
$con = mysql_connect( 'localhost', 'root', '' );// connects database to user name and password
$db =  mysql_select_db( 'obaid1' );		
$username=$_POST['username'];
$password=$_POST['password'];

	if (isset($email) && isset($password)) {	
			/*$errorMessage = 'Sorry, fields are empty';*/
			/*header("Location: admin.php?registration=unavailable");*/ 
		}
//Sql quries
$sql="SELECT * FROM users WHERE username='$username' and password='$password'";
$result=mysql_query($sql);
$count=mysql_num_rows($result);
if($count>0)
{
session_start();
$_SESSION['username']=$username;
$_SESSION['password']=$password;
$session=$_SESSION['username'];
header("location:rooms.php?user=$session");
}
else
{	//linking header login button the the log in page
header("Location: login.php?registration=unavailable");
}

?>
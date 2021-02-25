<?php
$link = mysql_connect('localhost', 'root', '');
if (!$link) {
    die('Could not connect: ' . mysql_error());
}
//database connecting
$db_name="obaid1";
$username=$_POST['username'];
mysql_select_db("$db_name")or die("cannot select DB");

$sql1 = mysql_query("SELECT * FROM users WHERE username = '$username'");

if (mysql_num_rows($sql1) > 0)
{ // linking sign up page to the sign up button placed in the header
header("Location: signup.php?registration=unavailable");
}
else { // database quries for registration
$sql="INSERT INTO users (fname, lname, email, password, address, mobile, username)
VALUES
('$_POST[fname]','$_POST[lname]','$_POST[email]','$_POST[password]','$_POST[address]','$_POST[mobile]','$_POST[username]')";

if (!mysql_query($sql,$link))
  {
  die('Error: ' . mysql_error());
  }// login successfully message 
$msg = "Registered Succesfully Please Login";  
header("Location: login.php?msg=$msg"); 
exit;
}
mysql_close($link);
?>

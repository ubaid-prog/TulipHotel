<?php

$con = mysql_connect('localhost', 'root', '');
$database="obaid1";

$date= date('m-d-y');
$time= date('H:i:s');
$day= date('l');

mysql_select_db("$database")or die("cannot select DB");
$sql="INSERT INTO feedbacks (name, email, message, date, time, day)
VALUES
('$_POST[name]','$_POST[email]','$_POST[message]','$date','$time','$day')";

if (!mysql_query($sql,$con))
  {
  die('Error: ' . mysql_error());
  }
$msg = "Your message was successfully sent to the Tulip Hotel Support Team. Thank you for taking the time to contact us. ";  
header("Location: Contacts.php?msg=$msg"); 
exit;

mysql_close($con);

?>

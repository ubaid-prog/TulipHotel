<?php //database connecting
$link = mysql_connect('localhost', 'root', '');
if (!$link) {
    die('Could not connect: ' . mysql_error());
}
//database name
$db_name="obaid1";
$username=$_POST['username'];
mysql_select_db("$db_name")or die("cannot select DB");

// variables defining 
$sql="INSERT INTO bookings (username, checkin, checkout, pricepernight, totalnights, tax, roomtype, totalprice)
VALUES 
('$_POST[username]','$_POST[checkin]','$_POST[checkout]','$_POST[price]','$_POST[totalnights]','$_POST[tax]','$_POST[type]','$_POST[totalprice]')";

if (!mysql_query($sql,$link))
  {
  die('Error: ' . mysql_error());
  }
 // shows booking summary on a booking summary php page
header("Location:bookingsummary.php"); 
exit;
//database closes link
mysql_close($link);
?>

<?php
$link = mysql_connect('localhost', 'root', '');
if (!$link) {
    die('Could not connect: ' . mysql_error());
}
echo 'Connected successfully';
$folder = "images/";
move_uploaded_file($_FILES["filep"]["tmp_name"] , "$folder".$_FILES["filep"]["name"]);
$db_name="obaid1";
mysql_select_db("$db_name")or die("cannot select DB");
$sql="INSERT INTO rooms (title, des, img, type, av, price)
VALUES
('$_POST[title]','$_POST[des]','".$_FILES['filep']['name']."','$_POST[type]','$_POST[av]','$_POST[price]')";

if (!mysql_query($sql,$link))
  {
  die('Error: ' . mysql_error());
  }
$msg = "You have Added one Room Succesfully.";
header("Location:viewrooms.php?msg=$msg");
exit;

mysql_close($link);
?>

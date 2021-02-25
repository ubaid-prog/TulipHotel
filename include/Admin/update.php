<?php
$link = mysql_connect('localhost', 'root', '');
if (!$link) {
    die('Could not connect: ' . mysql_error());
}

$db_name="obaid1";
$folder = "images/";
move_uploaded_file($_FILES["filep"]["tmp_name"] , "$folder".$_FILES["filep"]["name"]);

mysql_select_db("$db_name")or die("cannot select DB");

$sql="UPDATE rooms SET title = '$_POST[title]',des = '$_POST[des]',type = '$_POST[type]',av = '$_POST[av]', price = '$_POST[price]', img = '".$_FILES['filep']['name']."' where id ='$_POST[id]'";

if (!mysql_query($sql,$link))
  {
  die('Error: ' . mysql_error());
  }
$msg3 = "Room Information Updated Succesfully.";
header("Location: viewrooms.php?msg=$msg3"); 
exit;

mysql_close($link);
?>

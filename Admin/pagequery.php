<?php
ob_start();
$link = mysql_connect('localhost', 'root', '');
if (!$link) {
    die('Could not connect: ' . mysql_error());
}

$db_name="obaid1";
$s = $_POST['content']; 
$summary= addslashes($s); 

mysql_select_db("$db_name")or die("cannot select DB");
$sql="UPDATE pages SET pagename = '$_POST[title]', content = '$summary'  where pagename ='$_POST[title]'";

if (!mysql_query($sql,$link))
  {
  die('Error: ' . mysql_error());
  }
$msg = "Page Updated Succesfully.";
header("Location: pages.php?msg=$msg"); 
exit;

mysql_close($link);
?>

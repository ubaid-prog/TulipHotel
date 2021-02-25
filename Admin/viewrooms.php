<?php
session_start();
if(empty($_SESSION['username'])) 
    { 
        header("Location: login.php");       
       
        die("Redirecting to login.php"); 
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
<title>Rooms</title>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
<link rel="stylesheet" href="../css/reset.css" type="text/css" media="all">
<link rel="stylesheet" href="../css/style.css" type="text/css" media="all">
<link rel="stylesheet" href="../css/zerogrid.css" type="text/css" media="all">
<link rel="stylesheet" href="../css/responsive.css"type="text/css" media="all">
<link rel="stylesheet" href="../css/layout.css"type="text/css" media="all">

<script type="text/javascript" src="../js/jquery-1.4.2.js" ></script>
<script type="text/javascript" src="../js/cufon-yui.js"></script>
<script type="text/javascript" src="../js/cufon-replace.js"></script>  
<script type="text/javascript" src="../js/Myriad_Pro_600.font.js"></script>
<script type="text/javascript" src="../js/css3-mediaqueries.js" ></script><!--[if lt IE 9]>
	<script type="text/javascript" src="http://info.template-help.com/files/ie6_warning/ie6_script_other.js"></script>
	<script type="text/javascript" src="js/html5.js"></script>
<![endif]-->
</head>
<body id="page2">
<div class="extra">
	<div class="main zerogrid">
<!-- header -->
		<header>
		<?php
include_once("include/header.php");
?>
			<nav class="row">
				<ul id="menu">
						<li><a href="index.php" class="nav6">Home</a></li>
					<li><a href="viewrooms.php" class="nav7"> Rooms </a></li>
					<li><a href="bookings.php" class="nav8">Bookings</a></li>
					<li><a href="users.php" class="nav9">Users</a></li>
				</ul>
			</nav>
			<div class="row headerextra">
				<div class="col-2-3">
                </div>
				<div class="col-1-3 col-extra"><div class="wrap-col">
					
				</div></div>
			</div>
		</header>
<!-- / header -->
<!-- content -->
		<section id="content">
			<article class="col-1-3">
            </article>
			<article class="col-2-3">
			 <div class="wrap-col">
			   <h2>Rooms</h2>
                <span>
   <?php 
   if(isset($_GET['msg']))
  echo "<p style='color:red'> ".$_GET['msg']." </p>";
  ?>
  </span>
          <span>
   <?php 
   if(isset($_GET['msg1']))
  echo "<p style='color:red'> ".$_GET['msg1']." </p>";
  ?>
  </span>
     <span>
   <?php 
   if(isset($_GET['msg3']))
  echo "<p style='color:red'> ".$_GET['msg3']." </p>";
  ?>
  </span>
 <?php
$db_username = 'root';
$db_password = '';
$db_name = 'obaid1';
$db_host = 'localhost';
$mysqli = new mysqli($db_host, $db_username, $db_password,$db_name);
    
	$results = $mysqli->query("SELECT * FROM rooms ORDER BY id desc");
    if ($results) { 
	
        //fetch results set as object and output HTML
        while($obj = $results->fetch_object())
        {
			echo '<div class="wrapper under">'; 
            
			echo '<figure class="left marg_right1"><img src="images/'.$obj->img.'" alt="" width="200" height"100"> </figure>';
            echo '<p class="pad_bot2" style="font-size:20px"><b>'.$obj->title.'</b>';
			echo '<p class="pad_bot2"><b>ROOM TYPE:</b> '.$obj->type.'</p>';
			echo '<p class="pad_bot2"><b>PRICE:</b> '.$obj->price.'</p>';
			echo '<p class="pad_bot2"><b>AVAILABILITY:</b>'.$obj->av.'</p>';
			echo '<p class="pad_bot2" style="height:80px"><b>DESCRIPTION:</b>'.$obj->des.'</p>';
			

            echo '<a href="editroom.php?id='.$obj->id.'" class="button4" style="margin-right: 10px;"> Edit</a>';
			 echo '<a href="deleteroom.php?id='.$obj->id.'" class="button4" style="margin-right: 10px;"> Delete</a>';
           
            echo '</div>';
        }
    
    }
    ?>
			 </div>
			</article>
		</section>
<!-- / content -->
	</div>
	<div class="block"></div>
</div>
<?php
include_once("include/footer.php");
?>
<script type="text/javascript"> Cufon.now(); </script>
</body>
</html>
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
<title>Dashboard</title>
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
<script type="text/javascript" src="../js/css3-mediaqueries.js" ></script>

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
				<div class="col-2-3"></div>
				<div class="col-1-3 col-extra"><div class="wrap-col">
					
				</div></div>
			</div>
		</header>
<!-- / header -->
<!-- content -->
		<section id="content">
			<article class="col-1-3">
            </article>
			<article class="col-2-3"><div class="wrap-col">
				<h2>DASHBOARD</h2>
			  <div class="wrapper">
				<a href="viewrooms.php">	<figure class="left marg_right2"><img src="images/hotel-512.png" alt="" width="150" height="150"> </br><b style="padding-left:30px">VIEW ROOMS</b></figure></a>
                    <a href="addrooms.php"><figure class="left marg_right2"><img src="images/add-property-xxl.png" alt="" width="150" height="150"></br><b style="padding-left:30px">ADD NEW ROOM</b></figure></a>
                    <a href="bookings.php"><figure class="left marg_right2"><img src="images/images.png" alt=""width="150" height="150"></br><b style="padding-left:30px">VIEW BOOKINGS</b></figure></a>
                   <a href="users.php"> <figure class="left marg_right2"><img src="images/users.png" alt="" width="150" height="150"></br><b style="padding-left:30px">VIEW USERS</b></figure></a>
                   <a href="#"> <figure class="left marg_right2"><img src="images/pie-chart-2 (1).png" alt="" width="150" height="150"></br><b style="padding-left:30px">VIEW REPORT</b></figure></a>
              
					
				</div>
			</div></article>
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
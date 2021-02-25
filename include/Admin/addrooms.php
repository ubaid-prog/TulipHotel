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
<title>Add New Room</title>
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
			<article class="col-2-3"><div class="wrap-col">
				<h2>Add New Room</h2>
                
				<form id="ContactForm" enctype="multipart/form-data" action="roomadded.php" method="post"  onSubmit="return validateForm()">
					<div>
                    Room Title <div class="wrapper">    <input type="text" id="title" name="title" class="input" ></div>
						Room Type<div class="wrapper"> 
                        <select id="type" class="input" name="type" style="height:30px;">
  <option value="Single">Single</option>
  <option value="Double">Double</option>
  <option value="Suite">Suite</option>
  
</select>
                        
                        </div>
						Price <div class="wrapper">    <input type="text" id="price" name="price" class="input" ></div>
                        
                        Availability<div class="wrapper"> 
                        <select id="av" class="input" name="av" style="height:30px;">
  <option value="Yes">Yes</option>
  <option value="No">No</option>
  
</select>
                       
                       </div>
						Image<div class="wrapper">        <input type="file" name="filep" id="filep"  class="input" ></div>
                       Description <div class="wrapper">  <textarea name="des" id="des" cols="1" rows="1"></textarea></div>
					
						
						<input type="submit" value="Add Room" class="button" />
					</div>
				</form>
                
                
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
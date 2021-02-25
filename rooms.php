<?php
session_start();
include 'include/config.php';

?>

<!DOCTYPE html>
<html lang="en">
<head>
<title>Rooms</title>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
<link rel="stylesheet" href="css/reset.css" type="text/css" media="all">
<link rel="stylesheet" href="css/style.css" type="text/css" media="all">
<link rel="stylesheet" href="css/zerogrid.css" type="text/css" media="all">
<link rel="stylesheet" href="css/responsive.css" type="text/css" media="all">
<script type="text/javascript" src="js/jquery-1.4.2.js" ></script>
<script type="text/javascript" src="js/cufon-yui.js"></script>
<script type="text/javascript" src="js/cufon-replace.js"></script>  
<script type="text/javascript" src="js/Myriad_Pro_600.font.js"></script>
<script type="text/javascript" src="js/css3-mediaqueries.js"></script>
<!--[if lt IE 9]>
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
				<li><a href="index.php" class="nav1">Home</a></li>
					<li><a href="about.php" class="nav2">About</a></li>
					<li><a href="Services.php" class="nav3">Services</a></li>
					<li><a href="rooms.php" class="nav4">Rooms</a></li>
					<li><a href="blog.php" class="nav5">Blog</a></li>
					<li><a href="Contacts.php" class="nav5">Contacts</a></li>
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
				<h2>Rooms</h2>
				<div class="wrapper under">
					<figure class="left marg_right1"><img src="images/page4_img1.jpg" alt=""></figure>
					<p class="pad_bot2"><strong>Available Single Rooms</strong></p>
					<p class="pad_bot2">Continental breakfast is free for all guests who book a breakfast-included rate. Full English breakfast can be purchased at an additional charge. You can also order afternoon tea between 14:30 and 18:30 at an extra cost. Nice and comfortable enviroment..</p>
					<a href="singlerooms.php" class="button4">View All</a>
				</div>
				<div class="wrapper under">
					<figure class="left marg_right1"><img src="images/page4_img2.jpg" alt=""></figure>
					<p class="pad_bot2"><strong>Available Double Rooms </strong></p>
					<p class="pad_bot2">Continental breakfast is free for all guests who book a breakfast-included rate. Full English breakfast can be purchased at an additional charge. You can also order afternoon tea between 14:30 and 18:30 at an extra cost. Nice and comfortable enviroment..</p>
						<a href="doublerooms.php" class="button4">View All</a>
				</div>
				<div class="wrapper">
					<figure class="left marg_right1"><img src="images/page4_img3.jpg" alt=""></figure>
					<p class="pad_bot2"><strong>Available Suite</strong></p>
					<p class="pad_bot2">Continental breakfast is free for all guests who book a breakfast-included rate. Full English breakfast can be purchased at an additional charge. You can also order afternoon tea between 14:30 and 18:30 at an extra cost. Nice and comfortable enviroment...</p>
						<a href="suite.php" class="button4">View All</a>
				</div>
				
				<div class="wrap-col">
				<h3> Comments</h3>
				
				<?php                 
                        $result = $mysqli->query("select * from reviews");	
						if ($result) { 
	                    //fetch results set as object and output HTML
                        while($obj = $result->fetch_object())
                        {
					 echo '
						
                        <li>
						<div class="wrapper under">
					<figure class="left marg_right1"><img src="images/user1.png" height="100" width="100" alt=""></figure>
					<p class="pad_bot2"><strong>'.$obj->type.' Review</strong></p>
					<p class="pad_bot2"><strong>By '.$obj->name.'</strong></p>
					<p class="pad_bot2">'.$obj->review.'</p>
					<span class="comments-date"> '.$obj->date.'</span>
					<a href="comment_delete.php?id='.$obj->id.'" class="button4">Delete</a>
				</div>
				
                          
						  
                        </li>
						';
					    }
                      }   
                     ?>
				</div>
				<div class="wrap-col">
			<span>
   <?php 
   if(isset($_GET['msg']))
  echo "<h4 style='color:Red'> ".$_GET['msg']." </h4>";
  ?>
  </span>
			
				<h3> Write Your Review</h3>
				<form id="ContactForm" action="review.php" method="post">
					<div>
					    <div class="wrapper">Room Type: <select name="type">
                        <option value="Single Rooms">Single Rooms</option>
                        <option value="Double Rooms">Double Rooms</option>
                        <option value="Suite">Suite</option>
                        
                        </select></div>
						<div class="wrapper">Your Name: <input type="text" class="input" id="name" name="name" ></div>
						<div class="wrapper">Your E-mail:<input type="text" class="input" id="email" name="email"  ></div>
						<div class="wrapper">Your Review:<textarea name="message" cols="1" rows="1" id="message" ></textarea></div>
						<a href="#" class="button" style="margin-right: 200px;" onclick="document.getElementById('ContactForm').submit()">send</a>
						
					</div>
				</form>
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
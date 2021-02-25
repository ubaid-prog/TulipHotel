<?php
session_start();
?>
<!DOCTYPE html>
<!----language English---->
<html lang="en">
<head>
<title>Home</title>
<!----seo Meta tags---->
<meta charset="UTF-8">
<meta name="description" content="Hotel heaven palace room booking,Welcome to Tulip hotel it is a small independent hotel in Leeds Yorkshire. We aim to offer you comfortable surroundings, great food and excellent service to make your stay truly enjoyable. Please take a look through our web site where you will find most of the information you need. Call us to discuss your hotel reservation, dining plans or function requirements. We look forward to welcoming you soon.">
<meta name="keywords" content="Cheap rooms, room booking,hotels, tulip hotel in leeds,">
<meta name="author" content="ubaid">
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
<!----linking CSS files----->
<link rel="stylesheet" href="css/reset.css" type="text/css" media="all">
<link rel="stylesheet" href="css/style.css" type="text/css" media="all">
<link rel="stylesheet" href="css/zerogrid.css" type="text/css" media="all">
<link rel="stylesheet" href="css/responsive.css" type="text/css" media="all"> 
<!-----use of javascript----->
<script type="text/javascript" src="js/jquery-1.4.2.js" ></script>
<script type="text/javascript" src="js/cufon-yui.js"></script>
<script type="text/javascript" src="js/cufon-replace.js"></script>  
<script type="text/javascript" src="js/Myriad_Pro_600.font.js"></script>
<script type="text/javascript" src="js/css3-mediaqueries.js"></script>

</head>
<body id="page1">
<div class="extra">
	<div class="main zerogrid">
<!-- header -->
		<header>
		<!------Use of inculde function to link header php page------>
<?php
include_once("include/header.php");
?>
<!-- defining menu layout by using classes and giving the page links created in PHP -->
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
				<article class="col-1-3"><div class="wrap-col">
				<!---------images linker------>
					  
						<img src="Admin/images/img.jpg" width="500px">
                        
                                         
					
				</div></article>
				<div class="col-1-3 col-extra"><div class="wrap-col"><img src="images/img.jpg" alt=""></div></div>
				<article class="col-1-3" ><div class="wrap-col">
					<ul class="tabs">
					<!----search panel top booking heading---->
						<li><a href="#" class="active">Booking</a></li>
						
						</ul>
						<!------linking form to the search panel----->
					<div class="tabs_cont">
						<form id="form_1" action="search.php" method="post">
							<div class="bg">
								<div class="wrapper">
											
								<div class="wrapper">
                               <!------booking-----search panel design------->
                                
                                <input type="date" id="checkin" name="checkin" class="input input2" >Check-In </div>
								<div class="wrapper pad_bot1"><input type="date" id="checkout" name="checkout" class="input input2" >Check-out</div>
                                <div class="wrapper"> <select id="type" class="input" name="type" style="height:30px;">
  <option value="Single">Single</option>
  <option value="Double">Double</option>
  <option value="Suite">Suite</option>
  
</select>Room Type</div>
							
								</div>
								<div class="wrapper pad_bot1">
								<!-----------search submit button----->
									<a href="#" class="button" onclick="document.getElementById('form_1').submit()">Search</a>
									
								</div>
							</div>							
						</form>
					</div>
				</div></article>
			</div>
		</header>
<!-- / header -->
<!-- content -->
		<section id="content">
			
			<article class="col-2-3">
            <div class="wrap-col"><!---linking rooms pages to the particular rooms like suite, double and single rooms-->
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
        	</div>
            </article>
			<article class="col-1-3">
			<a class="twitter-timeline" href="https://twitter.com/Tuliphotel2">Tweets by Tuliphotel2</a> <script async src="//platform.twitter.com/widgets.js" charset="utf-8"></script>
          </article>
		</section>
<!-- / content -->
	</div>
	<div class="block"></div>
</div>
<!----linking footer by a seprate php page------->
<?php
include_once("include/footer.php");
?>
<script type="text/javascript"> Cufon.now(); </script>
</body>
</html>
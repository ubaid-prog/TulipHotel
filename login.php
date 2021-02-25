<!DOCTYPE html>
<html lang="en">
<head>
<!----login page---->
<title>Login</title>
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
				<h2>Login</h2>
                    <span>
					
   <?php  // log in message
   if(isset($_GET['msg']))
  echo "<p style='color:blue'> ".$_GET['msg']." </p>";
  ?>
  </span>
  <label>
<?php  //Registration and attempt to log in failed message 
if (isset($_GET['registration']) && $_GET['registration']=='unavailable')
echo "<p style='color:red;'>Login Attempt Failed!! Please Try Again</p>";
?>
</label>
<!----html logging in form--->
				<form id="ContactForm" action="loggin.php" method="post">
					<div>
						Username:<div class="wrapper"> <input type="text" class="input" name="username" id="username" ></div>
						Password:<div class="wrapper"><input type="password" class="input" name="password" id="password" ></div>
						
						<input type="submit" class="button" value="Login" />
											
						<div class="button">                 
                 <a href="fbConfig.php" class="button"> Facebook Connect</a>
				 
				   
                 </div>    
					</div>
				</form>
				
				 
				
        	</div>
			
			</article>
		</section>
		
<!-- / content -->
	</div>
	<div class="block"></div>
</div>
<div class="body1">
	<div class="main">
<!-- footer -->
		<footer>
			Designed by Ubaid <br>
		</footer>
<!-- / footer -->
	</div>
</div>
<script type="text/javascript"> Cufon.now(); </script>
</body>
</html>
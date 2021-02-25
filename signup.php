<!DOCTYPE html>
<html lang="en">
<head>
<title>Register</title>
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
<script>
function validateForm() {// form validate function checks whether user has left any field empty etc
    var x = document.forms["ContactForm"]["fname"].value;
    if (x==null || x=="") {
        alert("First name must be filled out");
        return false;
    }
	var x = document.forms["ContactForm"]["lname"].value;
    if (x==null || x=="") {
        alert("Last name must be filled out");
        return false;
    }
	var x = document.forms["ContactForm"]["username"].value;
    if (x==null || x=="") {
        alert("User name must be filled out");
        return false;
    }
	var x = document.forms["ContactForm"]["email"].value;
    if (x==null || x=="") {
        alert("Email must be filled out");
        return false;
    }
	var x = document.forms["ContactForm"]["password"].value;
    if (x==null || x=="") {
        alert("Password must be filled out");
        return false;
    }
	var x = document.forms["ContactForm"]["address"].value;
    if (x==null || x=="") {
        alert("Address must be filled out");
        return false;
    }
	var x = document.forms["ContactForm"]["mobile"].value;
    if (x==null || x=="") {
        alert("Mobile must be filled out");
        return false;
    }
}
</script>
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
				<h2>Sign up</h2> <!---sign up form---->
				<form id="ContactForm" action="registerquery.php" onsubmit="return validateForm()" method="post">
					<div>
						First Name:<div class="wrapper"> <input type="text" class="input" name="fname" id="fname" ></div>
						<div>
						Last Name:<div class="wrapper"> <input type="text" class="input" name="lname" id="lname" ></div>
                        Username:<div class="wrapper"> <input type="text" class="input" name="username" id="username" ></div>
											    
						 <span>
						<?php  // registration checks for user name existing
if (isset($_GET['registration']) && $_GET['registration']=='unavailable')
echo "<p style='color:red;'>Username Already Exits!!</p>";
?></span>					                      
					
                      
						
						E-mail:<div class="wrapper"> <input type="text" class="input" name="email" id="email" ></div>
                       
Password:<div class="wrapper"> <input type="text" class="input" name="password" id="password" ></div>
Address<div class="wrapper"> <input type="text" class="input" name="address" id="address" ></div>
                      	Mobile No:<div class="wrapper"> <input type="text" class="input" name="mobile" id="mobile" ></div>
					
						<input type="submit" class="button" value="Register" style="margin-left:20px; width:180px " />
                        
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
<?php
session_start();

?>

<!DOCTYPE html>
<html lang="en">
<head>
<title>Double Rooms</title>
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
			<article class="col-2-3">
            <div class="wrap-col">
				<h2>Available Double Rooms</h2>
                
 <?php
$db_username = 'root';
$db_password = '';
$db_name = 'obaid1';
$db_host = 'localhost';
$mysqli = new mysqli($db_host, $db_username, $db_password,$db_name);
    
	$results = $mysqli->query("SELECT * FROM rooms where av='Yes' and type='double' ");
    if ($results) { 
	
        //fetch results set as object and output HTML
        while($obj = $results->fetch_object())
        {
			echo '<div class="wrapper under">'; 
            // double rooms type, description , price 
			echo '<figure class="left marg_right1"><img src="Admin/images/'.$obj->img.'" alt="" width="200" height"100"> </figure>';
            echo '<p class="pad_bot2" style="font-size:20px"><b>'.$obj->title.'</b>';
			echo '<p class="pad_bot2"><b>ROOM TYPE:</b> '.$obj->type.'</p>';
			echo '<p class="pad_bot2"><b>PRICE:</b> '.$obj->price.'</p>';
			echo '<p class="pad_bot2"><b>DESCRIPTION:</b>'.$obj->des.'</p>';
			?>
<!----room booking by putting date check in and out after logging in--->
            <form action="booking.php" id="form1" method="post">
                <input type="date" id="checkin" name="checkin" class="input input2" >Check-In  <br/>
								<input type="date" id="checkout" name="checkout" class="input input2" >Check-out <br/> 
                <input type="hidden" id="id" name="id" value="<?php echo $obj->id; ?>" />
                <input type="submit" id="submit" class="button4" value="Book Now" alt="Edit" title="Edit"  />
               </form>				 
           
            <?php
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
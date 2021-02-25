<?php
session_start(); // login session
if(empty($_SESSION['username'])) 
    { 
        header("Location: login.php");       
       
        die("Redirecting to login.php"); 
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
<title>Booking</title>
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
				<h2>Available Single Rooms</h2>
              

 <?php // database linking and back end code for search panel
$db_username = 'root';
$db_password = '';
$db_name = 'obaid1';
$db_host = 'localhost';
$checkin=$_POST['checkin'];
$checkout=$_POST['checkout'];

$mysqli = new mysqli($db_host, $db_username, $db_password,$db_name);
//use of database quries
    
	$results = $mysqli->query("SELECT * FROM rooms where id='$_POST[id]' ");
    if ($results) { 
	
        //fetch results set as object and output HTML
        while($obj = $results->fetch_object())
        {
			echo '<div class="wrapper under">'; 
            
			echo '<figure class="left marg_right1"><img src="images/'.$obj->img.'" alt="" width="200" height"100"> </figure>';
            echo '<p class="pad_bot2" style="font-size:20px"><b>'.$obj->title.'</b>';
			echo '<p class="pad_bot2"><b>ROOM TYPE:</b> '.$obj->type.'</p>';
			echo '<p class="pad_bot2"><b>PRICE PER NIGHT: £ </b> '.$obj->price.'</p>';
			?>
		<p class="pad_bot2"><b>CHECK IN DATE:</b><?php echo $checkin; ?></p>
		<p class="pad_bot2"><b>CHECK OUT DATE:</b><?php echo $checkout; ?></p>
        
       <?php // defining date for check in and out 
	   $tax = 30.25;
$date1=date_create(".$checkin.");
$date2=date_create(".$checkout.");
$diff=date_diff($date1,$date2);
$dif=$diff->format("%R%a days");
$totalroom= $dif* $obj->price;

// printing total price 
        echo '<p class="pad_bot2"><b>TOTAL NIGHTS:</b>'.$diff->format("%R%a Nights").'</p>';
		$totalprice= $totalroom+$tax;
		
        ?>
            <?php // echoing or printing the details about the rooms and their prices inculding VAT tax ( summary of a booking)
			echo '<p class="pad_bot2" style="height:80px"><b>DESCRIPTION:</b>'.$obj->des.'</p>';
			
				echo '<p class="pad_bot2" align="right"><b>TOTAL ROOM/SUITE PRICE:</b>'.$totalroom.'   </p>';
				echo '<p class="pad_bot2" align="right"><b>VAT(20%) INCLUDED: £</b> 30.25</p>';
				echo '<p class="pad_bot2" align="right"><b>TOTAL PRICE: £ </b>'.$totalprice.' </p>';

?>

<form action="bookingsummary1.php" id="form1" method="post"> <!---booking form------>
                <input type="hidden" id="checkout" name="checkout" value="<?php echo $checkout; ?>" />
                <input type="hidden" id="checkin" name="checkin" value="<?php echo $checkin; ?>" />
                <input type="hidden" id="totalnights" name="totalnights" value="<?php echo $dif; ?>" />
                <input type="hidden" id="tax" name="tax" value="<?php echo $tax; ?>" />
                <input type="hidden" id="checkin" name="checkin" value="<?php echo $checkin; ?>" />
                <input type="hidden" id="type" name="type" value="<?php echo $obj->type; ?>" />
                <input type="hidden" id="price" name="price" value="<?php echo $obj->price; ?>" />
                <input type="hidden" id="totalprice" name="totalprice" value="<?php echo $totalprice; ?>" />
                <input type="hidden" id="username" name="username" value="<?php echo $_SESSION['username']; ?>" />
                <input type="submit" id="submit" class="button1" value="Book Now" alt="Edit" title="Edit"  />
                
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
<?php // footer linking page
include_once("include/footer.php");
?>
<script type="text/javascript"> Cufon.now(); </script>
</body>
</html>
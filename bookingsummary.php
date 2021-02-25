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
<title>Booking Summary</title>
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
				<h2>BOOKING SUMMARY</h2>
              
 <?php
$db_username = 'root';
$db_password = '';
$db_name = 'obaid1';
$db_host = 'localhost';
$username=  $_SESSION['username'];


$mysqli = new mysqli($db_host, $db_username, $db_password,$db_name);
 $results1 = $mysqli->query("SELECT * FROM users where username='$username' ");
    if ($results1) { 
	
        //fetch results set as object and output HTML
        while($obj = $results1->fetch_object())
        {
			echo '<div class="wrapper under">';
			 echo '<p class="pad_bot2"><b>CUSTOMER DETAILS:</b></p>';
            
		
            echo '<p class="pad_bot2"><b>FIRST NAME:</b> '.$obj->fname.'</p>';
			echo '<p class="pad_bot2"><b>LAST NAME:</b> '.$obj->lname.'</p>';
			echo '<p class="pad_bot2"><b>EMAIL:</b> '.$obj->email.'</p>';
			 echo '<p class="pad_bot2"><b>ADDRESS:</b> '.$obj->address.'</p>';
			  echo '<p class="pad_bot2"><b>CONTACT NO:</b> '.$obj->mobile.'</p>';
			        		 
           
            echo '</div>';
        }
    
    }   
	
	$results = $mysqli->query("SELECT * FROM bookings where username='$username' ");
    if ($results) { 
	
        //fetch results set as object and output HTML
        while($obj = $results->fetch_object())
        {
			echo '<div class="wrapper under">'; 
            $totalnights = $obj->totalnights; 
			$totalprice = $obj->totalprice;
		
            echo '<p class="pad_bot2"><b>ROOM TYPE:</b> '.$obj->roomtype.'</p>';
			echo '<p class="pad_bot2"><b>CHECK IN DATE:</b> '.$obj->checkin.'</p>';
			echo '<p class="pad_bot2"><b>CHECK OUT DATE:</b> '.$obj->checkout.'</p>';
			 echo '<p class="pad_bot2"><b>PRICE PER NIGHT:</b> '.$obj->pricepernight.'£</p>';
			  echo '<p class="pad_bot2"><b>TOTAL NIGHTS:</b> '.$obj->totalnights.'</p>';
			 echo '<p class="pad_bot2"><b>VAT (20%) INCLUDED:</b> '.$obj->tax.'£</p>';
			  echo '<p class="pad_bot2"><b>TOTAL PRICE:</b> '.$obj->totalprice.'£</p>';
			
      
 
           		 
           
            echo '</div>';
        }
    
    }
    ?>
	

    <form action="https://www.paypal.com/cgi-bin/webscr" method="post" target="_top">
<input type="hidden" name="cmd" value="_xclick">
<input type="hidden" name="business" value="5NQB6Y8S9M4CW">
<input type="hidden" name="lc" value="GB">
<input type="hidden" name="item_name" value="name">
<input type="hidden" name="item_number" value="<?php echo $totalnights; ?>">
<input type="hidden" name="amount" value="<?php echo $totalprice; ?>">
<input type="hidden" name="currency_code" value="GBP">
<input type="hidden" name="button_subtype" value="services">
<input type="hidden" name="no_note" value="0">
<input type="hidden" name="cn" value="Add special instructions to the seller:">
<input type="hidden" name="no_shipping" value="2">
<input type="hidden" name="shipping" value="5.00">
<input type="hidden" name="bn" value="PP-BuyNowBF:btn_buynowCC_LG.gif:NonHosted">
<input type="submit" value="Check Out with Paypal" class="button4" />
</form>
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
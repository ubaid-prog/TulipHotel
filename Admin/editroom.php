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
<title>Edit Rooms</title>
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
				<h2>Update Room Infromation</h2>
                <?php
					$db_username = 'root';
$db_password = '';
$db_name = 'obaid1';
$db_host = 'localhost';
$mysqli = new mysqli($db_host, $db_username, $db_password,$db_name);			
	$id=$_GET['id'];
	$results = $mysqli->query("select * from rooms where id= '$id' ");
	 echo '<form action="update.php" enctype="multipart/form-data" method="post" id="ContactForm">';
	
    if ($results) { 
	
        //fetch results set as object and output HTML
        while($obj = $results->fetch_object())
        {
			?>
					<div>
                    Room Title <div class="wrapper">    <input type="text" id="title" name="title" class="input" value="<?php echo $obj->title; ?>" ></div>
						Room Type<div class="wrapper"> 
                        <select id="type" class="input" name="type" style="height:30px;">
  <option value=""><?php echo $obj->type; ?></option>                       
  <option value="Single">Single</option>
  <option value="Double">Double</option>
  <option value="Suite">Suite</option>
  
</select>
                        
                        </div>
						Price <div class="wrapper">    <input type="text" id="price" name="price" value="<?php echo $obj->price; ?>" class="input" ></div>
                        
                        Availability<div class="wrapper"> 
                        <select id="av" class="input" name="av" style="height:30px;">
  <option value="Yes"><?php echo $obj->av; ?></option>            
  <option value="Yes">Yes</option>
  <option value="No">No</option>
  
</select>
                       
                       </div>
						Image<div class="wrapper">        <input type="file" name="filep" id="filep" value="<?php echo $obj->img; ?>"  class="input" ></div>
                       Description <div class="wrapper">  <textarea name="des" id="des" cols="1" rows="1"><?php echo $obj->des; ?></textarea></div>
                       <input type="hidden" id="id" name="id" value="<?php echo $obj->id; ?>" >
					
						
						<input type="submit" value="Update" class="button4" />
					</div>
				</form>
                
                <?php   
                    }
    
                    }
	               ?>
                
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
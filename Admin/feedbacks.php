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
<title>Feedbacks</title>
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
				<h2>Feedbacks</h2>
                <span>
   <?php 
   if(isset($_GET['msg']))
  echo "<p style='color:red'> ".$_GET['msg']." </p>";
  ?>
  </span>
			  <div class="wrapper">
              <table width="" cellpadding="0" cellspacing="0" id="box-table-a" summary="Employee Pay Sheet">
            <thead>
              <tr>
                
                <th width="50"  scope="col">id</th>
                <th width="63" scope="col">Name</th>       
                 
                <th width="82"  scope="col">Email</th>
                 <th width="82" scope="col">Message</th>
                <th width="110" scope="col">Time</th>
                <th width="70" scope="col">Day</th>                            
                <th width="70" scope="col">Date</th> 
				<th width="70" scope="col">Action</th> 
              </tr>
            </thead>
            <tbody>
				<?php
	$db_username = 'root';
$db_password = '';
$db_name = 'obaid1';
$db_host = 'localhost';
$mysqli = new mysqli($db_host, $db_username, $db_password,$db_name);
    
	$results = $mysqli->query("SELECT * FROM feedbacks");
    if ($results) { 
	
        //fetch results set as object and output HTML
        while($obj = $results->fetch_object())
        {
			?>
              <tr>
               
                <td height="33" align="center"><?php echo $obj->id;  ?></td>
               <td align="center"><?php echo $obj->name;  ?></td>
               <td align="center"><?php echo $obj->email;  ?></td>
                <td align="center"><?php echo $obj->message;  ?></td>
                <td align="center"><?php echo $obj->time;  ?></td>
                <td align="center"><?php echo $obj->day;  ?></td>
                <td align="center"><?php echo $obj->date;  ?></td>

                            
               <td align="center" width="39"><a href="deletefback.php?id=<?php echo $obj->id; ?>"> Delete</a></td>
               <td width="1">
                
              </tr>
              
              <?php   
                    }
    
                    }
	               ?>
              </table>
					
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
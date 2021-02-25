<div class="row">
				<h1><a href="index.php" id="logo">Heaven Palace</a></h1>
				<div class="right">
					<div class="wrapper">
						
					</div>
					<div class="wrapper">
						<nav>
							<ul id="top_nav">
                            <?php 
   if (isset($_SESSION['username'])) {   
   echo "<b>Welcome,</b> ".$_SESSION['username'];
   echo "<a href='mybooking.php'>|My Booking</a>"; 
   }   
   ?> 
 <?php 
    if (isset($_SESSION['username'])) {
     echo "<a href='logout.php'>|Logout</a>"; 
	 
    }
    else {
     echo "<li><a href='signup.php'>Register</a></li>
								<li><a href='login.php'>Log In</a></li>"; 
    }
   ?>
                            
								
								
							</ul>
						</nav>
					</div>	
				</div>
			</div>
			<div id="fb-root"></div>
<script>(function(d, s, id) {
  var js, fjs = d.getElementsByTagName(s)[0];
  if (d.getElementById(id)) return;
  js = d.createElement(s); js.id = id;
  js.src = "//connect.facebook.net/en_GB/sdk.js#xfbml=1&version=v2.9&appId=1761410717508763";
  fjs.parentNode.insertBefore(js, fjs);
}(document, 'script', 'facebook-jssdk'));</script>
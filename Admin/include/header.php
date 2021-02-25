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
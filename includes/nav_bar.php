
<div class="navbar-fixed">		
	<nav class="#212121 grey darken-4" role="navigation">
		<div class="nav-wrapper container"><a id="logo-container" href="/index.php" class="brand-logo"><font color="#5acefa">Search</font></a>
			<ul class="right hide-on-med-and-down">



			<?php
			// 
			// if user is logged in show username, a link to "my account" and the option to sign out.
			// if user is not logged in, show a link to the "sign in" and "sign up" form

			if($_SESSION["logedin"] == "yes"){
			?>
			<li><font size="2" color="grey">User: </font><font size="2" color="grey"><?php echo $user?></font></li>
			<li><a href="/user_account/account.php" target='_parent'><font size="2" color="#5acefa">My Account</font></a></li>
			<li><a href="/user_account/sign_out.php" target='_parent'><font size="2" color="#5acefa">Sign Out</font></a></li>
			<?php
			} else {
			?>
			<li><a href="/user_account/sign_in.php" target='_parent'><font size="2" color="#5acefa">Sign In</font></a></li>
			<li><a href="/user_account/sign_up.php" target='_parent'><font size="2" color="#5acefa">Sign Up</font></a></li>
			<?php
			}
			?>

			</ul>
			
		</div>						
	</nav>			
</div>				
			
					

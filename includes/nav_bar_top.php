



			<?php
			// 
			// if user is logged in show username, a link to "my account" and the option to sign out.
			// if user is not logged in, show a link to the "sign in" and "sign up" form

			if($_SESSION["logedin"] == "yes"){
			?>
			<li><font size="2" color="grey">User: </font><font size="2" color="grey"><?php echo $user?></font></li>
			<li><a href="/user_account/account.php" target='_parent'><font size="2">My Account</font></a></li>
			<li><a href="/user_account/sign_out.php" target='_parent'><font size="2">Sign Out</font></a></li>
			<?php
			}
			else {
			?>
			<li><a href="/user_account/sign_in.php" target='_parent'><font size="2">Sign In</font></a></li>
			<li><a href="/user_account/sign_up.php" target='_parent'><font size="2">Sign Up</font></a></li>
			<?php
			}
			?>


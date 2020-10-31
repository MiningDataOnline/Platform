			<?php
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
      
      
      
			<?php	
			if ($company_editor == 1 || $company_auditor == 1  || $user =='administrador') {
			?>			
			<li><a href="/bills_overview.php" target='_parent'><font size="2">Bills</font></a></li>
			<?php
			}
			?>

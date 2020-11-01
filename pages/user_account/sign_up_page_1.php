<?php
// connect to database db_1
$path = $_SERVER['DOCUMENT_ROOT'];
$path .= "/db_conn/conn_db_1.php";
require_once("$path");
?>



<?php
// start user session
session_start();
$user = $_SESSION["user"];
?>



<?php
/*
// find out wich permissions the user has, in case the user is signed in
$path = $_SERVER['DOCUMENT_ROOT'];
$path .= "/code/config/user_permissions.php";
require("$path");
*/
?>



<?php
// include header
$path = $_SERVER['DOCUMENT_ROOT'];
$path .= "/includes/header.html";
include("$path"); 
?>


<?php
// include top navigation bar
$path = $_SERVER['DOCUMENT_ROOT'];
$path .= "/includes/nav_bar.php";
include("$path"); 
?>



<center><font size="8" class ="lime-text" >Sign Up</font></center><br><br>




<?php
// user need to be signed out in order to access the sign up form

if($_SESSION["logedin"] == "yes"){
	$user = $_SESSION["user"];
?>
<div align="center"><font size="3" class ="lime-text" >You are currently signed in as "<?php echo $user?>"!</font></div><br>
<div align="center"><font size="3" class ="lime-text" >You need to sign out before you can create a new account!</font></div><br>
<?php
}
else {
?>
<form action="sign_up2.php" method="post"> 
	<div class="form-group"><br>					  
		<table>
			<col width="10%" /> 
			<col width="30%" />
			<col width="30%" /> 
			<col width="30%" /> 

			<tbody>
				<tr>
					<td>
					</td>							
					<td valign="middle" style="padding-bottom: 2em;">
						<div align="right"><font size="3" class ="lime-text" >Username &emsp;</font></div>
					</td>
					<td valign="middle"  style="padding-bottom: 2em;">
						<input style="background:#DEFFFF;" type="text" name="user"  value="" placeholder="Required" maxlength="25"  required>
						<div align="left"><font size="1" class ="lime-text" >Note 1: No white spaces allowed.</font></div>
					</td>
					<td>
					</td>								
				</tr>
				<tr>
					<td>
					</td>	
					<td valign="middle"  style="padding-bottom: 2em;">
						<div align="right"><font size="3" class ="lime-text" >Password &emsp;</font></div>
					</td>
					<td valign="middle"  style="padding-bottom: 2em;">
						<input style="background:#DEFFFF;" type="password" name="pass1"  value="" placeholder="Required" maxlength="30"  required>
						<div align="left"><font size="1" class ="lime-text" >Note 2: No white spaces allowed;</font></div>
						<div align="left"><font size="1" class ="lime-text" >Note 3: Password must cointain at least 5 digits;</font></div>
						<div align="left"><font size="1" class ="lime-text" >Note 4: Your password must not be the same as your username.</font></div>
					</td>
					<td>
					</td>	
				</tr>
				<tr>
					<td>
					</td>	
					<td valign="middle"  style="padding-bottom: 2em;">
						<div align="right"><font size="3" class ="lime-text" > Retype Password &emsp;</font></div>
					</td>
					<td valign="middle"  style="padding-bottom: 2em;">
						<input style="background:#DEFFFF;"  type="password" name="pass2"  value="" placeholder="Required" maxlength="30"  required>
					</td>
					<td>
					</td>	
				</tr>
				<tr>
					<td>
					</td>	
					<td valign="middle" style="padding-bottom: 2em;">
						<div align="right"><font size="3" class ="lime-text" >E-Mail &emsp;</font></div>
					</td>
					<td valign="middle"  style="padding-bottom: 2em;">
						<input style="background:#DEFFFF;" type="text" name="email"  value="" placeholder="Required"  maxlength="30" required>	
					</td>
					<td>
					</td>	
				</tr>
				<tr>
					<td>
					</td>	
					<td valign="middle" style="padding-bottom: 2em;">
						<div align="right"><font size="3" class ="lime-text" >ETH-Wallet Address &emsp;</font></div>
					</td>
					<td valign="middle"  style="padding-bottom: 2em;">
						<input style="background:#DEFFFF;" type="text" name="eth_wallet"  value="" placeholder="Optional"  maxlength="30" >
					</td>
					<td>
					</td>	
				</tr>				
			</tbody>
		</table>

		<center><button type="submit" name="sign_up_form">Sign Up</button></center>
	</div>
</form>

<?php
	 }
?>




<?php
// include footer
$path = $_SERVER['DOCUMENT_ROOT'];
$path .= "/includes/footer.html";
include ("$path"); 
?>



<?php
// close db connection
$conn_db_1->close();
?>

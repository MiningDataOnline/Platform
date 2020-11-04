<?php
// connect to database db_1
$path = $_SERVER['DOCUMENT_ROOT'];
$path .= "/db_conn/conn.php";
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
$path .= "/modules/includes/header.php";
include("$path"); 
?>


<?php
// include top navigation bar
$path = $_SERVER['DOCUMENT_ROOT'];
$path .= "/modules/includes/nav_bar.php";
include("$path"); 
?>



<?php
// write page title "Sign Up" if table users already exists
$query = "SELECT id FROM users";
$result = mysqli_query($conn, $query);
if(!empty($result)) {
?>	
<center><font size="8" class ="grey-text" >Sign Up</font></center><br><br>
<?php
}
// if users table does not exits, that means the administrators account has not been created yet
// write page title "Create Administrators Account" in case users table does not exist (that means, in case admins account has not been created yet)
else {
?>
<center><font size="8" class ="grey-text" >Create Administrators Account</font></center><br><br>
<?php
}
?>	




<?php
// user need to be signed out in order to be able to sign in :)

if($_SESSION["logedin"] == "yes"){
	$user = $_SESSION["user"];
?>
<div align="center"><font size="3" class ="grey-text" >You are currently signed in as "<?php echo $user?>"!</font></div><br>
<?php
}
else {
?>



							<form action="sign_in_page_2.php" method="post"> 
									<div class="form-group"><br>
										<table style="width: 100%; padding:0; margin:0; word-break: break-word; overflow-wrap: break-word; table-layout:fixed; ">
											<col width="10px" /> 
											<col width="40px" />
											<col width="40px" /> 
											<col width="10px" />
											<tr>
												<td>
												</td>
												<td valign="middle"  style="padding-bottom: 2em;">
													<div align="right"><font size="3" color="<?php echo $company_color?>">Username &emsp;</font></div>
												</td>
												<td valign="middle"  style="padding-bottom: 2em;">
													<input style="background:#DEFFFF;color:#000000;" class="form-control name_list" type="text" name="username"  value="" placeholder="Required" maxlength="25"  required>
												</td>
												<td>
												</td>
											</tr>
											<tr>
												<td>
												</td>
												<td valign="middle"  style="padding-bottom: 2em;">
													<div align="right"><font size="3" color="<?php echo $company_color?>">Password &emsp;</font></div><br>
												</td>
												<td valign="middle"  style="padding-bottom: 2em;">
													<input style="background:#DEFFFF;color:#000000;" class="form-control name_list" type="password" name="pass"  value="" placeholder="Required" maxlength="30"  required>
												</td>
												<td>
												</td>
											</tr>
										</table><br>

										<center><button type="submit" name="submit_sign_in_form">Sign In</button></center>
									</div>
								</form>


<?php
	 }
?>



<?php
// include footer
$path = $_SERVER['DOCUMENT_ROOT'];
$path .= "/modules/includes/footer.php";
include ("$path"); 
?>



<?php
// close db connection
$conn->close();
?>

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
require("$path");*/
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
// check if users table exists... if not give the user the option to create an administrator account by sigining up. The users table is created when admin creates an account
//  in case users table exists set $users_table=1 otherwise it will sta =0
$query = "SELECT id FROM users";
$result = mysqli_query($conn, $query);
if(empty($result)) {	
	?>
	<center><a href="/pages/user_account/sign_up_page_1.php" target='_parent'><font size="5" color="#5acefa">Get Started</font></a></center>
	<?php
	// in case users table exits and the user is admin, do the following
	if ($user=='admin') {
		// check if table config exits.... if not, give admin the link to settings page	
		$query = "SELECT id FROM config";
		$result = mysqli_query($conn, $query);
		if(empty($result)) {
			?>
			<center><a href="/pages/settings/settings.php" target='_parent'><font size="5" color="#5acefa">Settings</font></a></center>
			<?php	
		}
	}		
}
?>	




<br><br><br>
 <!--Embed logo stored in dropbox-->
 <center><img src="https://www.dropbox.com/s/ipzgo08y589xvsu/Screenshot%20from%202020-10-29%2000_05_07%281%29.png?raw=1" height="30%" width="30%"></center>






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

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
<br><br><br>


<?php
// check if users table exists... 
$users_table=0;
$query = "SELECT id FROM users";
$result = mysqli_query($conn, $query);
if(!empty($result)) {
$users_table=1;
}
?>


<?php
// check if table config exits....
$config_table=0;
$query = "SELECT id FROM config";
$result = mysqli_query($conn, $query);
if(!empty($result)) {
$config_table=1;
}
?>




<div class="row">
<div class="col s12 m4 left">
  <div class="#212121 grey darken-4">
  <div class="full-height">

test
</div>
</div>
</div>
	
	
<div class="col s12 m8 right">
	
<?php
if($users_table==0 && $config_table==0) {
?>
<center><a href="/pages/user_account/sign_up_page_1.php" target='_parent'><font size="5" color="#5acefa">Get Started</font></a></center>
<?php	
}
?>	

<?php
if($users_table==1 && $config_table==0 && empty($user)) {
?>
<center><a href="/pages/user_account/sign_in_page_1.php" target='_parent'><font size="5" color="#5acefa">Sign In</font></a></center>
<?php	
}
?>

<?php
if($users_table==1 && $config_table==0 && $user=='admin') {
?>
<center><a href="/pages/settings/settings_page_1.php" target='_parent'><font size="5" color="#5acefa">Settings</font></a></center>
<?php	
}
?>
	
<br><br><br>
 <!--Embed logo stored in dropbox-->
 <center><img src="https://www.dropbox.com/s/ipzgo08y589xvsu/Screenshot%20from%202020-10-29%2000_05_07%281%29.png?raw=1" height="30%" width="30%"></center>


</div>	
</div>


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

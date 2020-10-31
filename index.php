<?php
// connect to database
$path = $_SERVER['DOCUMENT_ROOT'];
$path .= "/db_conn/db_1_start_conn.php";
require("$path");
?>




<?php
// start session
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
$path .= "/includes/header.php";
include("$path"); 
?>

		
<?php
// include top navigation bar
$path = $_SERVER['DOCUMENT_ROOT'];
$path .= "/includes/nav_bar_top.php";
include("$path"); 
?>



 <!--Embed logo stored in dropbox-->
 <center><img src="https://www.dropbox.com/s/ipzgo08y589xvsu/Screenshot%20from%202020-10-29%2000_05_07%281%29.png?raw=1" height="30%" width="30%"></center>



		<!--  Scripts-->
		<script src="https://code.jquery.com/jquery-2.1.1.min.js"></script>
		<script src="/js/materialize.js"></script>
		<script src="/js/init.js"></script>



<?php
// include footer
$path = $_SERVER['DOCUMENT_ROOT'];
$path .= "/includes/footer.php";
include ("$path"); 
?>

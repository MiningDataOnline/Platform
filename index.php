<?php
// include header
$path = $_SERVER['DOCUMENT_ROOT'];
$path .= "/includes/header.php";
require_once("$path"); 
?>

<div class="navbar-fixed">		
	<nav class="#212121 grey darken-4" role="navigation">
		<div class="nav-wrapper container"><a id="logo-container" href="/index.php" class="brand-logo">MiningDataOnline</a>
			<ul class="right hide-on-med-and-down">			
      <?php
      // include top navigation bar
      $path = $_SERVER['DOCUMENT_ROOT'];
      $path .= "/includes/nav_bar_top.php";
      include("$path"); 
      ?>
			</ul>
		</div>						
	</nav>			
</div>	


 <!--Embed logo stored in dropbox-->
 <center><img src="https://www.dropbox.com/s/ipzgo08y589xvsu/Screenshot%20from%202020-10-29%2000_05_07%281%29.png?raw=1" height="30%" width="30%"></center>


<?php
// include footer
$path = $_SERVER['DOCUMENT_ROOT'];
$path .= "/includes/footer.php";
require_once("$path"); 
?>

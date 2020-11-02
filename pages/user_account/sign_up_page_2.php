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
$user = mysqli_real_escape_string($conn, $_POST['user']);
$pass1 = mysqli_real_escape_string($conn, $_POST['pass1']);
$pass2 = mysqli_real_escape_string($conn, $_POST['pass2']);
$email = mysqli_real_escape_string($conn, $_POST['email']);
$eth_wallet = mysqli_real_escape_string($conn, $_POST['eth_wallet']);
$submit_sign_up_form = mysqli_real_escape_string($conn, $_POST['submit_sign_up_form']);

// user account will be created if  i stays equal to 0 during users data verification 
$i = 0;
?> 





<center>

	<?php
	// sign up only possible while signed out



	// in case user is signed in, inform user to sign out first
	if($_SESSION["logedin"] == "yes"){
		

	$user = $_SESSION["user"];
	?>
	<div align="center"><font size="3"  class ="<?php echo $color_text; ?>">You are currently signed in as "<?php echo $user?>"!</font></div><br>
	<div align="center"><font size="3" color="#F0F0F0">You need to sign out before you can create a new account!</font></div><br>

	<?php
	}
	// in case user is signed out and $submit_sign_up_form is not empty check if user data is ok, and create users account if users data are ok
	else if (isset($submit_sign_up_form)) {
			
	// as soon as one of the provided data is not ok -> i=1 and the user account will not be created

		
	// if a required user data is missing -> i=1
	if (empty($user) || empty($pass1) || empty($pass2) || empty($email) || empty($eth_wallet))
	{
	?> 
	<font size="3" color="#F0F0F0">
	<?php
	echo "At least one required user data is missing!";
	$i = 1;
	?> 
	</font><br><br>
	<?php
	}
	?> 		
		
		
	<?php		
	// if username account already exists -> i=1
	$sql = "SELECT user FROM users WHERE user='$user'";
	$result = $conn->query($sql);
	if ($result->num_rows > 0) {
	?> 
	<font size="3" color="#F0F0F0">
	<?php
	echo "This username has already been taken!";
	$i = 1;
	?> 
	</font><br><br>
	<?php
	}
	?> 
	
	
	
	<?php
	// if username contains white spaces  -> i=1
	if (preg_match('/\s/',$user))
	{
	?> 
	<font size="3" color="#F0F0F0">
	<?php
	echo "Username contains whitespace (not allowed)!";
	$i = 1;
	?> 
	</font><br><br>
	<?php
	}
	?> 
	
	
	<?php
	// if password and retyped passwords are not the same -> i=1            
	if ($pass1 != $pass2)
	{
	?> 
	<font size="3" color="#F0F0F0">
	<?php
	echo "Passwords don't match!";
	$i = 1;
	?> 
	</font><br><br>
	<?php
	}
	?> 
	
	
	
	<?php
	// if password contain whate spaces -> i=1                         
	if (preg_match('/\s/',$pass1))
	{
	?> 
	<font size="3" color="#F0F0F0">
	<?php
	echo "Password contains whitespace (not allowed)!";
	$i = 1;
	?> 
	</font><br><br>
	<?php
	}
	?> 
	
	
	
	<?php
	// if password contains at less than 5 digits  -> i=1                                      
	if (strlen( $pass1 ) <= 4)
	{
	?> 
	<font size="3" color="#F0F0F0">
	<?php
	echo "Password must countain at least 5 digits!";
	$i = 1;
	?> 
	</font><br><br>
	<?php
	}
	?> 
	
	
	
	<?php
	// if password and username are the same  -> i=1                                             
	if ($pass1 == $user)
	{
	?> 
	<font size="3" color="#F0F0F0">
	<?php
	echo "Username and password must not be the same!";
	$i = 1;
	?> 
	</font><br><br>
	<?php
	}
	?> 
	

	
	<?php
	// if email format not valid  -> i=1                                             
 	if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
	?> 
	<font size="3" color="#F0F0F0">
	<?php
	echo "Wrong email format!";
	$i = 1;
	?> 
	</font><br><br>
	<?php
	}
	?> 	
	
	
	
	
	<?php
	// if i=1 (something wrong with provided data) give the user the option to try again                                             
	if ($i == 1)
	{
	?> 
	<a href="sign_up_page_1.php"><font size="3" color="#81DAF5">Try Again</font></a>
	<?php
	}
	?>
	
	
	
	
	<?php
	// if everything is alright (i still = 0) 

	if ($i==0)
	{	
	// if i still = 0 do the following
		// -> create users table in db in case username = admin (first account created)
		// -> insert users data in db
	?>


			<?php
			// users tables and it columns are once created when admin creates an account (username = admin) before inserting users data in the database
			if ($user=='admin'){		

			// create users table if it does not exist
			$table='users';
			$query = "SELECT id FROM $table";
			$result = mysqli_query($conn, $query);
			if(empty($result)) {
				$query = "CREATE TABLE ".$table." (
						  ID int(11) AUTO_INCREMENT,
						  PRIMARY KEY  (id)
						  )";
				$result = mysqli_query($conn, $query);
			}

			// add username column
			$query = mysqli_query("SHOW COLUMNS FROM `$table` LIKE 'username'");
			$result = mysqli_query($conn, $query);
			if(empty($result)) {
				$sqlalt="alter table `$table` add `user` varchar(25)";
				$conn->query($sqlalt);
			}

			// add password column
			$query = mysqli_query("SHOW COLUMNS FROM `$table` LIKE 'pass'");
			$result = mysqli_query($conn, $query);
			if(empty($result)) {
				$sqlalt="alter table `$table` add `pass` varchar(50)";
				$conn->query($sqlalt);
			}

			// add email column
			$query = mysqli_query("SHOW COLUMNS FROM `$table` LIKE 'email'");
			$result = mysqli_query($conn, $query);
			if(empty($result)) {
				$sqlalt="alter table `$table` add `email` varchar(25)";
				$conn->query($sqlalt);
			}

			// eth wallet address column
			$query = mysqli_query("SHOW COLUMNS FROM `$table` LIKE 'eth_wallet'");
			$result = mysqli_query($conn, $query);
			if(empty($result)) {
				$sqlalt="alter table `$table` add `eth_wallet` varchar(42)";
				$conn->query($sqlalt);
			}


			}
			?>
			
			
			

			<?php
			// insert user data in the database
			
			$stmt = $conn->prepare("INSERT INTO users (user, pass, email, eth_wallet) VALUES (?, ?, ?, ?)");
			$stmt->bind_param("ssss", $user, $pass, $email, $eth_wallet);
			// set parameters and execute
			$pass = password_hash($pass2, PASSWORD_DEFAULT);
			$user = $user;
			$email = $email;
			$eth_wallet = $eth_wallet;
			$stmt->execute();
			?> 

			<font size="3" color="#F0F0F0">
				<?php
					echo "You have successfully signed up!";
				?> 
			</font>

			<br>
			<a href="sign_up_page_1.php"><font size="3" color="#81DAF5">Sign In</font></a><br><br>



<?php
}
}
?>

</center>


<?php
// include footer
$path = $_SERVER['DOCUMENT_ROOT'];
$path .= "/includes/footer.html";
include ("$path"); 
?>



<?php
// close db connection
$conn->close();
?>

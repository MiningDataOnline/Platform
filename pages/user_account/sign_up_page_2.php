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

// everything alright with provided user data as long as i=0, otherwise (if i=1) the user account will not be created
$i = 0;
?> 





<center>

	<?php
	// sign up only possible while signed out



	if($_SESSION["logedin"] == "yes"){
	// in case user is signed in, inform the user that he must sign out first

	$user = $_SESSION["user"];
	?>
	<div align="center"><font size="3" color="#F0F0F0">You are currently signed in as "<?php echo $user?>"!</font></div><br>
	<div align="center"><font size="3" color="#F0F0F0">You need to sign out before you can create a new account!</font></div><br>

	<?php
	}
	else if (isset($submit_sign_up_form)) {
	// in case user is signed out do this

		
	// check if user already exists
	$sql = "SELECT user FROM users WHERE user='$user'";
	$result = $conn->query($sql);
	if ($result->num_rows > 0) {
	?> 
	<font size="3" color="#F0F0F0">
		<?php
			echo "This username has already been taken!";
		?> 
	</font>
	<?php
			$i = 1;
	?> 
	<br><br>
	<a href="/sign_up_in_out/sign_up.php"><font size="3" color="#81DAF5">Try Again</font></a><br><br>

	
	<?php
	// check if username contains white spaces
	}
	else if (preg_match('/\s/',$user))
	{
	?> 
	<font size="3" color="#F0F0F0">
		<?php
			echo "Username contains whitespace (not allowed)!";
		?> 
	</font>
	<?php
			$i = 1;
	?>
	<br><br>
	<a href="/sign_up_in_out/sign_up.php"><font size="3" color="#81DAF5">Try Again</font></a><br><br>

	
	<?php
	// check if password and retyped passwords are the same             
	}
	else if ($pass1 != $pass2)
	{
	?> 
	<font size="3" color="#F0F0F0">
		<?php
			echo "Passwords don't match!";
		?> 
	</font>
	<?php
			$i = 1;
	?>
	<br><br>
	<a href="/sign_up_in_out/sign_up.php"><font size="3" color="#81DAF5">Try Again</font></a><br><br>

	
	<?php
	// check if password contain whate spaces                          
		}
		else if (preg_match('/\s/',$pass1))
		{
	?> 
	<font size="3" color="#F0F0F0">
		<?php
			echo "Password contains whitespace (not allowed)!";
		?> 
	</font>
	<?php
			$i = 1;
	?>
	<br><br>
	<a href="/sign_up_in_out/sign_up.php"><font size="3" color="#81DAF5">Try Again</font></a><br><br>

	
	<?php
	// check if password contains at least 5 digits                                        
		}
		else if (strlen( $pass1 ) <= 4)
		{
	?> 
	<font size="3" color="#F0F0F0">
		<?php
			echo "Password must countain at least 5 digits!";
		?> 
	</font>
	<?php
			$i = 1;
	?>
	<br><br>
	<a href="/sign_up_in_out/sign_up.php"><font size="3" color="#81DAF5">Try Again</font></a><br><br>

	
	<?php
	// make sure that password and username are not the same                                       
		}
		else if ($pass1 == $user)
		{
	?> 
	<font size="3" color="#F0F0F0">
		<?php
			echo "Username and password must not be the same!";
		?> 
	</font>
	<?php
			$i = 1;
	?>
	<br><br>
	<a href="/sign_up_in_out/sign_up.php"><font size="3" color="#81DAF5">Try Again</font></a><br><br>

	
	<?php
	// if everything alright -> insert users data in the database
		}
		else if ($i==0)
		{
	?>


			<?php
			// the follwing will only be executed once... when admin creates an account
			// table users is created
			// username, pass, email and eth_wallet columns created

			if ($user='admin'){		

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
				$sqlalt="alter table `$table` add `username` varchar(25)";
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
			<a href="/sign_up_in_out/sign_in.php"><font size="3" color="#81DAF5">Sign In</font></a><br><br>



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

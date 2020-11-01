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
$user = mysqli_real_escape_string($conn, $_POST['user']);
$pass1 = mysqli_real_escape_string($conn, $_POST['pass1']);
$pass2 = mysqli_real_escape_string($conn, $_POST['pass2']);
$email = mysqli_real_escape_string($conn, $_POST['email']);
$eth_wallet = mysqli_real_escape_string($conn, $_POST['eth_wallet']);
$submit_sign_up_form = mysqli_real_escape_string($conn, $_POST['submit_sign_up_form']);

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

	// check if username contains white spaces
	<?php
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
	?>
	<br><br>
	<a href="/sign_up_in_out/sign_up.php"><font size="3" color="#81DAF5">Try Again</font></a><br><br>

	// check if password and retyped passwords are the same             
	<?php
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
	?>
	<br><br>
	<a href="/sign_up_in_out/sign_up.php"><font size="3" color="#81DAF5">Try Again</font></a><br><br>

	// check if password contain whate spaces                          
	<?php
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
	?>
	<br><br>
	<a href="/sign_up_in_out/sign_up.php"><font size="3" color="#81DAF5">Try Again</font></a><br><br>

	// check if password contains at least 5 digits                                        
	<?php
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
	?>
	<br><br>
	<a href="/sign_up_in_out/sign_up.php"><font size="3" color="#81DAF5">Try Again</font></a><br><br>

	// make sure that password and username are not the same                                       
	<?php
		}
		else if ($pass1 == $user)
		{
	?> 
	<font size="3" color="#F0F0F0">
		<?php
			echo "Username and password must not be the same!";
		?> 
	</font>
	<br><br>
	<a href="/sign_up_in_out/sign_up.php"><font size="3" color="#81DAF5">Try Again</font></a><br><br>

	// if everything alright insert users data in the database
	<?php
		}
		else if ($pass1 == $pass2 && $i==0)
		{
			$stmt = $conn->prepare("INSERT INTO users (user, pass, email, question1, answer1, question2, answer2) VALUES (?, ?, ?, ?, ?, ?, ?)");
			$stmt->bind_param("sssssss", $user, $pass, $email, $question1, $answer1, $question2, $answer2);
			// set parameters and execute
			$pass = password_hash($pass2, PASSWORD_DEFAULT);
			$answer1 = password_hash($answer1, PASSWORD_DEFAULT);
			$answer2 = password_hash($answer2, PASSWORD_DEFAULT);
			$user = $user;
			$email = $email;
			$stmt->execute();
	?> 

	<font size="3" color="#F0F0F0">
		<?php
			echo "You have successfully signed up!";
		?> 
	</font>

	<br>
	<a href="/sign_up_in_out/sign_in.php"><font size="3" color="#81DAF5">Sign In</font></a><br><br>

</center>




<?php
}
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

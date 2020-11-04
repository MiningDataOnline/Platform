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




<center><font size="8" class ="grey-text" >Sign In</font></center><br><br>







   <center>

              <?php
              // $username = $user1... received from the sign in form. $user on the other hand comes from the session start required above
              $user1 = mysqli_real_escape_string($conn, $_POST['username']);
              $pass = mysqli_real_escape_string($conn, $_POST['pass']);



              $sql11 = "SELECT failed_attempts, email, failed_recover_attempts, pass FROM users WHERE user='$user1' LIMIT 1";
              $result11 = $conn->query($sql11);
              if ($result11->num_rows > 0) {
                while($row11 = $result11->fetch_assoc()) {
                  $failed_attempts =  $row11["failed_attempts"];
                  $failed_recover_attempts =  $row11["failed_recover_attempts"];
                  $email =  $row11["email"];
                  $passdb =  $row11["pass"];
                }
              }







              if($_SESSION["logedin"] == "yes"){
                $user = $_SESSION["user"];
              ?>

              <div align="center"><font size="3" color="#F0F0F0">You are currently signed in as "<?php echo $user?>"!</font></div><br>

              <?php
              }
              else if ($failed_attempts > 5) {
                $sql = "UPDATE users SET failed_attempts = failed_attempts+1 WHERE user='$user1'";
                mysqli_query($conn, $sql);
              ?>
              <br><br>
              <font size="3" color="#F0F0F0">This account has been blocked because of too many failed attempts to log in!</font><br><br>

              <font size="1" color="#F0F0F0">Note: To many failed attempts to log in could cause us to block your IP-Address for security reasons! Please quit trying to log in after your account has been blocked! Try to recover your account (if this function is still available for your account) to unblock your account</font><br><br>

              <?php
                if ($failed_recover_attempts  >= 5) {
                }
                else
                {
              ?>
              <a href="recover_account.php?user1=<?php echo $user1; ?>"><font size="3" color="#81DAF5">Recover Account</font></a><br><br>
              <font size="3" color="#81DAF5">OR</font><br><br>
              <?php
                }
              ?>



              <a href="/home.php"><font size="3" color="#81DAF5">Go To Homepage</font></a><br><br>
              
              
              <?php
              }
              else if (password_verify($pass, $passdb)) {
                $_SESSION["logedin"] = "yes";
                $_SESSION["user"] = "$user1";
                $sql = "UPDATE users SET failed_attempts = 0 WHERE user='$user1'";
                mysqli_query($conn, $sql);
              ?>
              <br><br>
              <font size="3" color="#F0F0F0">You are now signed in!</font><br><br>
              <a href="/index.php"><font size="3" color="#81DAF5">Continue</font></a><br><br>
              <?php
              }
              else
              {
              ?> 
              <font size="3" color="#F0F0F0">
                <?php
                echo "Upps! Wrong username or password!";
                ?> 
              </font>

              <br><br><br>
              <a href="sign_in.php"><font size="3" color="#81DAF5">Try Again</font></a><br><br>
              <?php


              }


              ?> 
              <br><br>



            </center>









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

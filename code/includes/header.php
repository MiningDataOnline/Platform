<?php
// connect to database
$path = $_SERVER['DOCUMENT_ROOT'];
$path .= "/private/db_1_start_conn.php";
require("$path");
?>




<?php
// start session
session_start();
$user = $_SESSION["user"];
?>




<?php	
// find out wich permissions the user has, in case the user is signed in
$path = $_SERVER['DOCUMENT_ROOT'];
$path .= "/code/config/user_permissions.php";
require("$path");
?>
	
	
	




<!DOCTYPE html>
<html lang="en">
	<head>
		<meta http-equiv="Content-Type" content="text/html; charset=UTF-8"/>
		<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1.0"/>
		<title>MinindDataOnline</title>
    <link href="https://fonts.googleapis.com/css2?family=MuseoModerno:wght@100&display=swap" rel="stylesheet">		
		<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
		<link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
		<link href="/css/materialize.css" type="text/css" rel="stylesheet" media="screen,projection"/>
		<link href="/css/style.css" type="text/css" rel="stylesheet" media="screen,projection"/>	

		<style>
			body {
				background-color: #263238;
				color: rgba(255,255,255,0.8);
			}
			nav.nav-center ul {
				text-align: center;
			}
			nav.nav-center ul li {
				display: inline;
				float: none;
			}
			nav.nav-center ul li a {
				display: inline-block;
			}	
			
			::placeholder { /* Chrome, Firefox, Opera, Safari 10.1+ */
			  color: grey;
			  opacity: 1; /* Firefox */
			}

			:-ms-input-placeholder { /* Internet Explorer 10-11 */
			  color: grey;
			}

			::-ms-input-placeholder { /* Microsoft Edge */
			  color: grey;
			}			

			input[type="text"], textarea {
			  background-color : white; 
			}	
			

		</style>
	</head>
	<body>

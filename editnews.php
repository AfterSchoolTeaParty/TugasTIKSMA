<?php
	session_start();
	$userr=$_SESSION["user"];

	if(!isset($_SESSION["login"])){
		header("location: ../login.php");
		exit;
	}
require "function.php";
if(isset($_POST["back"])){
	header("location: index.php");

}
?>
<!DOCTYPE html>
<html>
<head>
	<title>Edit User</title>
	<link rel="stylesheet" type="text/css" href="style10.css">
</head>
<body>
	<div class="atas">
		<p>Welcome, <?=$userr?>!</p>
	</div>
	<div class="logo">
		<h1>LibraryKu - User</h1>
	</div>
	<div class="button">
		<form action="" method="post"> 
			<button class="btn" type="submit" name="back">Back</button>
		</form>
	</div>
	<br><br><br></br>
</body>
</html>
<?php
	session_start();
	$userr=$_SESSION["user"];
	if(!isset($_SESSION["login"])){
		header("location: ../login.php");
		exit;
	}
require 'function.php';
if(isset($_POST["back"])){
	header("location: admin.php");
}

if(isset($_POST["submit"])){
	if(fadd($_POST)>0){
		echo "<script> alert('data berhasil ditambahkan'); document.location.href ='admin.php'; </script>";

	}
	else{
		echo "<script> alert('data gagal ditambahkan'); document.location.href ='admin.php'; </script>";
	}
}

?>


<!DOCTYPE html>
<html>
<head>
	<title>Add user</title>
	<link rel="stylesheet" type="text/css" href="style10.css">
</head>
<body>
	<div class="atas">
		<p>Welcome, <?=$userr?>!</p>
	</div>
	<div class="logo">
		<h1>Bookism - Add User</h1>
	</div>
	<div class="button">
		<form action="" method="post"> 
			<button class="btn" type="submit" name="back">Back</button>
		</form>
	</div>
	<br><br><br></br>

	<div class="container">
	<div class="content">
	<form action="" method="post">
		<ul>
			<li>
				<label for="username">Username: </label>
				<input type="text" name="username" id="username" required>
			</li><br>
			<li>
				<label for="password">Password: </label>
				<input type="password" name="password" id="password" required>
			</li><br>
			<li>
				<label for="fullname">Full Name: </label>
				<input type="text" name="fullname" id="fullname" required>
			</li><br>
			<li>
				<label for="email">Email: </label>
				<input type="text" name="email" id="email" required>
			</li><br>
			<li>
				<label for="usertype">User Type: </label>
				<input type="text" name="usertype" id="usertype" required>
			</li><br>
			<li>
				<button type="submit" name="submit">Add!</button>
			</li>
		</ul>
	</form>
	</div>
	</div>
</body>
</html>
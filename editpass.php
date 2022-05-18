<!-- Merupakan edit untuk index -->

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

// mengambil data dalam url
$id=$_GET["id"];

//query data user berdasarkan id


$userss=fquery("SELECT * FROM user WHERE id =$id")[0];


if(isset($_POST["submit"])){

	if(fedit2($_POST)>0){
		echo "<script> alert('data berhasil diubah'); document.location.href ='index.php'; </script>";
	}
	else{
		echo "<script> alert('data gagal diubah'); document.location.href ='index.php'; </script>";
	}


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
		<h1>Bookism - Password</h1>
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
		<input type="hidden" name="id" value="<?=$userss["id"]?>">
		<input type="hidden" name="fuser" value="<?=$userss["username"];?>">
		<ul>
			<li>
				<label for="password">Password: </label>
				<input type="password" name="password" id="password" required>
			</li><br>
			<li>
				<label for="password2">Re-enter Password: </label>
				<input type="password" name="password2" id="password2" required>
			</li><br>
			<li>
				<label for="oldpass">Past Password: </label>
				<input type="password" name="oldpass" id="oldpass" required>
			</li><br>
			<li>
				<button type="submit" name="submit">Update!</button>
			</li>
	</form>
	</div>
	</div>
</body>
</html>
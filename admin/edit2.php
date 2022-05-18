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
	header("location: admin.php");

}

// mengambil data dalam url
$id=$_GET["id"];

//query data user berdasarkan id


$userss=fquery("SELECT * FROM user WHERE id =$id")[0];


if(isset($_POST["submit"])){

	$masterpassword=mysqli_query($conn, "SELECT * FROM user WHERE id=1");
	$checkmp=$_POST["mpass"];

	$row = mysqli_fetch_assoc($masterpassword);


	if(password_verify($checkmp, $row["password"])){
		if(fedit($_POST)>0){
			echo "<script> alert('data berhasil diubah'); document.location.href ='admin.php'; </script>";

		}
		else{
			echo "<script> alert('data gagal diubah'); document.location.href ='admin.php'; </script>";
		}
	}
	else{
		echo "<script> alert('data gagal diubah'); document.location.href ='admin.php'; </script>";
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
		<h1>Bookism - User</h1>
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
				<label for="username">Username: </label>
				<input type="text" name="username" id="username" required value="<?=$userss["username"];?>">
			</li><br>
			<li>
				<label for="password">Password: </label>
				<input type="password" name="password" id="password" required placeholder="masukkan password">
			</li><br>
			<li>
				<label for="fullname">Full Name: </label>
				<input type="text" name="fullname" id="fullname" required value="<?=$userss["fullname"];?>">
			</li><br>
			<li>
				<label for="email">Email: </label>
				<input type="text" name="email" id="email" required value="<?=$userss["email"];?>">
			</li><br>
			<li>
				<label for="usertype">User Type: </label>
				<input type="text" name="usertype" id="usertype" required value="<?=$userss["type"];?>">
			</li><br>
			<li>
				<label for="mpass">Master Pass: </label>
				<input type="password" name="mpass" id="mpass" required>
			</li><br>
			<li>
				<button type="submit" name="submit">Update!</button>
			</li>
		</ul>
	</form>
	</div>
	</div>
</body>
</html>
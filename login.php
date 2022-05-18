<?php
	session_start();
	require 'function.php';
	//cek cookie
	if(isset($_COOKIE['id'])&&isset($_COOKIE['key'])){
	$id=$_COOKIE['id'];
	$key=$_COOKIE['key'];

	//ambil username berdasarkan id
	$result=mysqli_query($conn, "SELECT username FROM user WHERE id= $id");
	$row=mysqli_fetch_assoc($result);

	//cek cookie dan username
	if($key===hash('sha256',$row['username'])){
		$_SESSION['login']=true;
	}
	}
	if(isset($_SESSION["login"])){
		header("location: index.php");
	exit;
	}

	if(isset($_POST["login"])){
		$username=$_POST["username"];
		$password=$_POST["password"];

		$result=mysqli_query($conn, "SELECT * FROM user WHERE username ='$username'");
	//cek username
	if(mysqli_num_rows($result) === 1){

		//cek password
		$row = mysqli_fetch_assoc($result);
		if(password_verify($password, $row["password"])){

			//set session
			$_SESSION["login"]=true;
			$_SESSION["user"]=$username;
			if(isset($_POST['remember'])){
				//buat cookie
				setcookie('id',$row['id']);
				setcookie('key',hash('sha256',$row['username']));
			}

			header("location: index.php");
			exit;
		}
	}

	$error = true;

	}
?>

<!DOCTYPE html>
<html>
<head>
	<title>Login - Bookism</title>
	<link rel="stylesheet" type="text/css" href="styles.css">
</head>
<body>
	<div class="header">
		<h1>Login!</h1>
	</div>
	<?php if(isset($error)){echo "<script> alert('Username/password salah');</script>";}?>
	</div>
	<ul>
	<div class="content">		
	<form class="formel" action="" method="post">
		<li>
			<div class="input">
			<label for="username">Username</label>
			<input type="text" name="username" id="username" required autocomplete="off">
			</div>
		</li>
		<li>
			<div class="input">
			<label for="password">Password</label>
			<input type="password" name="password" id="password" required>
			</div>
		</li>
		<li>
			<input type="checkbox" name="remember" id="remember">
			<label for="remember">Remember me</label>
		</li>
		<li>
			<div class="input">
			<button type="submit" name="login" class="btn">Login</button>
			</div>
		</li>
		<p>Don't have any account yet? <a href="register.php">Register</a></p>
	</form>
	</div>
	</ul>
</body>
</html>
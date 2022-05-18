<?php
	require 'function.php';
	if(isset($_POST["register"])){
		if(registrasi($_POST)){
			echo "<script> alert('berhasil ditambahkan');</script>";
			header("location: login.php");
			exit;
		}
		else{
			echo mysqli_error($conn);
			echo "<script> alert('gagal ditambahkan'</script>";
		}
	}
?>

<!DOCTYPE html>
<html>
<head>
	<title>Register - Bookism</title>
	<link rel="stylesheet" type="text/css" href="styles.css">
</head>
<body>
	<div class="header">
		<h1>Register!</h1>
	</div>
	<ul>		
	<form class="formel" action="" method="post">
	<div class="content">	
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
			<div class="input">
			<label for="password2">Re-enter Password</label>
			<input type="password" name="password2" id="password2" required>
			</div>
		</li>
		<li>
			<div class="input">
			<button type="submit" name="register" class="btn">register</button>
			</div>
		</li>
		<p>Already have an account? <a href="login.php">Login</a></p>
	</div>
	</form>
	</ul>
</body>
</html>
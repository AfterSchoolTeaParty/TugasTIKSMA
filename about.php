<!-- E:\Database\_PROGRAMME\XAMPP\htdocs\Projek -->
<?php
	session_start();
	require 'function2.php';
	require 'function.php';
	if(!isset($_SESSION["login"])){
		header("location: login.php");
		exit;
	}
	$users=$_SESSION["user"];
	$user=fquery("SELECT * FROM user WHERE username = '$users'")[0];
?>

<!DOCTYPE html>
<html>
<head>
	<title>Bookism</title>
	<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body style="background-color: #1a1a1a;">
	<div class="containall">
		<div class="atas">
			<p>Welcome, <?=$user["username"]?>!</p>
		</div>
		<div class="logo">
			<h1>Bookism</h1>
		</div>
		<nav>		
			<ul>
				<li><a href="index.php">Home</a></li>
				<li><a href="booklist.php">Book List</a></li>
				<li><a href="about.php">About us</a></li>
			</ul>
			<div class="searchbar">
				<form class="formel" action="booklist.php" method="post">
					<input type="text" name="keyword" class="sbar" size="50" border="none" autofocus placeholder="Search Book" autocomplete="off">
					<button class="buttons" type="submit" name="search" border="none">Search!</button>
				</form>
			</div>
		</nav>
		<br>
		<div class="container" style="flex-direction: column;">
			<h1>About Us</h1><br>
			<?php for($start=1;$start<=4; $start++):?>
				<?php $userz=fquery("SELECT * FROM user")[$start];?>
				<div class="contents" style="width: 90%">
					<div class="book" style="background-color: #242424; border: none;">
					<h1><?=ucfirst($userz["username"])  ?></h1>
					<p>Name : <?=$userz["fullname"]  ?></p>
					<p>Email : <?=$userz["email"]  ?></p>
					<p><h2><?=$userz["type"]  ?><h2></p>
					</div>
				</div><br>
			<?php endfor;?>
		</div>
	</div>
</body>
</html>
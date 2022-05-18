<!-- E:\Database\_PROGRAMME\XAMPP\htdocs\Projek -->
<?php
	session_start();
	require 'function2.php';
	require 'function.php';
	if(!isset($_SESSION["login"])){
		header("location: login.php");
		exit;
	}
	//pagination
	//konfigurasi

	$users=$_SESSION["user"];
	$book=query("SELECT * FROM book ORDER BY id DESC");
	$user=fquery("SELECT * FROM user WHERE username = '$users'")[0];
	if(isset($_POST["logout"])){
		header("location: logout.php");
		exit;
	}
?>

<!DOCTYPE html>
<html>
<head>
	<title>Bookism</title>
	<link rel="stylesheet" href="style.css">
</head>
<body style="background-color: #1a1a1a;">
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
		<div class="container">
			<div class="contentz">
				<div class="content" style="border: none;">
					<h1>Newest Book</h1>
				</div>
				<div class="content" style="border: none; padding: none; width: 100%">
				<?php $i=1?>
				<?php foreach($book as $row): ?>
					<?php $i++?>
					<?php if($i<=6):?>
						<div class="book">
							<div class="gambar">
								<img src="img/<?=$row["cover"]?>">
							</div>
							<div class="konten">
								<h5><a style="color: black; text-decoration: none;" href="view.php?id=<?=$row["id"]?>"><?=$row["judul"]?></a></h5>
							</div>
						</div>
					<?php else: break;?>
					<?php endif;?>
				<?php endforeach?>
				</div>
				<br>
				<div class="content" style="border: none;">
					<h1>Oldest Book</h1>
				</div>
				<div class="content" style="border: none; padding: none; width: 100%">
				<?php $i=1?>
				<?php $book=query("SELECT * FROM book ORDER BY id ASC");?>
				<?php foreach($book as $row): ?>
					<?php $i++?>
					<?php if($i<=6):?>
						<div class="book">
							<div class="gambar">
								<img src="img/<?=$row["cover"]?>">
							</div>
							<div class="konten">
								<h5><a style="color: black; text-decoration: none;" href="view.php?id=<?=$row["id"]?>"><?=$row["judul"]?></a></h5>
							</div>
						</div>
					<?php else: break;?>
					<?php endif;?>
				<?php endforeach?>
				</div>
				<br>

				<div class="content" style="border: none;">
					<h1>Top Book</h1>
				</div>
				<div class="content" style="border: none; padding: none; width: 100%">
					<?php $book=query("SELECT * FROM book ORDER BY judul ASC");?>
				<?php $i=1?>
				<?php foreach($book as $row): ?>
					<?php $i++?>
					<?php if($i<=6):?>
						<div class="book">
							<div class="gambar">
								<img src="img/<?=$row["cover"]?>">
							</div>
							<div class="konten">
								<h5><a style="color: black; text-decoration: none;" href="view.php?id=<?=$row["id"]?>"><?=$row["judul"]?></a></h5>
							</div>
						</div>
					<?php else: break;?>
					<?php endif;?>
				<?php endforeach?>
				</div>

			</div>
			<div class="sidebar">
				<div class="bars">
					<h2>You</h2>
					<p>Username: </p>
					<p><?=$user["username"]?></p><br>
					<p>Fullname:</p>
					<p><?=$user["fullname"]?></p><br>
					<p>email:</p>
					<p><?=$user["email"]?></p><br>
					<form  action="" method="post">
						<button class="btn" type="submit" name="logout">Log Out</button>
					</form>
				</div>
				<br>
				<div class="bars">
					<h2>Action</h2>
					<p><a href="edit.php?id=<?=$user["id"]?>">Edit my Profile</a></p><br>
					<p><a href="editpass.php?id=<?=$user["id"]?>">Edit my password</a></p><br>
					<!-- Halaman Admin -->
					<?php if($user["type"]==="admin"):?>
						<p><a href="admin/admin.php?id=<?=$user["id"]?>">Admin Page</a></p><br>
					<?php endif;?>
					<p><a href="segitiga.php">Tugas Program Segitiga</a></p>
				</div>	
			</div>
		</div>
</body>
</html>
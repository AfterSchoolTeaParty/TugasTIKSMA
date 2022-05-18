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
	if(isset($_POST["back"])){
		header("location: index.php");
	}
	

	// mengambil data dalam url
	$id=$_GET["id"];

	//query data mahasiswa berdasarkan id

	$book=query("SELECT * FROM book WHERE id =$id")[0];
	$link=$book["link"];
	if(isset($_POST["download"])){
		header("location: $link");
	}
?>

<!DOCTYPE html>
<html>
<head>
	<title><?="",$book["judul"];?></title>
	<link rel="stylesheet" type="text/css" href="style.css">
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
				<form class="formel" action="" method="post">
					<input type="text" name="keyword" class="sbar" size="50" border="none" autofocus placeholder="Search Book" autocomplete="off">
					<button class="buttons" type="submit" name="search" border="none">Search!</button>
				</form>
			</div>
		</nav>
		<br>
		<div class="container">
			<div class="content" style="display: block; height: 100%;">
				<div class="books" style="display: block; height: 100%;">
					<div class="images" style="margin-left: 13%"><img src="img/<?=$book["cover"]?>"></div>
					<div class="isiku" style="width: 90%">
					<ul>
						<li style="list-style: none">Judul   :	<?="",$book["judul"];?></li>
						<li style="list-style: none">Pengarang:	<?="",$book["pengarang"];?></li>
						<li style="list-style: none">tipe buku:		<?="",$book["tipebuku"];?></li>
						<li style="list-style: none">Genre:		<?="",$book["genre1"];?>,<?="",$book["genre2"];?>,<?="",$book["genre3"];?></li>
						<li style="list-style: none">uploader:		<?="",$book["uploader"];?></li>
						<li style="list-style: none">sinopsis:		<?="",$book["sinopsis"];?></li><br>
					</ul>
					</div>
				</div>
				<div>
					<form action="" method="post"> 
					<button class="button" style="	padding: 10px; color: white; background-color: #a80016; border: none; width: 200px;" type="submit" name="back">Back</button>
					<button class="button" style="	padding: 10px; color: white; background-color: #a80016; border: none; width: 200px;" type="submit" name="download">DOWNLOAD NOW!</button>
					</form>
				</div>
			</div>
		</div>
</body>
</html>
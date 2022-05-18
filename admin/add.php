<?php
//koneksi
session_start();
	$userr=$_SESSION["user"];

	if(!isset($_SESSION["login"])){
		header("location: ../login.php");
		exit;
	}
require 'function2.php';



//cek apakah tombol submit sudah ditekan atau belum
if(isset($_POST["back"])){
	header("location: admin.php");
}

if(isset($_POST["submit"])){
	//cek apakah data berhasil ditambahkan atau tidak
	if(tambah($_POST)>0){
		echo "<script>alert('data berhasil ditambahkan')</script>";
		header('location: admin.php');
	}
	else{
		echo "<script>alert('data gagal ditambahkan')</script>";
		header('location: admin.php');
	}
}
?>


<!DOCTYPE html>
<html>
<head>
	<title>Tambah Buku</title>
	<link rel="stylesheet" type="text/css" href="style10.css">
</head>
<body>
	<div class="atas">
		<p>Welcome, <?=$userr?>!</p>
	</div>
	<div class="logo">
		<h1>Bookism - Add Book</h1>
	</div>
	<div class="button">
		<form action="" method="post"> 
			<button class="btn" type="submit" name="back">Back</button>
		</form>
	</div>
	<br><br><br></br>

	<div class="container">
	<div class="content">
	<form action="" method="post" enctype="multipart/form-data">
		<ul>
			<li>
				<label for="judul">Judul Buku: </label>
				<input id="judul" type="text" name="judul" required>
			</li><br>
			<li>
				<label for="pengarang">Pengarang: </label>
				<input id="pengarang" type="text" name="pengarang" required>
			</li><br>
			<li>
				<label for="tipebuku">Tipe Buku: </label>
				<input id="tipebuku" type="text" name="tipebuku" required>
			</li><br>
			<li>
				<label for="genre1">Genre: </label>
				<input id="genre1" type="text" name="genre1" >
				<input id="genre1" type="text" name="genre2" >
				<input id="genre1" type="text" name="genre3" >
			</li><br>
			<li>
				<label for="uploader">Uploader: </label>
				<input id="uploader" type="text" name="uploader"required>
			</li><br>
			<li>
				<label for="gambar">Cover: </label>
				<input id="gambar" type="file" name="gambar" required>
			</li><br>
			<li>
				<label for="link">Link: </label>
				<input id="link" type="text" name="link" required>
			</li><br>
			<li>
				<label for="sinopsis">Sinopsis: </label>
				<input id="sinopsis" type="textarea" name="sinopsis" required>
			</li><br><br>
			<li>
				<button type="submit" name="submit">Add!</button>
			</li><br>
		</ul>
	</form>
	</div>
	</div>
</body>
</html>
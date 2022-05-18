<?php
//koneksi
session_start();
$userr=$_SESSION["user"];
require 'function2.php';

if(isset($_POST["back"])){
	header("location: admin.php");
}

//ambil data dari url
$id=$_GET["id"];

//query data mahasiswa berdasarkan id

$books=query("SELECT * FROM book WHERE id=$id")[0];

//cek apakah tombol submit sudah ditekan atau belum

if(isset($_POST["submit"])){

	//cek apakah data berhasil diubah atau tidak
	if(update($_POST)>0){
		echo "<script>alert('data berhasil diubah')</script>";
		header('location: admin.php');
	}
	else{
		echo "<script>alert('data gagal diubah')</script>";
		header('location: admin.php');
	}
}
?>


<!DOCTYPE html>
<html>
<head>
	<title>Ubah Buku</title>
	<link rel="stylesheet" type="text/css" href="style10.css">
</head>
<body>
	<div class="atas">
		<p>Welcome, <?=$userr?>!</p>
	</div>
	<div class="logo">
		<h1>Bookism - Edit Book</h1>
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
		<input type="hidden" name="id" value="<?=$books["id"]?>">
		<ul>
			<li>
				<label for="judul">Judul Buku: </label>
				<input id="judul" type="text" name="judul" required value="<?= $books["judul"]?>">
			</li><br>
			<li>
				<label for="pengarang">Pengarang: </label>
				<input id="pengarang" type="text" name="pengarang" required value="<?= $books["pengarang"]?>">
			</li><br>
			<li>
				<label for="tipebuku">tipebuku: </label>
				<input id="tipebuku" type="text" name="tipebuku" required value="<?= $books["tipebuku"]?>">
			</li><br>
			<li>
				<label for="genre1">Genre: </label>
				<input id="genre1" type="text" name="genre1" required value="<?= $books["genre1"]?>">
				<input id="genre1" type="text" name="genre2"  value="<?= $books["genre2"]?>">
				<input id="genre1" type="text" name="genre3"  value="<?= $books["genre3"]?>">
			</li><br>
			<li>
				<label for="uploader">uploader: </label>
				<input id="uploader" type="text" name="uploader" required value="<?= $books["uploader"]?>">
			</li><br>
			<li>
				<label for="cover">cover: </label>
				<input id="cover" type="file" name="gambar" required value="img/<?= $books["cover"]?>">
			</li><br>
			<li>
				<label for="link">link: </label>
				<input id="link" type="text" name="link" required value="<?= $books["link"]?>">
			</li><br>
			<li>
				<label for="sinopsis">sinopsis: </label>
				<input style="width: 80%;" id="sinopsis" type="textarea" name="sinopsis" required value="<?= $books["sinopsis"]?>"> 
			</li><br>
			<li>
				<button type="submit" name="submit">Update!</button>
			</li><br>
		</ul>

	</form>
	</div>
	</div>

</body>
</html>
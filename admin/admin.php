<?php
	session_start();
	$userr=$_SESSION["user"];
	require 'function2.php';
	require 'function.php';
	if(!isset($_SESSION["login"])){
		header("location:../login.php");
		exit;
	}
	if(isset($_POST["back"])){
	header("location: ../index.php");
	}

	// Buku
	$jumlahdataperhalaman=3;

	$jumlahdata=count(query("SELECT * FROM book"));
	$jumlahhalaman=ceil($jumlahdata/$jumlahdataperhalaman);
	if(isset($_GET["halaman"])){
		$halamanaktif=$_GET["halaman"];	
	} else{
		$halamanaktif=1;
	}
	$awaldata = ($jumlahdataperhalaman*$halamanaktif)-$jumlahdataperhalaman;
	


	$book=query("SELECT * FROM book LIMIT $awaldata, $jumlahdataperhalaman");
	if(isset($_POST["cari"])){
		$book=cari($_POST["keyword"]);
	}

	//user
	$userz=fquery("SELECT * FROM user");
	if(isset($_POST["searchs"])){
		$userz= search($_POST["keyword"]); // untuk melakukan pencarian
	}
?>

<!DOCTYPE html>
<html>
<head>
	<title>Halaman Admin</title>
	<link rel="stylesheet" type="text/css" href="style10.css">
</head>
<body>
	<div class="atas">
		<p>Welcome, <?=$userr?>!</p>
	</div>
	<div class="logo">
		<h1>Bookism - Admin Page</h1>
	</div>
	<div class="button">
		<form action="" method="post"> 
			<button class="btn" type="submit" name="back">Back</button>
		</form>
	</div>
	<br><br><br></br>

	<div class="container" style="padding: 20px; border: 0.5px solid #2e3047;">
	<!-- Buku -->
	<h1>Daftar Buku</h1>
	<form action="" method="post">
		<input size="50" type="text" name="keyword" autofocus placeholder="Search Book" autocomplete="off">
		<button type="submit" name="cari">Search</button>
	</form>
	<br>

	 	<!-- navigasi -->
	<?php if($halamanaktif>1):?>
		<a href="?halaman=<?=$halamanaktif-1?>">&lt</a>
	<?php endif;?>
	<?php for ($i=1; $i <= $jumlahhalaman ; $i++):?>
		<?php if($i==$halamanaktif):?>
			<a href="?halaman=<?=$i?>" style="font-weight: bold; color:red;"><?=$i?></a> 
		<?php else:?>
			<a href="?halaman=<?=$i?>"><?=$i?></a> 
		<?php endif?>
	<?php endfor?>
	<?php if($halamanaktif<$jumlahhalaman):?>
		<a href="?halaman=<?=$halamanaktif+1?>">&gt</a>
	<?php endif;?>

	<br><br>
	<a href="add.php">+add</a>


	<table border="1" cellpadding="10" cellspacing="0">
		
		<tr>
			<th>No.</th>
			<th>Aksi</th>
			<th>Judul Buku</th>
			<th>Pengarang</th>
			<th>Tipe Buku</th>
			<th>Genre</th>
			<th>Uploader</th>
			<th>Cover</th>
			<th>Link</th>
			<th>Sinopsis</th>
		</tr>
		<?php $i=1;?>
		<?php foreach($book as $row): ?>
		<tr>
			<td><?=$i?></td>
			<td>
				<a href="update.php?id=<?=$row["id"]?>">Edit</a> |
				<a href="hapus.php?id=<?=$row["id"]?>" onclick="return confirm('yakin?');">Delete</a>
			</td>
			<td><?=$row["judul"]?></td>
			<td><?=$row["pengarang"]?></td>
			<td><?=$row["tipebuku"]?></td>
			<td><?=$row["genre1"]," ",$row["genre2"]," ",$row["genre3"]?> </td>
			<td><?=$row["uploader"]?></td>
			<td><img src="../img/<?=$row["cover"]?>" width="100"></td>
			<td><a href="<?=$row["link"]?>"><?=$row["link"]?></td>
			<td><?=$row["sinopsis"]?></td>
		</tr>
		<?php $i++?>
		<?php endforeach; ?>

	</table>
	<br>
	<br>
	<br>

	<!-- User -->
	<h1>Daftar User</h1>
	<form action="" method="post">
		
		<input type="text" name="keyword" size="50" autofocus placeholder="masukkan keyword/klik search lagi untuk kembali" autocomplete="off">
		<button type="submit" name="searchs">Search!</button>

	</form>
	<br><br>
	<a href="tambah.php">+Add user</a>
	<table border="1" cellpadding="10" cellspacing="0">
		
		<tr>
			<th>ID</th>
			<th>Action</th>
			<th>User Type</th>
			<th>Username</th>
			<th>Full name</th>
			<th>email</th>
		</tr>

		<?php foreach($userz as $row):  ?>
		<tr>
			<?php if ($row['username']!==$_SESSION['user']):?>
			<td><?=$row["id"]?></td>
			<td>
				<a href="edit2.php?id=<?=$row["id"];?>">Edit</a> |
				<a href="delete.php?id=<?=$row["id"]?>" onclick="return confirm('Are you sure?');">Delete</a>
			</td>
			<td><?=$row["type"]?></td>
			<td><?=$row["username"]?></td>
			<td><?=$row["fullname"]?></td>
			<td><?=$row["email"]?></td>
			<?php endif;?>
		</tr>
	<?php endforeach;?>

	</table>
	</div>

</body>
</html>
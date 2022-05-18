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
	//pagination
	//konfigurasi
	if(!isset($_POST["search"])){
		$jumlahdataperhalaman=6;

		$jumlahdata=count(query("SELECT * FROM book"));
		$jumlahhalaman=ceil($jumlahdata/$jumlahdataperhalaman);
		if(isset($_GET["halaman"])){
			$halamanaktif=$_GET["halaman"];	
		} else{
			$halamanaktif=1;
		}
		$awaldata = ($jumlahdataperhalaman*$halamanaktif)-$jumlahdataperhalaman;

		$book=query("SELECT * FROM book LIMIT $awaldata, $jumlahdataperhalaman");
	}


	if(isset($_POST["search"])){
		$jumlahdataperhalaman=6;

		$jumlahdata=count(cari($_POST["keyword"]));
		$jumlahhalaman=ceil($jumlahdata/$jumlahdataperhalaman);
		if(isset($_GET["halaman"])){
			$halamanaktif=$_GET["halaman"];	
		} else{
			$halamanaktif=1;
		}
		$awaldata = ($jumlahdataperhalaman*$halamanaktif)-$jumlahdataperhalaman;

		$book=caris($_POST["keyword"], $awaldata, $jumlahdataperhalaman);
	}

	if(isset($_POST["logout"])){
		header("location: logout.php");
		exit;
	}

?>

<!DOCTYPE html>
<html>
<head>
	<title>Bookism</title>
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
		<div class="container2" style="border: none;">
		<div class="page" style="border: none;">
			<!-- navigasi -->
			<?php if($halamanaktif>1):?>
				<h2><a href="?halaman=<?=$halamanaktif-1?>">&lt</a></h2>
			<?php endif;?>
			<?php for ($i=1; $i <= $jumlahhalaman ; $i++):?>
				<?php if($i==$halamanaktif):?>
					<h2><a href="?halaman=<?=$i?>" style="font-weight: bold; color:red;"><?=$i?></a></h2> 
				<?php else:?>
					<h2><a href="?halaman=<?=$i?>"><?=$i?></a></h2> 
				<?php endif?>
			<?php endfor?>
			<?php if($halamanaktif<$jumlahhalaman):?>
				<h2><a href="?halaman=<?=$halamanaktif+1?>">&gt</a></h2>
			<?php endif;?>
		</div>			
		</div>
		<div class="container">
			<div class="contents">
			<?php foreach($book as $row): ?>
				<div class="books">
					<div class="images"><img src="img/<?=$row["cover"]?>"></div>
					<div class="isi">
						<ul>
							<li><h2><a href="view.php?id=<?=$row["id"]?>"><?=$row["judul"]?></a><h2></li>
							<li>Pengarang : <?=$row["pengarang"]?></li>
							<li>Type  : <?=$row["tipebuku"]?></li>
						</ul>
					</div>
				</div>
			<?php endforeach;?>

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
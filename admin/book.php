<?php
	require 'function2.php';

	//pagination
	//konfigurasi
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


?>
<!DOCTYPE html>
<html>
<head>
	<title>Halaman Admin</title>
</head>
<body>

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

	<br>
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
			<td><img src="img/<?=$row["cover"]?>" width="100"></td>
			<td><a href="<?=$row["link"]?>"><?=$row["link"]?></td>
			<td><?=$row["sinopsis"]?></td>
		</tr>
		<?php $i++?>
		<?php endforeach; ?>

	</table>

</body>
</html>
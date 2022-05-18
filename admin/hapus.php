<?php
require 'function2.php';

$id=$_GET["id"];
	if(hapus($id)>0){
		echo "<script>alert('data berhasil dihapuskan')</script>";
		header('location: admin.php');
	}
	else{
		echo "<script>alert('data gagal dihapuskan')</script>";
		header('location: admin.php');
	}


?>
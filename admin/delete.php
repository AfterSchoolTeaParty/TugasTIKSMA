<?php
	session_start();

	if(!isset($_SESSION["login"])){
		header("location: login.php");
		exit;
	}
require 'function.php';

$id=$_GET["id"];

if(fdelete($id)>0){
		echo "<script> alert('data berhasil dihapus'); document.location.href ='admin.php'; </script>";}
else{
		echo "<script> alert('data gagal dihapuskan'); document.location.href ='admin.php'; </script>";}
?>
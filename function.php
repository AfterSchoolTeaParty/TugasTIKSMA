<?php
	//koneksi ke database
	$conn = mysqli_connect("localhost", "root","", "web_data");


	function fquery($query){
		global $conn;
		$cacah = mysqli_query($conn, $query);
		$rows=[]; //wadah untuk data
		while($row = mysqli_fetch_assoc($cacah)){
			$rows[]=$row;
		}
		return $rows;
	}

	function fadd($data){
	global $conn;
	//ambil data dari tiap data dalam form
	$username=htmlspecialchars($data["username"]);
	$password=htmlspecialchars($data["password"]);
	$fullname=htmlspecialchars($data["fullname"]);
	$email=htmlspecialchars($data["email"]);
	$usertype=htmlspecialchars($data["usertype"]);

	$password = password_hash($password, PASSWORD_DEFAULT);
	//query insert data
	$query="INSERT INTO user VALUES ('', '$fullname', '$email', '$usertype', '$username','$password')";
	mysqli_query($conn, $query);
	return mysqli_affected_rows($conn);}

	function fdelete($id){

		global $conn;
		mysqli_query($conn, "DELETE FROM user where id=$id");
		return mysqli_affected_rows($conn);

	}

	function search($keyword){
	$query="SELECT * FROM user WHERE 
	fullname LIKE '%$keyword%' OR 
	username LIKE '%$keyword%' OR 
	type LIKE '%$keyword%' OR
	email LIKE '%$keyword%'"; // penambahan '% %' ketika mengisi '% %'agar pencarian lebih fleksibel artinya kita bisa mencari hanya dengan huruf aja
	return query($query);
	}

	function fedit($data){
	global $conn;
	//ambil data dari tiap data dalam form dari edit2
	$id=$data["id"];
	$username=strtolower(stripcslashes(htmlspecialchars($data["username"])));
	$fullname=htmlspecialchars($data["fullname"]);
	$email=htmlspecialchars($data["email"]);
	//pengecekan username

	$cek=mysqli_query($conn, "SELECT username FROM user WHERE username ='$username'");
	if($username!==$data["fuser"]){
		if(mysqli_fetch_assoc($cek)){
			echo "<script> alert('username sudah terdaftar');</script>";
			return false;
		}
	}
	//query insert data
	$query="UPDATE user SET fullname='$fullname', 
	email='$email', 
	username= '$username'  WHERE id= $id;";
	mysqli_query($conn, $query);
	return mysqli_affected_rows($conn);}



	function fedit2($data){
	global $conn;
	//ambil data dari tiap data dalam form dari edit
	$id=$data["id"];
	$password=mysqli_real_escape_string($conn, htmlspecialchars($data["password"]));
	$password2=mysqli_real_escape_string($conn, htmlspecialchars($data["password2"]));
	$oldpass=mysqli_real_escape_string($conn, htmlspecialchars($data["oldpass"]));

	//pengecekan password
	$cek=mysqli_query($conn, "SELECT * FROM user WHERE id =$id");
	$row=mysqli_fetch_assoc($cek);

	if(password_verify($oldpass, $row["password"])){
		if($password===$password2){	

			$password = password_hash($password, PASSWORD_DEFAULT);
			//query insert data
			$query="UPDATE user SET  password='$password' WHERE id= $id;";
			mysqli_query($conn, $query);
			return mysqli_affected_rows($conn);
		}
		else{
			return 0;
		}
	}
	else{
		return 0;
	}

}




	function registrasi($data){
		global $conn;

		$username=strtolower(stripcslashes(htmlspecialchars($data["username"])));
		$password=mysqli_real_escape_string($conn, $data["password"]);
		$password2= mysqli_real_escape_string($conn, $data["password2"]);

		//pengecekan username
		$cek=mysqli_query($conn, "SELECT username FROM user WHERE username ='$username'");

		if(mysqli_fetch_assoc($cek)){
			echo "<script> alert('username sudah terdaftar');</script>";
			return false;
		}

		//konfirmasi password
		if($password !== $password2){
			echo "<script>alert('Password tidak sesuai')</script>";
			return false;
		}

		//enkripsi passwordnya
		$password = password_hash($password, PASSWORD_DEFAULT);

		//tambahkan user baru ke dalam database
		mysqli_query($conn, "INSERT INTO user VALUES('','empty','empty','member','$username','$password')");

		return mysqli_affected_rows($conn);
	}
?>
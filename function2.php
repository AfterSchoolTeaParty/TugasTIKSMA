<?php
	//koneksi ke database
	$conn=mysqli_connect("localhost", "root", "", "web_data"); // paramater 

	function query($query){
		global $conn;

		//ambil data dari tabel mahasiswa/query
		$result=mysqli_query($conn, $query);
		$rows=[];
		while($row = mysqli_fetch_assoc($result)){
			$rows[]=$row;
		}
		return $rows;
	}





	function tambah($data){
		global $conn;

		//ambil data dari tiap elemen dalam form
		$judul=htmlspecialchars($data["judul"]);
		$pengarang=htmlspecialchars($data["pengarang"]);
		$tipebuku=htmlspecialchars($data["tipebuku"]);
		$genre1=htmlspecialchars($data["genre1"]);
		$genre2=htmlspecialchars($data["genre2"]);
		$genre3=htmlspecialchars($data["genre3"]);
		$uploader=htmlspecialchars($data["uploader"]);
		$link=htmlspecialchars($data["link"]);
		$sinopsis=htmlspecialchars($data["sinopsis"]);

		//upload gambar
		$gambar=upload();
		if(!$gambar){
			return false;
		}
		var_dump($gambar);
		//query insert data
		$query="INSERT INTO book VALUES ('', '$judul', '$pengarang', '$tipebuku', '$genre1', '$genre2', '$genre3', '$uploader', '$gambar', '$link', '$sinopsis')";
		mysqli_query($conn, $query);

		return mysqli_affected_rows($conn);
	}

	function upload(){
		$namaFile=$_FILES['gambar']['name'];
		$ukuranFile=$_FILES['gambar']['size'];
		$error=$_FILES['gambar']['error'];
		$tmpName=$_FILES['gambar']['tmp_name'];


		//cek yg diupload gambar apa bukan
		$ekstensigambarvalid = ['jpg', 'jpeg', 'png', 'jfif'];
		$ekstensigambar=explode('.', $namaFile);
		$ekstensigambars=strtolower(end($ekstensigambar));
		$check=in_array($ekstensigambars, $ekstensigambarvalid);
		if($check===false){
			echo "<script>alert('data bukan gambar')</script>";
			return false;
		}
		//cek jika ukurannya terlalu besar
		if($ukuranFile>10000000){
			echo "<script> alert('Ukuran file terlalu besar');</script>";
			return false;	
		}
		//gambar siap diupload
		move_uploaded_file($namaFile, 'img/'.$namaFile);

		return $namaFile;


	}

	function hapus($id){
		global $conn;
		mysqli_query($conn, "DELETE FROM book WHERE id=$id");
		return mysqli_affected_rows($conn);
	}


	function update($data){
		global $conn;

		//ambil data dari tiap elemen dalam form
		$id=$data["id"];
		$judul=htmlspecialchars($data["judul"]);
		$pengarang=htmlspecialchars($data["pengarang"]);
		$tipebuku=htmlspecialchars($data["tipebuku"]);
		$genre1=htmlspecialchars($data["genre1"]);
		$genre2=htmlspecialchars($data["genre2"]);
		$genre3=htmlspecialchars($data["genre3"]);
		$uploader=htmlspecialchars($data["uploader"]);
		$link=htmlspecialchars($data["link"]);
		$sinopsis=htmlspecialchars($data["sinopsis"]);

		$gambar=upload();
		if(!$gambar){
			return false;
		}

		//query insert data
		$query="UPDATE book SET 
		judul='$judul',
		 pengarang='$pengarang',
		 tipebuku='$tipebuku', 
		 genre1='$genre1', 
		 genre2='$genre2', 
		 genre3='$genre3', 
		 uploader='$uploader', 
		 cover='$gambar', 
		 link='$link', 
		 sinopsis='$sinopsis'
		 WHERE id=$id";
		mysqli_query($conn, $query);

		return mysqli_affected_rows($conn);		
	}

	function cari($keyword){
		$query="SELECT * FROM book WHERE 
		judul LIKE'%$keyword%' OR
		pengarang LIKE'%$keyword%' OR
		tipebuku LIKE'%$keyword%' OR
		uploader LIKE'%$keyword%' OR
		genre1 LIKE'%$keyword%' OR
		genre2 LIKE'%$keyword%' OR
		genre3 LIKE'%$keyword%' OR
		sinopsis LIKE'%$keyword%'
		";
		return query($query);
	}
	function caris($keyword, $awaldata, $jumlahdataperhalaman){
		$query="SELECT * FROM book WHERE 
		judul LIKE'%$keyword%' OR
		pengarang LIKE'%$keyword%' OR
		tipebuku LIKE'%$keyword%' OR
		uploader LIKE'%$keyword%' OR
		genre1 LIKE'%$keyword%' OR
		genre2 LIKE'%$keyword%' OR
		genre3 LIKE'%$keyword%' OR
		sinopsis LIKE'%$keyword%' 
		LIMIT $awaldata, $jumlahdataperhalaman";
		return query($query);
	}
?>

<?php
	session_start();
	$userr=$_SESSION["user"];

	if(!isset($_SESSION["login"])){
		header("location: ../login.php");
		exit;
	}
if(isset($_POST["back"])){
	header("location: index.php");

}
?>

<html>
<head>
	<title> Segitiga </title>
	<style>
	*{
	margin: 0;
	padding: 0;
	}
	.atas{
		display: flex;
		justify-content: flex-end;
		padding: 5px;
		background-color: salmon;
	}
	.atas p{
		font-size: 1.2em;
		margin-right: 20px;
	}
	.logo{
		font-family: cursive;
		letter-spacing: 3px;
		height:80px;
		align-items: center;
		padding: 5px;
		background-color: salmon;
	}
	.logo h1{
		margin-left: 5%;
		font-size: 3.5em;
		display: flex;
	}
	.button{
		background-color: gray;
	}
	.button button{
		margin-left: 100px;
		padding: 10px;
		border: none;
		color: white;
		background-color: salmon;
	}
	.container{
		width: 60%;
		margin-left: 19%;
		padding: 30px;
		border: 1px solid #2e3047;
	}
	</style>
</head>
<body>
	<div class="atas">
		<p>Welcome, <?=$userr?>!</p>
	</div>
	<div class="logo">
		<h1>Bookism - Segitiga</h1>
	</div>
	<div class="button">
		<form action="" method="post"> 
			<button class="btn" type="submit" name="back">Back</button>
		</form>
	</div>
	<br><br><br></br>
	<div class="container">
	<ul>
		<li>
		<h2> PROGRAM SEGITIGA SAMA KAKI </h2>
			<div class="bentuk">
				<?php // merupakan perulangan untuk segitiga sama kaki (menghadap keatas)
					$total=10; // merupakan tinggi dari segitiga
					for ($i=1; $i<=$total ; $i++) {  // fungsi perulangan untuk tinggi segitiga dimana tingginya dimulai dari 1
						for ($j=$total; $j>$i  ; $j--) { // merupakan perulangan untuk memberikan spasi pada baris yang sama apabila pada baris pertama maka spasi yang dikeluarkan adalah sebanyak $total-1 
							echo "&nbsp";
						}
						for ($k=1; $k<=$i ; $k++) { // akan mengeluarkan * yang merupakan output yg menunjukkan segitiga dia akan diulang sebanyak $i artinya ketika $i adalah satu ia akan dikeluarkan sebanyak satu kali 
							echo "*";
						}
						echo "<br>";
					}

					/* Penerapan dari perulangannya sebagai berikut
					1. contoh $total=10, maka perulangan pertama akan melakukan perulangan sebanyak 10 kali yang artinya tinggi dari segitiga adalah 10
					2. Apabila perulangan pertama dimulai, maka $i awalnya akan 1
					3. Ketika $i pada perulangan pertama merupakan 1 maka perulangan kedua akan mengalami perulangan sebanyak 9 kali hal ini dikarenakan $j>$i maka ketika $j=$i=1 maka perulangan akan berhenti karena mengeluarkan nilai false
					4. Pada perulangan kedua perulangan dimulai dari angka 1 dan dibatasi hingga $i maka ketika $k=1 dimana $i=1 maka dia akan mengalami perulangan sebanyak 1 kali

					*/
				?>
			</div><br>
			<p>Penerapan dari perulangannya sebagai berikut<br>
					1. contoh $total=10, maka perulangan pertama akan melakukan perulangan sebanyak 10 kali yang artinya tinggi dari segitiga adalah 10<br>
					2. Apabila perulangan pertama dimulai, maka $i awalnya akan 1<br>
					3. Ketika $i pada perulangan pertama merupakan 1 maka perulangan kedua akan mengalami perulangan sebanyak 9 kali hal ini dikarenakan $j>$i maka ketika $j=$i=1 maka perulangan akan berhenti karena mengeluarkan nilai false<br>
					4. Pada perulangan kedua perulangan dimulai dari angka 1 dan dibatasi hingga $i maka ketika $k=1 dimana $i=1 maka dia akan mengalami perulangan sebanyak 1 kali<br>

			</p>
		</li><br>
		<li>
		<h2> PROGRAM BELAH KETUPAT </h2> <!-- Pada program belah ketupat sebenarnya terjadi 2 perulangan yaitu perulangan untuk segitiga sama kaki menghadap keatas dan segitiga sama kaki yang menghadap kebawah hanya saja tingginya akan menjadi 2*$total -->
			<div class="bentuk">
				<?php
					for ($i=1; $i<=$total ; $i++) {  // merupakan perulangan yang sama dengan perulangan untuk segitiga sama kaki menghadap keatas
						for ($j=$total; $j>$i  ; $j--) { 
							echo "&nbsp";
						}
						for ($k=1; $k<=$i ; $k++) { 
							echo "*";
						}
						echo "<br>";
					}

					for ($i=$total-1; $i>=1 ; $i--) { // merupakan perulangan untuk segitiga sama kaki menghadap kebawah. Alasan mengapa $i dimulai dari $total-1 adalah agar tidak diagonal terpanjang dari belah ketupat nantinya tidak ada 2, selain itu perulangan mengalami perulangan mundur yang nantinya akan menyebabkan proses yang berkebalikan dengan segitiga sama kaku menghadap keatas
						for ($j=$total; $j>$i  ; $j--) { 
							echo "&nbsp";
						}
						for ($k=1; $k<=$i ; $k++) { 
							echo "*";
						}
						echo "<br>";
					}
				?>
			</div>
			<p>Pada program belah ketupat sebenarnya terjadi 2 perulangan yaitu perulangan untuk segitiga sama kaki menghadap keatas dan segitiga sama kaki yang menghadap kebawah hanya saja tingginya akan menjadi 2*$total<br>
			Alasan mengapa pada perulangan untuk segitiga sama kaki menghadap kebawah $i dimulai dari $total-1 adalah agar tidak diagonal terpanjang dari belah ketupat nantinya tidak ada 2, selain itu perulangan mengalami perulangan mundur yang nantinya akan menyebabkan proses yang berkebalikan dengan segitiga sama kaku menghadap keatas
			</p>
		</li>
	</ul>
	</div>
</html>
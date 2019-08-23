<?php
	$nama_aldi = "Aldi Destiawan";
	$umur_aldi = 16;
	$tinggi_badan_aldi = 171;

	$nama_baar = "Muhammad Baar";
	$umur_baar = 16;
	$tinggi_badan_baar = 167;

	$nama_farah = "Farah Nur Fadhilah";
	$umur_farah = 16;
	$tinggi_badan_farah = 160;

	$hasil = ($tinggi_badan_farah + $tinggi_badan_baar + $tinggi_badan_aldi) /3
?>
	<!DOCTYPE html>
	<html>
	<head>
		<title>KELOMPOK 5</title>
		<style type="text/css">
			html {
				background: url(img/blue.jpg) no-repeat fixed;
				background-size: 100% 100%;
			}

			.header {
				margin:0;
				text-align: center;
				background-color: #4dd0e1;
				padding: 25px;
				border-radius: 10px;
				border: 2px solid black;
			}
			h1 {
				text-align: center;
				font-size: 50px;
				font-family: arial;
			}
			.img{
				margin: 20px;
				border-radius: 300px;
			}
			img {
				border-radius: 300px;
				border: 2px solid black;
			}
			.border {
				height: 400px;
				width: 300px;
				border-radius: 10px;
				background-color: #4dd0e1;
				display: inline-block;
				margin: 30px;
				border: 2px solid black;
			}
			.img2 {
				margin: 20px;
				border-radius: 300px;
			}
			.border2 {
				height: 400px;
				width: 300px;
				border-radius: 10px;
				background-color: #4dd0e1;
				display: inline-block;
				margin: 30px;
				border: 2px solid black;
			}
			.img3 {
				margin: 20px;
				border-radius: 300px;
			}
			.border3 {
				height: 400px;
				width: 300px;
				border-radius: 10px;
				background-color: #4dd0e1;
				display: inline-block;
				margin: 30px;
				border: 2px solid black;
			}
			.posisi {
				text-align: center;
				font-family: arial;
			}
			.tinggi ul{
				background-color: #0288d1;
				padding: 20px;
				border-radius: 10px;
				border: 2px solid black;
				bottom: 0px;
				position: absolute;
				width: 100%;
			}
			.button {
				background-color: #82b1ff;
				border:2px solid black;
				padding: 20px;
				margin: 15px;
				left:0px;
				border-radius: 10px;
				font-family: arial;
				font-size: 20px;

			}			
			p {
				font-size: 20px;
			}
			li {
			display: inline-block;
			}
			a {
			padding: 10px;
			border: 2px solid black;
			margin-top: 20px;
			border-radius: 10px;
			background-color: #4dd0e1 ;
			font-family: arial;
			color: black;
			} 
		</style>
	</head>
	<body>
	</div>
		<div class="header">
		<ul>
			<center>
				<h1>TUGAS PERTAMA</h1>
			</center>
		</ul>
		</div>
	<center>
	<div class="menu">
		<ul>
			<li>
				<a href="index.html">Beranda</a>
			</li>
			<li>
				<a href="tugaspertama.php">Tugas Pertama</a>
			</li>
			<li>
				<a href="tugaskedua.php">Tugas ke dua</a>
				
			</li>
			<li>
				<a href="tugaspertama.php">Tugas ke Tiga</a>
			</li>
			<li>
				<a href="tugaspertama.php">Tugas ke Empat</a>
			</li>
		</ul>
	</div>
	</center>
<div class="posisi">
		<div class="border">
		<div class="img">
		<center>
			<img src="img/aldi.jpg" width="70%" height="70%">
			<br>
			<?php 
			echo "<br> Nama : <b> $nama_aldi </b>  </br>" ;
			echo "Umur : <b> $umur_aldi Tahun </b>";
			echo "<br> Tinggi badan : <b> $tinggi_badan_aldi cm </b> </br>"; 
			?>			
			<p>Tinggal di Kp.Carang Pulang , Hobi nya suka main game , berperan sebagai wakil ketua kelas di Kelas 11 rpl 2</p>
		</center>
	</div>
	</div>
		<div class="border2">
		<div class="img2">
		<center>
			<img src="img/farah.jpg" width="70%" height="70%">
			<br>
			<?php 
			echo "<br> Nama : <b> $nama_farah </b> </br>" ;
			echo "Umur : <b> $umur_farah Tahun </b>";
			echo "<br> Tinggi badan : <b> $tinggi_badan_farah cm </b> </br>"; 
			?>
			<p>Tinggal di Leuwiliang , Hobi suka telat masuk kelas , suka mojok dikelas bersama kawannya</p>
		</center>
	</div>
	</div>
		<div class="border3">
		<div class="img3">
		<center>
			<img src="img/baar.jpg" width="70%" height="70%">
			<br>
			<?php 
			echo "<br> Nama : <b> $nama_baar </b> </br>" ;
			echo "Umur : <b> $umur_baar Tahun </b>";
			echo "<br> Tinggi badan : <b> $tinggi_badan_baar cm </b> </br>"; 
			?>						
			<p>Tinggal di Kp. Cangkrang , Hobyy Bermain futsal , Profesional disetiap keadaan apapun</p>
		</center>
	</div>
	</div>
</div>
		<div class="tinggi">
			<ul>
				<center>
					<?php 
						echo " <b> RATA RATA TINGGI KELOMPOK 5 : $hasil </b>";
				 	?>
				 </center>
			</ul>
		</div>
	
	</body>
	</html>
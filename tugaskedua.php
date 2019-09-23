<?php
		//NAMA BANGUN RUANG//
	$nama_bangun_ruang_kubus = "Kubus";
	$nama_bangun_ruang_tabung = "Tabung";
	$nama_bangun_ruang_limas = "Limas segitigaa";
	$nama_bangun_ruang_bola = "Bola";
	$nama_bangun_ruang_balok = "Balok";
	$nama_bangun_ruang_prisma = "Prisma Segitiga";
		//VOLUME BANGUN RUANG//
	$volume_bangun_ruang_kubus = "S x S x S";
	$volume_bangun_ruang_tabung = " π x r2 x t";
	$volume_bangun_ruang_limas = "1/3 x Luas Alas x Tinggi";
	$volume_bangun_ruang_bola = "4/3 x π x r3";
	$volume_bangun_ruang_balok = "P x L x T";
	$volume_bangun_ruang_prisma = "1/2 x P x L x T";
		//LUAS BANGUN RUANG//
	$luas_bangun_ruang_kubus = "6 x (sisi x sisi)";
	$luas_bangun_ruang_tabung = "(2 x π x r x r) + (π x d x t)";
	$luas_bangun_ruang_limas = "Luas alas + luas selubung limas";
	$luas_bangun_ruang_bola = "4 x π x r2";
	$luas_bangun_ruang_balok = " (2 x p x l) + (2 x p x t) + (2 x l x t)";
	$luas_bangun_ruang_prisma = "keliling alas segitiga x tinggi + (2 x luas alas segitiga)";

	$foto = "<img src=img/ball.gif>";
	$foto_prisma ="<img src=img/prism.gif>";
	$foto_kubus = "<img src=img/box1.gif>";
  ?>
 <html>
 <head>
 	<title>Tugas Kelompok</title>
 	<style type="text/css">
 		li {
			display: inline-block;
		}
		a {
			padding: 10px;
			border: 2px solid black;
			margin-top: 20px;
			border-radius: 10px;
			background-color: #4dd0e1;
			font-family: arial;
			color: black; 
 		}
 		html {
				background: url(img/blue.jpg) no-repeat fixed;
				background-size: 100% 100%;
			}
		.header 
			{
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
			.ruang {
				display: inline-block;
				font-family: impact;
				text-align: center;
				margin:50px;
				padding:10px;
				font-size: 30px;
			}
			.bangun1 {
				border: 1px solid black;
				background-color: #4dd0e1;
				border-radius: 10px;
				padding:20px;
				margin:10px;
			}
			.bangun2 {
				border: 1px solid black;
				background-color: #4dd0e1;
				border-radius: 10px;
				padding:20px;
				margin:10px;
			}
			.bangun3 {
				border: 1px solid black;
				background-color: #4dd0e1;
				border-radius: 10px;
				padding:20px;
				margin:10px;
			}
			img {
				border-radius: 10px;
				border:2px solid white;
			}
 	</style>
 </head>
 <body>
 		<div class="header">
		<ul>
			<center>
				<h1>TUGAS KEDUA</h1>
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
				<a href="tugas_ketiga.php">Tugas ke Tiga</a>
			</li>
			<li>
				<a href="tugaspertama.php">Tugas ke Empat</a>
			</li>
		</ul>
	</div>
	<div class="ruang">
		<center>
			<div class="bangun1">
				<br>
			<?php
				echo "$foto_kubus <br>";
				echo "Nama bangun ruang : $nama_bangun_ruang_kubus <br>";
				echo "Volume bangun ruang : $volume_bangun_ruang_kubus <br>";
				echo "Luas bangun ruang : $luas_bangun_ruang_kubus <br>";
			  ?>
			</div>
			<br>
			<div class="bangun2">
				<br>
			<?php
				echo "$foto_prisma <br>";
				echo "Nama bangun ruang : $nama_bangun_ruang_prisma <br>";
				echo "Volume bangun ruang : $volume_bangun_ruang_prisma <br>";
				echo "Luas bangun ruang : $luas_bangun_ruang_prisma <br>";
			  ?>
			</div>
			<br>
			<div class="bangun3">
				<br>
			<?php
				echo "$foto <br>";
				echo "Nama bangun ruang : $nama_bangun_ruang_bola <br>";
				echo "Volume bangun ruang : $volume_bangun_ruang_bola <br>";
				echo "Luas bangun ruang : $luas_bangun_ruang_bola <br>";
			  ?>
			</div>
		</center>
	</div>
 	
 </body>
 </html>
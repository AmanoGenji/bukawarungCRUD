<?php 
 	session_start();
 	if ($_SESSION['status_login'] != true) {
 		echo '<script>window.location="login.php"</script>';
  	}
 ?> 
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="with=device-width, initial-scale=1">
	<title> Warung Jual Beli</title>
	<link rel="stylesheet" type="text/css" href="css/style.css">
	<link rel="preconnect" href="https://fonts.googleapis.com">
	<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
	<link href="https://fonts.googleapis.com/css2?family=Quicksand&display=swap" rel="stylesheet">
</head>
<body>

<!-- Header -->

<header>
	<div class="container">
		<h1><a href="dasboard.php">Warung Jual Beli</a></h1>
		<ul>
			<li><a href="dasboard.php">Dashboard</a></li>
			<li><a href="profil.php">profil</a></li>
			<li><a href="data-kategori.php">Data Kategori</a></li>
			<li><a href="data-Produk.php">Data Produk</a></li>
			<li><a href="keluar.php">Keluar</a></li>
		</ul>
	</div>
</header>

<!-- Content -->

<div class="section">
	<div class="container">
		<h3>Dashboard</h3>
		<div class="box">
			<h4>SELAMAT DATANG SELAMAT BERBELANJA </h4>
		</div>
	</div>
</div>

<!-- Footer -->
	<div class="container">
		<small>Copyright 2023 - Warung 2023</small>
	</div>
</body>
</html>
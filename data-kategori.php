<?php 
 	session_start();
 	include 'db.php';
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
		<h3>Data Kategori</h3>
		<div class="box">
			<P><a href="tambah-kategori.php">Tambah Data</a></P>
			<table border="1" cellspacing="0" class="table">
				<thead>
					<tr>
						<th width="60px">Id</th>
						<th width="150px">Nama</th>
						<th width="150px">Email</th>
						<th width="150px">Jenis</th>
						<th width="150px">Harga</th>
						<th width="150px">Jumlah</th>
						<th width="150px">Total</th>
						<th width="150px">Aksi</th>
						<th width="150px">Generated</th>

					</tr>
				</thead>
				<tbody>
					<?php 
						$no = 1	;
						$kategori = mysqli_query($conn, "SELECT * FROM tb_category ORDER BY categori_id DESC");
						while ($row = mysqli_fetch_array($kategori)) {
					 ?>
					<tr>
					 	<td><?php echo $row['categori_id'] ?></td>
					 	<td><?php echo $row['nama_pembeli'] ?></td>
					 	<td><?php echo $row['email'] ?></td>						 						 	
					 	<td><?php echo $row['categori_name'] ?></td>
					 	<td><?php echo $row['harga_barang'] ?></td>
					 	<td><?php echo $row['jumlah_barang'] ?></td>
					 	<td><?php echo $row['total_harga'] ?></td>
					 	<td>
					 		<a href="edit-kategori.php?id=<?php echo $row['categori_id'] ?>">Edit</a> || <a href="proses-hapus.php?idk=<?php echo $row['categori_id'] ?>" onclick="return confirm('Yakin Menghapus ?')" >Hapus</a>
					 	</td>
					 	<td> <a href="cetak.php?id=<?php echo $row['categori_id'] ?>">PDF</a> </td>
						</td>
					</tr>
				<?php } ?>
				</tbody>
			</table>

		</div>
	</div>
</div>

<!-- Footer -->
	<div class="container">
		<small>Copyright 2023 - Warung 2023</small>
	</div>
</body>
</html>
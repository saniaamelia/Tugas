<?php 
	include'connection.php'
	 ?>

<!DOCTYPE html>
<html>
<head>
	<title>Data Pesanan</title>
	<style type="text/css">
		body{
		font : 16px arial, sans-serif;
		background-color:#eaeaea;
		color:#333333;
		background-image: url(doodles.png);
		}	
		.container{
		width : 960px;
		margin : auto;
		background-color: white;
		}
		.header {
		padding : 20px;
		padding-bottom: 10px;
		}
		.header a{
			display: inline-block;
			margin-right: 10px;
			text-decoration: none;
			color: salmon;
			padding: 3px;
		}
		.header a:hover{
			background-color: lightskyblue;
			color: white;
		}
		.latar_home{
			height: 400px;
			background-image: url(latar_home.png);
			background-size: cover;
			background-position: 0 -80px;
			border-top: 3px solid salmon;
			border-bottom: 3px solid lightskyblue;
		}
		.footer {
			background-color: #333;
		}
		.footer .copy{
			color: #eaeaea;
			text-align: center;
			padding: 10px;
		}
		.footer {
			background-color: #333;
		}
		.footer .copy{
			color: #eaeaea;
			text-align: center;
			padding: 10px;
		}
	</style>
</head>
<body>	<div class="container">
		<div class="header">
			<h1 class="judul">Sunny Cafe</h1>
			<tr>
				<td><a href="home.php">HOME</a></td>
				<td><a href="menu.php">MENU</a></td>
				<td><a href="pesan.php">PESAN</a></td>
				<td><a href="data.php">DATA</a></td>
			</tr>
		</div>
		<div class="latar_home"></div>
		<h2>Tabel Data Pesanan</h2>
		<nav>
			<a href="pesan.php">
			[+]Tambah pesanan</a>
		</nav>
		<br>
		<br>
		<table border="1" cellpadding="5" cellspacing="0">
			<thead>
				<tr>
					<th>Nama Pemesan</th>
					<th>Nama Makanan</th>
					<th>Jumlah Pesanan</th>
					<th>Harga Makanan</th>
					<th>Status Makanan</th>
					
				</tr>
			</thead>
			<tbody>
				<?php 
					$sql = "SELECT *FROM pesan";

					$query = mysqli_query($con , 
						$sql);

					while ($pesan = mysqli_fetch_assoc($query)) {
						echo "<tr>";

						echo "<td>".$pesan['nama_pemesan']."</td>";
						echo "<td>".$pesan['nama_makanan']."</td>";
						echo "<td>".$pesan['jumlah_pesanan']."</td>";
						echo "<td>".$pesan['harga_makanan']."</td>";
						echo "<td>".$pesan['status_makanan']."</td>";
						

					}

					 ?>
			</tbody>
		</table>
		<br>
		<a href="login.php">Logout</a>
		<div class="footer">
			<p class="copy">Copyright 2019 saniaamelia</p>
		</div>
</body>
</html>
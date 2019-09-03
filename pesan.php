<!DOCTYPE html>
<html>
<head>
	<title>Pesan</title>
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
		.input{
			text-align: left;
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
<body> 
	<div class="container">
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
		<h1>Input Data Pesanan</h1>
		<form action="proses_simpan.php" method="POST">
		<table class="input">	
		<tr>
			<td>Nama Pemesan</td>
			<td>:</td>
			<td><input type="text" name="nama_pemesan" placeholder="Masukkan Nama Pemesan"></td>
		</tr>
		<tr>
			<td>Nama Makanan</td>
			<td>:</td>
			<td><input type="text" name="nama_makanan" placeholder="Masukkan Nama Makanan"></td>
		</tr>
		<tr>
			<td>Jumlah Pesanan</td>
			<td>:</td>
			<td><input type="number" name="jumlah_pesanan" placeholder="Masukkan Jumlah Pesanan"></td>
		</tr>
		<tr>
			<td>Harga Makanan</td>
			<td>:</td>
			<td><input type="number" name="harga_makanan" placeholder="Masukkan Harga Makanan"></td>
		</tr>
		<tr>
			<td>Status Makanan</td>
			<td>:</td>
			<td><select name="status_makanan">
				<option value="tersedia">tersedia</option>
				<option value="habis">habis</option>
			</select></td>
		</tr>
		<tr>
			
			<td><input type="submit" name="Daftar" value="simpan"></td>
		</tr>
		</table>
	</form>

		
		<a href="data.php">Lihat Data</a>
		<br>
		<br>
		<a href="login.php">Logout</a>
		<div class="footer">
			<p class="copy">Copyright 2019 saniaamelia</p>
		</div>
</body>
</html>
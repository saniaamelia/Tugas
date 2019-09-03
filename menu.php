<!DOCTYPE html>
<html>
<head>
	<title>Menu</title>
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

		.content h2{
			font-size: 28px;
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
		<div class="content">
			<h2>Sunny Cafe</h2>
			<table border="0" cellpadding="3" cellspacing="0">
				<tr>
					<th colspan="3" bgcolor="salmon">DAFTAR   MENU</th>
				</tr>
				<tr>
						<td rowspan="4">
						<img src="kopi.jpeg" >
				</td>
				</tr>
				<tr>
					<td>Nama</td>
					<td>Kopi Latte</td>
				</tr>
				<tr>
					<td>Harga</td>
					<td>Rp 25.000</td>
				</tr>
				<tr>
					<td>Komposisi</td>
					<td>
						<ul>
							<li>Kopi Bubuk Murni</li>
							<li>Latte</li>
							<li>Cream</li>
						</ul>
					</td>
				</tr>
				</table>
				<table border="0" cellpadding="4" cellspacing="0">
				<tr>
					<th colspan="3" bgcolor="salmon">DAFTAR   MENU</th>
				</tr>
				<tr>
						<td rowspan="4">
						<img src="burger.jpeg" >
				</td>
				</tr>
				<tr>
					<td>Nama</td>
					<td>Purple Burger</td>
				</tr>
				<tr>
					<td>Harga</td>
					<td>Rp 50.000</td>
				</tr>
				<tr>
					<td>Komposisi</td>
					<td>
						<ul>
							<li>Roti</li>
							<li>Daging Sapi</li>
							<li>Sayuran</li>
							<li>Ubi Ungu (saus)</li>
						</ul>
					</td>
				</tr>
				<table border="0" cellpadding="3" cellspacing="0">
				<tr>
					<th colspan="3" bgcolor="salmon">DAFTAR   MENU</th>
				</tr>
				<tr>
						<td rowspan="4">
						<img src="cup_es_krim.jpeg" >
				</td>
				</tr>
				<tr>
					<td>Nama</td>
					<td>Cup Ice Cream</td>
				</tr>
				<tr>
					<td>Harga</td>
					<td>Rp 25.000</td>
				</tr>
				<tr>
					<td>Komposisi</td>
					<td>
						<ul>
							<li>Susu Sapi Murni</li>
							<li>Cream</li>
							<li>Toping </li>
							<li>Waffle</li>
						</ul>
					</td>
				</tr>
				<table border="0" cellpadding="7" cellspacing="0">
				<tr>
					<th colspan="3" bgcolor="salmon">DAFTAR   MENU</th>
				</tr>
				<tr>
						<td rowspan="4">
						<img src="sayap.jpeg" >
				</td>
				</tr>
				<tr>
					<td>Nama</td>
					<td>Chicken Wings</td>
				</tr>
				<tr>
					<td>Harga</td>
					<td>Rp 35.000</td>
				</tr>
				<tr>
					<td>Komposisi</td>
					<td>
						<ul>
							<li>Sayap Ayam</li>
							<li>Saus Sambal</li>
							
						</ul>
					</td>
				</tr>
				
				</table>
			<a href="login.php">Logout</a>
		<div class="footer">
			<p class="copy">Copyright 2019 saniaamelia</p>
		</div>
</body>
</html>
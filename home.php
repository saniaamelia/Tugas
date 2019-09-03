<!DOCTYPE html>
<html>
<head>
	<title>Beranda</title>
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
		.content .isi {
			font-size: 19px;
			margin-top: -18px;
		}
		.content p{
			margin-bottom: 20px;
			font-size: 17px;
			font-family: Franklin Gothic Medium;
		}
		.content .isi2{
			text-align: center;
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
			<p class="isi">Ditulis oleh <a href="">saniaamelia</a></p>
			<p class="isi2">Sunny Cafe dikenal sebagai cafe <br> yang cocok sekali untuk menghabiskan <br>waktu bersama teman teman yang sudah <br> lama tidak bertegur sapa.</p>

			
		</div>
		<a href="login.php">Logout</a>
		<div class="footer">
			<p class="copy">Copyright 2019 saniaamelia</p>
		</div>

	</div>
</body>
</html>
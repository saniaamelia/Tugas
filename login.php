<!DOCTYPE html>   
<html>
<head>
	<?php 
		include('connection.php');

		if (isset($_POST['login'])) {
			$user = $_POST["username"];
			$pass = $_POST["password"];


		$sql = "SELECT *FROM user WHERE username='$user'and password='$pass'";
		$result = mysqli_query($con, $sql);


		if(mysqli_num_rows($result) == 1){
			header("Location:home.php");
		}
		$error = true;		
		}
		 ?>
	<title>Halaman Login</title>
	<style type="text/css">
		body{
			background: url(background.png);

		}
		.login{
			margin: 350px auto;
			width: 300px;
			padding: 10px;
			border: 1px solid #ccc;
			background: rgba(255,255,255,0.8);
			position: center;
		}
		
	
	</style>
</head>
<body>
		<div class="login">
		<h2>Halaman login</h2>
		<div class="background"></div>

		<form action="login.php" method="POST">
		<table>
			<tr>
				<td>Username</td>
				<td>:</td>
				<td><input type="text" name="username" placeholder="Masukan username" required></td>
			</tr>
			<tr>
				<td>Password</td>
				<td>:</td>
				<td><input type="password" name="password" placeholder="Masukan Password" required></td>
			</tr>
			<tr>
				<td></td>
				<td></td>
				<td><input type="submit" name="login" value="Log In"></td>
			</tr>
		</table>
		</form>	
				<td></td>
				<td></td>
				
	
</body>
</html>
<?php 
	include("connection.php");

	if (isset($_POST['Daftar'])) {
		$namapemesan = $_POST['nama_pemesan'];
		$namamakanan = $_POST['nama_makanan'];
		$jumlahpesanan = $_POST['jumlah_pesanan'];
		$hargamakanan = $_POST['harga_makanan'];
		$statusmakanan = $_POST['status_makanan'];
		
	$sql = "INSERT INTO pesan VALUE ('','$namapemesan','$namamakanan', $jumlahpesanan, $hargamakanan,'$statusmakanan')";

	$query = mysqli_query($con, $sql);


	if ($query){
		echo "koneksi berhasil";
		header("location:data.php");
	}else{
		echo "koneksi gagal";
	}

}


	 ?>	

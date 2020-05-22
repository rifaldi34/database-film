<?php
	include "../koneksi.php";
	
	$nama_genre = $_POST['nama_genre'];
	
	$sql = "INSERT INTO tb_genre (nama_genre) VALUES ('$nama_genre')";
	$sql_eksekusi = mysqli_query($koneksi, $sql);
	
	if($sql_eksekusi) {
		//echo "Berhasil Input";
		header("location:genre.php");
	} else {
		echo "Gagal Input";
	}
?>
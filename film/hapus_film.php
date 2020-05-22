<?php
	include "../koneksi.php";
	
	$id_film = $_GET['id_film'];
	
	$sql = "DELETE FROM tb_film WHERE id_film = '$id_film'";
	$sql_eksekusi = mysqli_query($koneksi, $sql);
	
	if($sql_eksekusi) {
		header("location:film.php");
	} else {
		echo "Gagal Hapus Data";
	}
?>
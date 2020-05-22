<?php
	include "../koneksi.php";
	
	$nama_komentar 	= $_POST['nama_komentar'];
	$isi_komentar 	= $_POST['isi_komentar'];
	$id_film		= $_POST['id_film'];
	
	$sql = mysqli_query($koneksi, "INSERT INTO tb_komentar (nama_komentar, isi_komentar, id_film)
				VALUES ('$nama_komentar', '$isi_komentar', '$id_film');");
		
	if($sql) 
	{
		//echo "Data Berhasil Di Input";
		header("location:show_detail.php?id_film=$id_film");
	} else {
		echo "Data Gagal Input";
	}
?>
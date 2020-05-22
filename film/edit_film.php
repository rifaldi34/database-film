<?php
	include "../koneksi.php";
	
	$id_film 		= $_POST['id_film'];
	$nama_film 		= $_POST['nama_film'];
	$tahun_film 	= $_POST['tahun_film'];
	$sutradara_film = $_POST['sutradara_film'];
	$rating_film 	= $_POST['rating_film'];
	$id_genre 		= $_POST['id_genre'];
	
	if($_FILES['cover_film']['size'] == 0)
	{
		$sql = mysqli_query($koneksi, "
				UPDATE tb_film SET nama_film = '$nama_film', tahun_film = '$tahun_film',
				sutradara_film = '$sutradara_film', rating_film = '$rating_film',
				id_genre = '$id_genre' WHERE id_film = '$id_film'");
			
			if($sql) {
				//echo "Data Berhasil Di Input";
				header("location:show_film.php");
			} else {
				echo "Data Gagal Update! Hohoho";
			}
	}
	else
	{
		$cover_film = explode(".", $_FILES['cover_film']['name']);
		$tmp = $_FILES['cover_film']['tmp_name'];
		
		$cover = end($cover_film);
		$cover_rename = date('dmYHis').".".$cover;
		$path = "images/".$cover_rename;

		if(move_uploaded_file($tmp, $path)){
			$sql = mysqli_query($koneksi, "
				UPDATE tb_film SET nama_film = '$nama_film', tahun_film = '$tahun_film',
				sutradara_film = '$sutradara_film', cover_film = '$path', rating_film = '$rating_film',
				id_genre = '$id_genre' WHERE id_film = '$id_film'");
			
			if($sql) {
				//echo "Data Berhasil Di Input";
				header("location:show_film.php");
			} else {
				echo "Data Gagal Update";
			}
		} else {
			echo "Maaf, Gambar gagal untuk diupload.";
			echo "<br><a href='form_edit_film.php?id_film=".$id_film."'>Kembali Ke Form</a>";
		}
	}
?>
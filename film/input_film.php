<?php
	include "../koneksi.php";
	
	$nama_film 		= $_POST['nama_film'];
	$tahun_film 	= $_POST['tahun_film'];
	$sutradara_film = $_POST['sutradara_film'];
	$rating_film 	= $_POST['rating_film'];
	$id_genre 		= $_POST['id_genre'];
	
	$cover_film = explode(".", $_FILES['cover_film']['name']);
	$tmp = $_FILES['cover_film']['tmp_name'];
	
	$cover = end($cover_film);
	$cover_rename = date('dmYHis').".".$cover;
	$path = "images/".$cover_rename;

	if(move_uploaded_file($tmp, $path)){
		$sql = mysqli_query($koneksi, "INSERT INTO tb_film (nama_film, tahun_film, 
				sutradara_film, cover_film, rating_film, id_genre)
				VALUES ('$nama_film', '$tahun_film', '$sutradara_film', 
				'$path', '$rating_film', '$id_genre');");
		
		if($sql) {
			//echo "Data Berhasil Di Input";
			header("location:film.php");
		} else {
			echo "Data Gagal Input";
			var_dump($sql);
		}
	} else {
		echo "Maaf, Gambar gagal untuk diupload.";
		echo "<br><a href='form_input_film.php'>Kembali Ke Form</a>";
	}
?>
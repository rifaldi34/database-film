<?php
	
	$server 	= "localhost";
	$user		= "root";
	$password	= "";
	$database	= "resensi_film_jabbar_rifaldi";
	
	$koneksi = mysqli_connect($server,$user,$password) or die("Koneksi Server Gagal!");
	$db = mysqli_select_db($koneksi, $database) or die("Gagal Pilih Database!");
?>
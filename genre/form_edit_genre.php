<?php
		include "../koneksi.php";
		
		$id_genre = $_GET['id_genre'];
		
		$sql = "SELECT * FROM tb_genre WHERE id_genre='$id_genre'";
		$sql_eksekusi = mysqli_query($koneksi, $sql);
		$data = mysqli_fetch_array($sql_eksekusi);
?>

<html>
	<head>
		<title>Form Edit Film</title>
	</head>
	
	<body>
		<form action='edit_genre.php' method='POST'>
			<table border='1'>
				<tr>
					<td>Nama Genre</td>
					<td>
						<input type='hidden' name='id_genre'
						value='<?php echo $data['id_genre'] ?>'>
						
						<input type='text' name='nama_genre'
						value='<?php echo $data['nama_genre'] ?>'>
					</td>
				</tr>
				<tr>
					<td><input type='submit' value='Simpan'></td>
					<td><input type='reset' value='Ulangi'></td>
				</tr>
			</table>
		</form>
	</body>
</html>
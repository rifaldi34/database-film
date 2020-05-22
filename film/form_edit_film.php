<?php
		include "../koneksi.php";
		
		$id_film = $_GET['id_film'];
		
		$sql = "SELECT * FROM tb_film A
				INNER JOIN tb_genre B
				ON A.id_genre = B.id_genre
				WHERE id_film='$id_film'";
		$sql_eksekusi = mysqli_query($koneksi, $sql);
		$data = mysqli_fetch_array($sql_eksekusi);
?>

<html>
	<head>
		<title>film Film</title>
	</head>
	
	<body>
		<form action='edit_film.php' method='POST' enctype='multipart/form-data'>
			<table border='1'>
				<tr>
					<td>Nama film</td>
					<td>
						<input type='hidden' name='id_film' value='<?php echo $data['id_film']; ?>'>
						<input type='text' name='nama_film' value='<?php echo $data['nama_film']; ?>'>
					</td>
				</tr>
				<tr>
					<td>Tahun Film</td>
					<td><input type='text' name='tahun_film' value='<?php echo $data['tahun_film']; ?>'></td>
				</tr>
				<tr>
					<td>Sutradara Film</td>
					<td><input type='text' name='sutradara_film' value='<?php echo $data['sutradara_film']; ?>'></td>
				</tr>
				<tr>
					<td>Cover Film</td>
					<td><input type='file' name='cover_film'></td>
				</tr>
				<tr>
					<td>Rating Film</td>
					<td><input type='text' name='rating_film' value='<?php echo $data['rating_film']; ?>'></td>
				</tr>
				<tr>
					<td>Genre Film</td>
					<td>
						<select name='id_genre' class="custom-select form-control form-control-sm" id="inputGroupSelect04">
							<?PHP
								include "../koneksi.php";
								
								$sql2 = "SELECT * FROM tb_genre";
								$sql_eksekusi2 = mysqli_query($koneksi, $sql2);
								
								while ($data2=mysqli_fetch_array($sql_eksekusi2))
								{
									if($data['id_genre'] == $data2['id_genre'])
									{
										echo "<option value='".$data2['id_genre']."' selected>".$data2['nama_genre']."</option>";
									} else {
										echo "<option value='".$data2['id_genre']."'>".$data2['nama_genre']."</option>";
									}
								}
							?>
						</select>
					</td>
				</tr>
				<tr>
					<td><input type='reset' value='Ulangi'></td>
					<td><input type='submit' value='Simpan'></td>
				</tr>
			</table>
			<p>*Bila tidak ingin ada perubahan pada Cover, jangan isi kolom Cover</p>
		</form>
	</body>
</html>
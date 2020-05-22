<html>
	<head>
		<title>film Film</title>
	</head>
	
	<body>
		<form action='input_film.php' method='POST' enctype='multipart/form-data'>
			<table border='1'>
				<tr>
					<td>Nama film</td>
					<td><input type='text' name='nama_film'></td>
				</tr>
				<tr>
					<td>Tahun Film</td>
					<td><input type='text' name='tahun_film'></td>
				</tr>
				<tr>
					<td>Sutradara Film</td>
					<td><input type='text' name='sutradara_film'></td>
				</tr>
				<tr>
					<td>Cover Film</td>
					<td><input type='file' name='cover_film'></td>
				</tr>
				<tr>
					<td>Rating Film</td>
					<td><input type='text' name='rating_film'></td>
				</tr>
				<tr>
					<td>Genre Film</td>
					<td>
						<select name='id_genre' class="custom-select form-control form-control-sm" id="inputGroupSelect04">
							<?PHP
								include "../koneksi.php";
								
								$sql = "SELECT * FROM tb_genre";
								$sql_eksekusi = mysqli_query($koneksi, $sql);
								
								while ($data=mysqli_fetch_array($sql_eksekusi))
								{
									echo "<option value='".$data['id_genre']."'>".$data['nama_genre']."</option>";
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
		</form>
	</body>
</html>
<?php
	include "../koneksi.php";
	
	$id_film = $_GET['id_film'];
	
	$sql = "SELECT * FROM tb_film A
			inner join tb_genre B
			ON A.id_genre = B.id_genre
			WHERE A.id_film='$id_film'";
	$sql_eksekusi = mysqli_query($koneksi, $sql);
	$data = mysqli_fetch_array($sql_eksekusi);

	$i=1;
	$page = 'user';


	$sql2 = "SELECT * FROM tb_komentar A
			INNER JOIN tb_film B
			ON A.id_film = B.id_film
			WHERE B.id_film = '".$id_film."'";
	$sql_eksekusi2 = mysqli_query($koneksi, $sql2);
	$count = mysqli_num_rows($sql_eksekusi2);
	$j=1;
?>

<?php include '../header.php' ?>
<?php include '../navbar.php' ?>
<div class="container-fluid bg-2">
	<div class="container text3">
		<div class="row">
			<div class="col-sm-6">
				<img class="img2" src='../film/<?php echo $data['cover_film'] ?>'>
				<table class="table table-dark table2">
					<tr>
						<td colspan='2'><?php echo $data['nama_film'] ?></td>
					</tr>
					<tr>
						<td>Tahun</td>
						<td><?php echo $data['tahun_film'] ?></td>
					</tr>
					<tr>
						<td>Sutradara</td>
						<td><?php echo $data['sutradara_film'] ?></td>
					</tr>
					<tr>
						<td>Rating</td>
						<td><?php echo $data['rating_film'] ?></td>
					</tr>
					<tr>
						<td>Genre</td>
						<td><?php echo $data['nama_genre'] ?></td>
					</tr>
				</table>
			</div>
			<div class="col-sm-6">
				<h3>| Komentar</h3>
				<table class="table table-dark table2">
				<?php if($count<1){ ?>
					<tr>
						<td>Komentar Kosong</td>
					</tr>
				<?php }else{ ?>
					<?php while($data2=mysqli_fetch_array($sql_eksekusi2)){ ?>
					<tr>
						<td><?php echo $j++; ?></td>
						<td><?php echo $data2['nama_komentar'] ?></td>
						<td><?php echo $data2['isi_komentar'] ?></td>
					</tr>
					<?php } ?>
				<?php } ?>
				</table>

				<h3>| Beri Komentar</h3>
				<form action='input_komentar.php' method='POST'>
					<table class="table table-dark table2">
						<tr>
							<td>Nama</td>
							<td>
								<input type='hidden' name='id_film' value='<?php echo $id_film; ?>'>
								<input type='text' name='nama_komentar'>
							</td>
						</tr>
						<tr>
							<td>Isi Komentar</td>
							<td><textarea name='isi_komentar'></textarea></td>
						</tr>
						<tr>
							<td><input type='reset' class="btn btn-secondary" value='Reset'></td>
							<td><input type='submit' class="btn btn-primary" value='Kirim'></td>
						</tr>
						
					</table>
				</form>
			</div>
		</div>
	</div>
</div>

<?php include '../footer.php' ?>
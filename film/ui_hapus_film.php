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
Apakah anda ingin menghapus film <br>
<b><?php echo $data['nama_film']; ?></b> <br>
dengan id <b><?php echo $data['id_film']; ?></b>  ?
<br>
<br>
<div class="text-center">
<a class="btn btn-secondary" href="hapus_film.php?id_film=<?php echo($id_film) ?>">Ya</a>
<a class="btn btn-primary btn-tidak">Tidak</a>
</div>
<script type="text/javascript">
	$(".btn-tidak").click(function(){
		event.preventDefault();
		$('#modal1').modal("hide");
		$('.loading1').show();
		$('.datajs1').html('');
		$(".mdl1").html('Tambah Film');
	})
</script>
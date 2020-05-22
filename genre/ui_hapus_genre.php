<?php
	include "../koneksi.php";
	
	$id_genre = $_GET['id_genre'];
	
	$sql = "SELECT * FROM tb_genre WHERE id_genre = '$id_genre'";
	$sql_eksekusi = mysqli_query($koneksi, $sql);
	$data = mysqli_fetch_array($sql_eksekusi);
?>

Apakah anda ingin menghapus genre <b><?php echo $data['nama_genre'] ?></b><br>
dengan id <b><?php echo $data['id_genre'] ?></b> ?
<br>
<br>
<div class="text-center">
<a class="btn btn-secondary" href="hapus_genre.php?id_genre=<?php echo($id_genre) ?>">Ya</a>
<a class="btn btn-primary btn-tidak">Tidak</a>
</div>
<script type="text/javascript">
	$(".btn-tidak").click(function(){
		event.preventDefault();
		$('#modal1').modal("hide");
		$('.loading1').show();
		$('.datajs1').html('');
		$(".mdl1").html('Tambah Genre');
	})
</script>
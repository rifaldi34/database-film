<?php
	include "../koneksi.php";
	
	$sql = "SELECT * FROM tb_genre";
	$sql_eksekusi = mysqli_query($koneksi, $sql);
	$page = 'genre';
	$i = 1;
?>

<?php include '../header.php' ?>
<?php include '../navbar.php' ?>
<!-- Modal -->
<div id="modal1" class="modal fade" role="dialog">
  <div class="modal-dialog">

    <!-- Modal content-->
    <div class="modal-content">
      <div class="modal-header bg-3">
      	<h4 class="modal-title mdl1">Tambah Genre</h4>
        <button type="button" class="close closemodal">&times;</button>
      </div>
      <div class="modal-body bg-3">
      	<div class="loading1">Loading</div>
        <div class="datajs1"></div>
      </div>
      <div class="modal-footer bg-3">
        <button type="button" class="btn btn-danger closemodal">Close</button>
      </div>
    </div>

  </div>
</div>
<!-- Modal -->
<div class="container-fluid bg-2">
	<div class="container text3">

		<button class="btn btn-primary btn-tambah-genre">Tambah</button>
		<hr>
		<table class="table table-dark">
			<tr>
				<td>
					No.
				</td>
				<td>Nama Kategori</td>
				<td colspan="2">Aksi</td>
			</tr>
			<?php while($data=mysqli_fetch_array($sql_eksekusi)): ?>
			<tr>
				<td><?php echo $i++; ?></td>
				<td><?php echo $data['nama_genre'] ?></td>
				<td><a class="hapusgenre" href="ui_hapus_genre.php?id_genre=<?php echo $data['id_genre'] ?>">Hapus</a></td>
				<td><a class="editgenre" href="form_edit_genre.php?id_genre=<?php echo $data['id_genre'] ?>">Edit</a></td>
			</tr>
			<?php endwhile ?>
		</table>
	</div>
</div>

<?php include '../footer.php' ?>
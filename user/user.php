<?php 
	include "../koneksi.php";
	
	$sql = "SELECT * FROM tb_film A
			inner join tb_genre B
			ON A.id_genre = B.id_genre";
	$sql_eksekusi = mysqli_query($koneksi, $sql);
	$i=1;
	$page='user';
?>
<?php include '../header.php' ?>
<?php include '../navbar.php' ?>

<!-- Modal -->
<div id="modal1" class="modal fade" role="dialog">
  <div class="modal-dialog">

    <!-- Modal content-->
    <div class="modal-content">
      <div class="modal-header bg-3">
      	<h4 class="modal-title mdl1">Tambah Film</h4>
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
<div class="container">
	<button type="button" class="btn btn-primary btn-tambah">Tambah</button>

	<div class="mrg2 row">

	<?php while ($data=mysqli_fetch_array($sql_eksekusi)):?>

		<div class="col-lg-3 col-md-4 col-6 mrg1">
			<div class="nomor text2">
				<?php echo $i; $i++; ?>
			</div>
			<img class="img1" src='../film/<?php echo $data['cover_film'] ?>'>
			<div class="text1">
				<table class="table1">
					<tr>
						<td colspan='2'><a href="show_detail.php?id_film=<?php echo $data['id_film'] ?>"><?php echo $data['nama_film'] ?></a></td>
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
	    </div>

	<?php endwhile ?>

	</div>
</div>
</div>
<?php include '../footer.php' ?>
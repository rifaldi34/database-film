<?php $page = 'home'; ?>
<?php include "header.php"; ?>
<?php include "navbar.php"; ?>
<div class="container-fluid vh-100 bg-1">
	<div class="row h-100">
        <div class="col-sm-12 my-auto">
            <div class="content1 ui-draggable ui-draggable-handle" style="position: relative; cursor: grab; left: -20px; top: -6px;">
            	<h1>Database Film</h1>
            	Pilih opsi dibawah untuk melihat database
            	<br>
            	<br>
            	<a class="btn btn-danger btn-danger-1" href="film/film.php">Film</a>
            	<a class="btn btn-danger btn-danger-1" href="genre/genre.php">Genre</a>
            	<a class="btn btn-danger btn-danger-1" href="user/user.php">User</a>
            </div>
        </div>
    </div>
	<div class="note fixed-bottom">
		*Silahkan buka di google chrome untuk tampilan lebih baik
	</div>
</div>
<?php include "footer.php" ?>
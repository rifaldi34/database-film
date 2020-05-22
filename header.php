<?php if ($page != 'home'){ ?>
<?php include '../config.php' ?>
<!DOCTYPE html>
<html>
<head>
	<script src="../bootstraps/js/jquery.js"></script>
	<script src="../bootstraps/js/jquery-ui.js"></script>
	<script src="../bootstraps/js/popper-min.js"></script>
	<script src="../bootstraps/js/bootstrap.min.js"></script>
	<link rel="stylesheet" type="text/css" href="../bootstraps/css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="../style.css">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<title>Database Film</title>
	<?php if ($blur1 == true):?>
	<style type="text/css">
		.note, .bg-nav-1, .content1, .bg-3 {
		-webkit-backdrop-filter: blur(15px);
		backdrop-filter: blur(15px);
		}
	</style>
	<?php endif ?>
</head>
<body>
<?php }else{ ?>

<?php include 'config.php' ?>
<!DOCTYPE html>
<html>
<head>
	<script src="bootstraps/js/jquery.js"></script>
	<script src="bootstraps/js/jquery-ui.js"></script>
	<script src="bootstraps/js/popper-min.js"></script>
	<script src="bootstraps/js/bootstrap.min.js"></script>
	<link rel="stylesheet" type="text/css" href="bootstraps/css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="style.css">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<title>Database Film</title>
	<?php if ($blur1 == true):?>
	<style type="text/css">
		.note, .bg-nav-1, .content1 {
		-webkit-backdrop-filter: blur(15px);
		backdrop-filter: blur(15px);
		}
	</style>
	<?php endif ?>
</head>
<body>
<?php } ?>

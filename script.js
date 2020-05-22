$(document).ready(function(){
	$(".content1").draggable();
})

$(".content1").mousedown(function(){
	$(this).css("cursor", "grabbing");
})

$(".content1").mouseup(function(){
	$(this).css("cursor", "grab");
})
// ini untuk halaman film
$(".btn-tambah").click(function(){
	$('#modal1').modal({backdrop: 'static', keyboard: false})
	$('.datajs1').load("form_input_film.php", function(){
		$('.loading1').hide();
	})
})
$(".closemodal").click(function(){
	$('#modal1').modal("hide");
	$('.loading1').show();
	$('.datajs1').html('');
	$(".mdl1").html('Tambah Film');
})

$(".editfilm").click(function(){
	let link1 = $(this).attr("href");
	$('#modal1').modal({backdrop: 'static', keyboard: false})
	$('.datajs1').load(link1, function(){
		$('.loading1').hide();
	})
	event.preventDefault();
	$(".mdl1").html('Edit Film');
})

$(".hapusfilm").click(function(){
	let link1 = $(this).attr("href");
	$('#modal1').modal({backdrop: 'static', keyboard: false})
	$('.datajs1').load(link1, function(){
		$('.loading1').hide();
	})
	event.preventDefault();
	$(".mdl1").html('Hapus Film');
})
// ini untuk halaman film



// ini untuk halaman genre

$(".btn-tambah-genre").click(function(){
	$(".mdl1").html('Tambah Genre');
	$('#modal1').modal({backdrop: 'static', keyboard: false})
	$('.datajs1').load("form_input_genre.php", function(){
		$('.loading1').hide();
	})
})

$(".editgenre").click(function(){
	let link1 = $(this).attr("href");
	$('#modal1').modal({backdrop: 'static', keyboard: false})
	$('.datajs1').load(link1, function(){
		$('.loading1').hide();
	})
	event.preventDefault();
	$(".mdl1").html('Edit Genre');
})

$(".hapusgenre").click(function(){
	let link1 = $(this).attr("href");
	$('#modal1').modal({backdrop: 'static', keyboard: false})
	$('.datajs1').load(link1, function(){
		$('.loading1').hide();
	})
	event.preventDefault();
	$(".mdl1").html('Hapus Genre');
})

// ini untuk halaman genre
var keyword = $document.getElementById('keyword');

$('#tombol-cari').hide();
$('#keyword').on('keyup',function(){
	$('.loader').show();
	$('#container').load('ajax/mahasiswa.php?keyword=' + $('#keyword').val(),function(data){

	});
});
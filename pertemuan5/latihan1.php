<?php 
	//array
	$nama = "imam sh";
	$hari = array("senin","selasa","rabu","kamis","jumat","sabtu","minggu");
	$bulan = ["jan","feb","mar","apr","mei","jun","jul","aug","sep","okt","nov","des"];

	var_dump($hari);

	foreach ($hari as $key => $value) {
		echo $value." ";
	}

	foreach ($bulan as $key => $kunci) {
		echo $kunci." ";
	}
	print_r($bulan);


	$hari[] = "Libur";
	var_dump($hari);

 ?>
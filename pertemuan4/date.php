<?php 
	echo date("l, d-m-Y")."<br>";

	//time
	echo time();

	echo "<br>";
	$hari = 100;
	echo date("d M-Y",time()+(60*60*24*$hari))."<br>";
	echo date("l",mktime(0,0,0,8,14,1997))."<br>";
	
	echo strlen("Imam Sholehudin");
 ?>
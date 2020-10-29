<?php 
	// DATE (Tanggal)
	// echo date("l, M d, y");
	
	// TIME
	echo time();

	// cek hari
	// echo date("l, M", time()+60*60*24);

	// mktime
	// membuat detik sendri terhitung dari unix time 1 januari 1970
	// format --> mktime(0,0,0,0,0,0)
	// 		  --> jam, menit, detik, bulan, tanggal, tahun
	// echo date("l", mktime(0,0,0,2,6,2000));

	// strtotime
	// echo strtotime("6 feb 2000");
 ?>
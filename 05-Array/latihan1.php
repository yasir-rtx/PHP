<?php 
	// Array --> Variabel yang dapat menampung banyak nilai
	// 	     --> Pasangan antara key dan value
	//           keynya adalah index yang dimulai dari 0

	// P.s : Berbeda dengan bahasa pemograman lain, pada php array dapat menampung berbagai jenis tipe data
	// How to make array
	// Old way
	$day = array("sunday","monday");
	// // New Way
	// $moth = ["januari","february"];

	// Menampilkan array
	// var_dump($day);

	// print_r($day);

	// Menampilkan elemen tertentu dari array
	// echo $day[1];

	// Menambahkan elemen baru pada array
	var_dump($day);
	$day[] = "friday";
	echo "<br>";
	var_dump($day);
 ?>
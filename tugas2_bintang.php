<?php 

	for ($i = 9; $i >= 1; $i--) { // Untuk menginisialisasi perulangan pertama dengan variabel $i yang dimulai dari 9 dan berjalan mundur hingga mencapai 1. Ini akan mengontrol jumlah baris dalam segitiga dan mengurangi jumlah bintang pada setiap baris.
	    for ($a = 1; $a <= $i; $a++) { 
	    	echo "*";
	    } // Ini adalah perulangan kedua, yang berjalan dari 1 hingga nilai yang ditentukan oleh variabel $i. Setiap iterasi dari perulangan ini mencetak karakter bintang (*) pada baris yang sesuai. Pada baris pertama, ini mencetak 9 bintang, pada baris kedua 8 bintang, dan seterusnya hingga hanya satu bintang yang tersisa dalam baris terakhir.
	    echo "<br>"; // Mencetak baris baru
	}

?>

<?php

	for ($i = 0; $i <= 8; $i++) { // Untuk menginisialisasi perulangan pertama dengan variabel $i yang dimulai dari 0 dan berjalan hingga mencapai 8. Ini akan mengontrol jumlah baris dalam pola.
	    for ($j = 0; $j <= $i; $j++) {
	        echo $j;
	    } // Ini adalah perulangan kedua, yang berjalan dari 0 hingga nilai yang ditentukan oleh variabel $i. Ini bertujuan untuk mencetak angka dalam baris yang sesuai dengan iterasi saat ini. Misalnya, dalam iterasi pertama perulangan pertama, $i adalah 0, dan ini akan mencetak angka 0 dalam baris pertama. Pada iterasi kedua perulangan pertama, $i adalah 1, dan ini akan mencetak angka 0 dan 1 dalam baris kedua. Pada iterasi ketiga, $i adalah 2, dan ini akan mencetak angka 0, 1, dan 2 dalam baris ketiga, dan seterusnya.
	    echo "<br>"; // Mencetak baris baru

	}
?>

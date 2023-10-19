<!DOCTYPE html>
<html>
<head>
	<title>Tugas Individu Sesi 26</title>
</head>
<body>
	<?php 

	// Nomor 1
		for ($i=1; $i<11; $i++) {
		    if ($i % 2 == 0) {
		        echo "Angka $i adalah bilangan genap <br>";
		    } else {
		        echo "Angka $i adalah bilangan ganjil <br>";
		    }
		}

	// Nomor 2

		$mulai_tahun = 2000; // Tahun awal
		$akhir_tahun = 2023; // Tahun akhir

		echo "<br>";
		for ($tahun = $mulai_tahun; $tahun <= $akhir_tahun; $tahun++) {
		    if (($tahun % 4 == 0 && $tahun % 100 != 0) || $tahun % 400 == 0) {
		         echo "Tahun $tahun adalah tahun kabisat <br>";
		    } else {
		        echo "Tahun $tahun bukan tahun kabisat <br>";
		    }
		}

	// Nomor 3

		echo "<br>";
		for ($x = 9; $x >= 1; $x--) {
		    for ($y = 1; $y <= $x; $y++) {
		        echo $y;
		    }
		    echo "<br>";
		}

	?>
</body>
</html>
<!DOCTYPE html>
<html>
<head>
	<title>Tugas Individu Sesi 25</title>
</head>
<body>
		<?php 

		// 1. Membuat output bilangan ganjil dan genap

		$bilangan = 127;

		if ($bilangan % 2 == 0) {
		    echo "Bilangan $bilangan adalah bilangan genap <br><br>";
		} else {
		    echo "Bilangan $bilangan adalah bilangan ganjil <br><br>";
		}

		// 2. Membuat output tahun kabisat

		$tahun = 2024; //

		if (($tahun % 4 == 0 && $tahun % 100 != 0) || $tahun % 400 == 0) {
		    echo "$tahun adalah tahun kabisat <br><br>";
		} else {
		    echo "$tahun bukan tahun kabisat <br><br>";
		}

		// 3. Membuat grade nilai

		$nilai = 85; 

		if ($nilai >= 90) {
		    $grade = 'A';
		} else if ($nilai >= 80) {
		    $grade = 'B';
		} else if ($nilai >= 70) {
		    $grade = 'C';
		} else if ($nilai >= 60) {
		    $grade = 'D';
		} else {
		    $grade = 'E';
		}

		echo "Nilai: $nilai<br>";
		echo "Grade: $grade";

		?>


</body>
</html>
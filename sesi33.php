<!DOCTYPE html>
<html>
<head>
	<title>KUIS</title>
</head>
<body>
	<!-- Nomor 1 -->
	<?php

		$array = array("satu", "dua", "tiga", "empat", "lima");

		// Menggunakan loop for
		$length = count($array);
		for ($a = $length - 1; $a >= 0; $a--) {
		    echo $array[$a] . "<br>";
		    if ($a > 0) {
		    }
		}
	?>

	<!-- Nomor 2 -->
	<?php 
		echo "<br>";

		//membuat array yang berisi nama buah-buahan
		$buah = array('apel', 'nanas', 'mangga', 'jeruk');

		//count() untuk menghitung isi array.
		for ($x=0; $x<count($buah) ; $x++) { 
		echo $buah[$x] . "<br>";
	}


	 ?>
	<!-- Nomor 3 -->

	<?php
		echo "<br>";

		$array = array(7, 3, 4, 9);
		$total = 0;

		for ($i = 0; $i < count($array); $i++) {
		    $total += $array[$i];
		}

		echo "Totalnya adalah " . $total;
		echo "<br>";
	?>

	<!-- Nomor 4 -->
	<?php
		echo "<br>";

		for ($i = 1; $i <= 10; $i++) {
			$hasil = 1 * $i;
			echo "1 x " . $i . " = "  . $hasil;
			echo "<br>";
		}

	?>
</body>
</html>
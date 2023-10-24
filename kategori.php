<?php

	// Menerima input dari pengguna
	$nama = "Aprilisa"; // Ganti dengan nama Anda
	$tinggi_badan = 162; // Ganti dengan tinggi badan Anda dalam meter
	$berat_badan = 65; // Ganti dengan berat badan Anda dalam kilogram

	// Menghitung BMI
	$tinggi_m = $tinggi_badan / 100; // Konversi tinggi ke meter
	$bmi = $berat_badan / ($tinggi_m * $tinggi_m);

	// Menentukan kategori BMI
	$kategori = "";
	if ($bmi < 18.5) {
	    $kategori = "kurus";
	} else if ($bmi >= 18.5 && $bmi < 24.9) {
	    $kategori = "sedang";
	} else if ($bmi >= 25 && $bmi < 29.9) {
	    $kategori = "gemuk";
	} else {
	    $kategori = "obesitas";
	}

	// Menampilkan hasil
	echo "Halo, " . $nama . ". Nilai BMI anda adalah " . round($bmi, 1) . ", anda termasuk " . $kategori . ".";

?>

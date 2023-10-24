<?php

	// Fungsi untuk menentukan kategori nilai
	function kategoriNilai($nilai) {
	  switch (true) {
	    case ($nilai >= 90 && $nilai <= 100):
	      return "A";
	    case ($nilai >= 80 && $nilai < 90):
	      return "B";
	    case ($nilai >= 70 && $nilai < 80):
	      return "C";
	    default:
	      return "D";
	  }
	}

	// Input nilai dari user
	$nilai = 80; // Contoh nilai

	// Tentukan kategori nilai
	$kategori = kategoriNilai($nilai);

	// Tampilkan hasil ke layar
	echo "Nilai anda adalah " . $nilai . ", kategori nilai anda adalah " . $kategori . ".";

?>
<!DOCTYPE html>
<html>
<head>
	<link rel="stylesheet" type="text/css" href="style.css">
    <title>Tugas Individu Sesi 28</title>
</head>
<body>
	<div class="navbar">
        <h3>Daftar Nilai</h3>
    </div>
    <table border="1">
        <tr>
            <th>No</th>
            <th>Nama</th>
            <th>Tanggal Lahir</th>
            <th>Umur</th>
            <th>Alamat</th>
            <th>Kelas</th>
            <th>Nilai</th>
            <th>Hasil</th>
        </tr>
        <?php
        $data = file_get_contents("data.json");
        $students = json_decode($data);

        foreach ($students as $key => $siswa) {
        	// Umur
            $umur = date_diff(date_create($siswa->tanggal_lahir), date_create('today'))->y;

            // Hasil
            $hasil = "";
            if ($siswa->nilai >= 90 && $siswa->nilai <= 100) {
                $hasil = "A";
            } elseif ($siswa->nilai >= 80 && $siswa->nilai < 90) {
                $hasil = "B";
            } elseif ($siswa->nilai >= 70 && $siswa->nilai < 80) {
                $hasil = "C";
            } else {
                $hasil = "D";
            }
 
            echo "<tr>";
            echo "<td>" . ($key + 1) . "</td>";
            echo "<td>" . $siswa->nama . "</td>";
            echo "<td>" . $siswa->tanggal_lahir . "</td>";
            echo "<td>" . $umur ." tahun</td>";
            echo "<td>" . $siswa->alamat . "</td>";
            echo "<td>" . $siswa->kelas . "</td>";
            echo "<td>" . $siswa->nilai . "</td>";
            echo "<td>" . $hasil . "</td>";
            echo "</tr>";
        }
        ?>
    </table>
</body>
</html>

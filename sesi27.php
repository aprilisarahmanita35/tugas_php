<!DOCTYPE html>
<html>
<head>
	<title>Tugas Sesi 27 Praktek Individu (2)</title>
</head>
<body>
<!-- Nomor 1 -->
	<?php
		for ($i=0; $i<10; $i++) { 
		    for ($a=0; $a< $i; $a++) {
		    	echo $a;
		    }
		echo "<br>";
		}
		echo "<br>";
	?>

<!-- NOMOR 2 -->
	<table border="1" >
		<tr bgcolor="#00C7F7">
			<td>No</td>
			<td>Nama</td>
			<td>Kelas</td>
		</tr>
		<?php 
			for ($i=1, $j = 10; $i<11, $j >= 1; $i++, $j--) { 
				echo "
					<tr>
						<td>$i</td>
						<td>Nama ke $i</td>
						<td>Kelas $j</td>
					</tr>";
			}
		?>
	</table>
</body>
</html>
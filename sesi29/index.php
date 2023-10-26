<?php

	include "connection.php";

	$query = mysqli_query($connection, "SELECT * FROM pelanggan ORDER BY nama ASC");
?>

<!DOCTYPE html>
<html>
<head>
	<title>Tugas Individu Sesi 29</title>
</head>
<style>
	body {
	    font-family: Arial, sans-serif;
	    background-color: #f5f5f5;
	    margin: 0;
	    padding: 0;
	}

	table {
	    width: 80%;
	    border-collapse: collapse;
	    margin: 20px auto;
	    background-color: #fff;
	    border: 1px solid #ccc;
	}

	table, th, td {
	    border: 1px solid #ccc;
	}

	th, td {
	    padding: 10px;
	    text-align: center;
	}

	th {
	    background-color: #333;
	    color: #fff;
	}

	tr:nth-child(even) {
	    background-color: #f2f2f2;
	}

	tr:hover {
	    background-color: #ccc;
	}
</style>
<body>

	<table border="1" cellpadding="0" cellspacing="0">
		<tr>
			<td width="300px"><b>Nama</b></td>
			<td width="100px"><b>Jenis Kelamin</b></td>
			<td width="300px"><b>Telpon</b></td>
			<td width="300px"><b>Alamat</b></td>
		</tr>
		<?php if (mysqli_num_rows($query)) { ?>
		<?php while($data = mysqli_fetch_array($query)) { ?>
			<tr>
				<td><?php echo $data['nama']; ?></td>
				<td><?php echo $data['jenis_kelamin']; ?></td>
				<td><?php echo $data['telpon']; ?></td>
				<td><?php echo $data['alamat']; ?></td>
			</tr>
		<?php } ?>
	<?php } ?>
	</table>
</body>
</html>
<!DOCTYPE html>
<html>
<head>
	<title>Biodata</title>
	<link rel="stylesheet" href="style.css" type="text/css"/>
</head>
<body >
	<?php
		$nim=$_POST['NIM'];
		$Nama=$_POST['Nama'];
		$IPK=$_POST['IPK'];
		$Tahun=$_POST['Tahun'];
		$Bulan=$_POST['Bulan'];
		$jurusan=$_POST['jurusan'];
		$Tempat=$_POST['Tempat'];
		$Tgl=$_POST['Tgl'];
		$Bln=$_POST['Bln'];
		$Thn=$_POST['Thn'];
		$JK=$_POST['JK'];
		$alamat=$_POST['alamat'];

		echo "NIM      : $nim<br>";
		echo "Nama     : $Nama<br>";
		echo "IPK      : $IPK<br>";
		echo "Lama Study    : $Tahun Tahun $Bulan Bulan<br>";
		echo "Jurusan  : $jurusan<br>";
		echo "Tempat dan Tanggal Lahir : $Tempat, $Tgl/$Bln/$Thn<br>";
		echo "Jenis Kelamin : $JK<br>";
		echo "Alamat : $alamat<br>";
	?>

</body>
</html>
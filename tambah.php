<html>
<head>
	<title>CRUD</title>
	<link rel="stylesheet" type="text/css" media="all" href="index.css">
</head>
<body>

	<h2>CRUD</h2>
	<br/>
	<a href="index.php">KEMBALI</a>
	<br/>
	<br/>
	<h3>TAMBAH DATA MAHASISWA</h3>
	<form method="post" action="ptambah.php">
		<table>
			<tr>			
				<th>Nama</th>
				<td><input type="text" name="nama"></td>
			</tr>
			<tr>
				<th>NIM</th>
				<td><input type="number" name="nim"></td>
			</tr>
			<tr>
				<th>Jurusan</th>
				<td><input type="radio" name="jurusan" value="Teknik Informatika"/>TEKNIK INFORMATIKA</td>
        		<td><input type="radio" name="jurusan" value="Sistem Informasi"/>SISTEM INFORMASI</td>
                
			</tr>
			<tr>
				<td></td>
				<td><input type="submit" value="SIMPAN"></td>
			</tr>		
		</table>
	</form>
</body>
</html>
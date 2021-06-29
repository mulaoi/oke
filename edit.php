<!DOCTYPE html>
<html>
<head>
	<title>CRUD</title>
	<link rel="stylesheet" type="text/css" media="all" href="index.css">
</head>
<body>

	<h2>CRUD DATA MAHASISWA</h2>
	<br/>
	<a href="index.php">KEMBALI</a>
	<br/>
	<br/>
	<h3>EDIT DATA MAHASISWA</h3>

	<?php
	include 'koneksi.php';
	$id = $_GET['id'];
	$data = mysqli_query($koneksi,"select * from mahasiswa where id='$id'");
	while($d = mysqli_fetch_array($data)){
		$jurusan = $d['jurusan'];
		?>
		<form method="post" action="pedit.php">
			<table>
				<tr>			
					<th>Nama</th>
					<td>
						<input type="hidden" name="id" value="<?php echo $d['id']; ?>">
						<input type="text" name="nama" value="<?php echo $d['1']; ?>">
					</td>
				</tr>
				<tr>
					<th>NIM</th>
					<td><input type="number" name="nim" value="<?php echo $d['2']; ?>"></td>
				</tr>
				<tr>
				<th>Jurusan</th>
				<td><input type="radio" name="jurusan" value="Teknik Informatika"<?php if($jurusan=='Teknik Informatika'){echo "checked";}?> />TEKNIK INFORMATIKA</td>
        		<td><input type="radio" name="jurusan" value="Sistem Informasi"<?php if($jurusan=='Sistem Informasi'){echo "checked";}?>/>SISTEM INFORMASI</td>
                
			</tr>
				<tr>
					<td></td>
					<td><input type="submit" value="SIMPAN"></td>
				</tr>		
			</table>
		</form>
		<?php 
	}
	?>

</body>
</html>
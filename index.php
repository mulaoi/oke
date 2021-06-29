<!DOCTYPE html>
<html>
<head>

	<title>CRUD ANDRIANI</title>
	<link rel="stylesheet" type="text/css" media="all" href="index.css">
	<link rel="stylesheet" href="path/to/font-awesome/css/font-awesome.min.css">
</head>
<body>
  
	<h2> DATA MAHASISWA ANDRIANI</h2>
	<br/>
	
	<br/>
	<br/>
	<table  border='1' >
		<tr>
			<th >NO</th>
			<th >Nama</th>
			<th >NIM</th>
			<th >Jurusan</th>
			<th >OPSI</th>
		</tr>
		
		<a href="tambah.php" >+ TAMBAH</a>
		<?php 
		include 'koneksi.php';
		$no = 1;
		$data = mysqli_query($koneksi,"select * from mahasiswa");
		while($d = mysqli_fetch_array($data)){
		?>
			<tr>
				<td><?php echo $no++; ?></td>
				<td><?php echo $d['1']; ?></td>
				<td><?php echo $d['2']; ?></td>
				<td><?php echo $d['3']; ?></td>
				<td>
					<a href="edit.php?id= <?php echo $d['id']; ?>"><i class="fad fa-edit"></i>EDIT</a>
					<a href="hapus.php?id=<?php echo $d['id']; ?>">HAPUS</a>
				</td>
			</tr>
			<?php 
		}
		?>
	</table>
	
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.bundle.min.js" integrity="sha384-JEW9xMcG8R+pH31jmWH6WWP0WintQrMb4s7ZOdauHnUtxwoG2vI5DkLtS3qm9Ekf" crossorigin="anonymous"></script>

</body>
</html>






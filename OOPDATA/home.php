<?php 	
include('koneksi.php');
$db = new Dbh();
$siswa = $db->tampil_data();
?>
<!DOCTYPE html>
<html>
<head>
	<style>
		.nama{
			margin-left: 600px;
		}
	</style>
	<title>OOP</title>
	<h3 align=center>Zaki Abdilah Sudrajat</th>
	<h3 align=center>XI RPL</th>
</head>
<body>
	<div class="nama">
</div>
<a href="tambah_data.php">Tambah Data</a>
<table border="1" align=center>
		<tr>
			<th>NO</th>
			<th>ID</th>
			<th>NISN</th>
			<th>NAMA</th>
			<th>KELAS</th>
			<th>JURUSAN</th>
			<th>ACTION</th>
		</tr>
		<?php 
		$no = 1;
		foreach($siswa as $row){
			?>
			<tr>
				<td><?php echo $no++; ?></td>
				<td><?php echo $row['id']; ?></td>
				<td><?php echo $row['nama']; ?></td>
				<td><?php echo $row['nisn']; ?></td>
				<td><?php echo $row['kelas']; ?></td>
				<td><?php echo $row['jurusan']; ?></td>
				<td>
					<a href="edit.php?id=<?php echo $row['id']; ?>">UBAH</a>
					<a href="proses.php?action=delete&id=<?php echo $row['id']; ?>">HAPUS</a>
				</td>
			</tr>
			<?php 
		}
		?>
	</table>
</body>
</html>
<?php 	
include('koneksi.php');
$db = new database();
$data_siswa = $db->tampil_data();
?>
<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
	<h1>DATA SISWA</h1>
<button><a href="tambahdata.php" style="text-decoration:none">TAMBAH DATA</a></button>
<table border="1">
		<tr>
			<th>NO</th>
			<th>NAMA</th>
            <th>TEMPAT LAHIR</th>
            <th>TANGGAL LAHIR</th>
            <th>WARGA NEGARA</th>
            <th>ALAMAT</th>
            <th>EMAIL</th>
            <th>NO HP</th>
            <th>ASAL SEKOLAH</th>
			<th>NAMA AYAH</th>
			<th>NAMA IBU</th>
			<th>PENGHASILAN ORANGTUA</th>
			<th>Action</th>
		</tr>
		<?php 
		$no = 1;
		foreach($data_siswa as $row){
			?>
			<tr>
				<td><?php echo $no++; ?></td>
				<td><?php echo $row['nama']; ?></td>
				<td><?php echo $row['tempat_lahir']; ?></td>
				<td><?php echo $row['tanggal_lahir']; ?></td>
				<td><?php echo $row['warga_negara']; ?></td>
                <td><?php echo $row['alamat']; ?></td>
                <td><?php echo $row['email']; ?></td>
                <td><?php echo $row['no_hp']; ?></td>
                <td><?php echo $row['asal_smp']; ?></td>
                <td><?php echo $row['nama_ayah']; ?></td>
                <td><?php echo $row['nama_ibu']; ?></td>
                <td><?php echo $row['penghasilan']; ?></td>
				<td>
					<a href="edit.php?id=<?php echo $row['id']; ?>">Update</a>
					<a href="proses.php?action=delete&id=<?php echo $row['id']; ?>">Delete</a>
				</td>
			</tr>
			<?php 
		}
		?>
	</table>
</body>
</html>
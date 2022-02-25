<?php 	
include('koneksi.php');
$db = new database();
$id = $_GET['id'];
if(! is_null($id))
{
	$db_daftar = $db->get_by_id($id);
}
else
{
	header('location:tampildata.php');
}
?>
<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
<h3>Update Data Siswa</h3>
<hr/>
<form method="post" action="proses.php?action=update">
<input type="hidden" name="id" value="<?php echo $db_daftar['id']; ?>"/>
<table>
	<tr>
		<td>NAMA</td>
		<td>:</td>
		<td><input type="text" name="nama" value="<?php echo $db_daftar['nama']; ?>"/></td>
	</tr>
	<tr>
		<td>TEMPAT LAHIR</td>
		<td>:</td>
		<td><input type="text" name="tempat_lahir" value="<?php echo $db_daftar['tempat_lahir']; ?>"/></td>
	</tr>
	<tr>
		<td>TANGGAL LAHIR</td>
		<td>:</td>
		<td><input type="date" name="tanggal_lahir" value="<?php echo $db_daftar['tanggal_lahir']; ?>"/></td>
	</tr>
	<tr>
		<td>WARGA NEGARA</td>
		<td>:</td>
		<td><input type="text" name="warga_negara" value="<?php echo $db_daftar['warga_negara']; ?>"/></td>
	</tr>
    <tr>
		<td>ALAMAT</td>
		<td>:</td>
		<td><input type="text" name="alamat" value="<?php echo $db_daftar['alamat']; ?>"/></td>
	</tr>
    <tr>
		<td>EMAIL</td>
		<td>:</td>
		<td><input type="text" name="email" value="<?php echo $db_daftar['email']; ?>"/></td>
	</tr>
    <tr>
		<td>No HP</td>
		<td>:</td>
		<td><input type="text" name="no_hp" value="<?php echo $db_daftar['no_hp']; ?>"/></td>
	</tr>
    <tr>
		<td>ASAL SEKOLAH</td>
		<td>:</td>
		<td><input type="text" name="asal_smp" value="<?php echo $db_daftar['asal_smp']; ?>"/></td>
	</tr>
    <tr>
		<td>NAMA AYAH</td>
		<td>:</td>
		<td><input type="text" name="nama_ayah" value="<?php echo $db_daftar['nama_ayah']; ?>"/></td>
	</tr>
    <tr>
		<td>NAMA IBU</td>
		<td>:</td>
		<td><input type="text" name="nama_ibu" value="<?php echo $db_daftar['nama_ibu']; ?>"/></td>
	</tr>
    <tr>
		<td>PENGHASILAN</td>
		<td>:</td>
		<td><input type="text" name="penghasilan" value="<?php echo $db_daftar['penghasilan']; ?>"/></td>
	</tr>
	<tr>
		<td></td>
		<td></td>
		<td><input type="submit" name="tombol" value="Update"/></td>
	</tr>
</table>
</form>
</body>
</html>
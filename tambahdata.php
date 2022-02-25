<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
<h3>Tambah Data Siswa</h3>
<hr/>
<form method="post" action="proses.php?action=add">
<table>
	<tr>
		<td>NAMA</td>
		<td>:</td>
		<td><input type="text" name="nama"/></td>
	</tr>
    <tr>
		<td>TEMPAT LAHIR</td>
		<td>:</td>
		<td><input type="text" name="tempat_lahir"/></td>
	</tr>
    <tr>
		<td>TANGGAL LAHIR</td>
		<td>:</td>
		<td><input type="date" name="tanggal_lahir"/></td>
	</tr>
    <tr>
		<td>WARGA NEGARA</td>
		<td>:</td>
		<td><input type="text" name="warga_negara"/></td>
	</tr>
    <tr>
		<td>ALAMAT</td>
		<td>:</td>
		<td><input type="text" name="alamat"/></td>
	</tr>
    <tr>
		<td>EMAIL</td>
		<td>:</td>
		<td><input type="text" name="email"/></td>
	</tr>
	<tr>
		<td>No HP</td>
		<td>:</td>
		<td><input type="text" name="no_hp"/></td>
	</tr>
	<tr>
		<td>ASAL SEKOLAH</td>
		<td>:</td>
		<td><input type="text" name="asal_smp"/></td>
	</tr>
	<tr>
		<td>NAMA AYAH</td>
		<td>:</td>
		<td><input type="text" name="nama_ayah"/></td>
	</tr>
    <tr>
		<td>NAMA IBU</td>
		<td>:</td>
		<td><input type="text" name="nama_ibu"/></td>
	</tr>
    <tr>
		<td>PENGHASILAN ORANGTUA</td>
		<td>:</td>
		<td><input type="text" name="penghasilan"/></td>
	</tr>
	<tr>
		<td></td>
		<td></td>
		<td><input type="submit" name="tombol" value="Simpan"/></td>
	</tr>
</table>
</form>
</body>
</html>
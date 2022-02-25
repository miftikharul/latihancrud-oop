<?php 
class database{
 
	var $host = "localhost";
	var $username = "root";
	var $password = "";
	var $database = "db_daftar";
	var $koneksi = "";
	function __construct(){
		$this->koneksi = mysqli_connect($this->host, $this->username, $this->password,$this->database);
		if (mysqli_connect_errno()){
			echo "Koneksi database gagal : " . mysqli_connect_error();
		}
	}
 
	function tampil_data()
	{
		$data = mysqli_query($this->koneksi,"select * from data_siswa");
		while($row = mysqli_fetch_array($data)){
			$hasil[] = $row;
		}
		return $hasil;
	}
    function tambah_data($nama,$tempat_lahir,$tanggal_lahir,$warga_negara,$alamat,$email,$no_hp,$asal_smp,$nama_ayah,$nama_ibu,$penghasilan)
	{
		mysqli_query($this->koneksi,"insert into siswa values ('$nama','$tempat_lahir','$tanggal_lahir','$warga_negara','$alamat','$email','$no_hp','$asal_smp','$nama_ayah','$nama_ibu','$penghasilan')");
	}
	function get_by_id($id)
	{
		$query = mysqli_query($this->koneksi,"select * from data_siswa where id='$id'");
		return $query->fetch_array();
	}
	function update_data($nama,$tempat_lahir,$tanggal_lahir,$warga_negara,$alamat,$email,$no_hp,$asal_smp,$nama_ayah,$nama_ibu,$penghasilan,$id)
	{
		$query = mysqli_query($this->koneksi,"update siswa set nama='$nama',tempat_lahir='$tempat_lahir',tanggal_lahir='$tanggal_lahir',warga_negara='$warga_negara',alamat='$alamat',email='$email',no_hp='$no_hp',asal_smp='$asal_smp',nama_ayah='$nama_ayah',nama_ibu='$nama_ibu',penghasilan='$penghasilan', where id= '$id'");
	}
	function delete_data($id)
	{
		$query = mysqli_query($this->koneksi,"delete from data_siswa where id='$id'");
	}
}
?>
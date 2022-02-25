<?php 
include('koneksi.php');
$koneksi = new database();
 
$action = $_GET['action'];
if($action == "add")
{
	$koneksi->tambah_data($_POST['nama'],$_POST['tempat_lahir'],$_POST['tanggal_lahir'],$_POST['warga_negara'],$_POST['alamat'],$_POST['email'],$_POST['no_hp'],$_POST['asal_smp'],$_POST['nama_ayah'],$_POST['nama_ibu'],$_POST['penghasilan']);
	header('location:tampildata.php');
}elseif($action=="update")
{
	$koneksi->update_data($_POST['nama'],$_POST['tempat_lahir'],$_POST['tanggal_lahir'],$_POST['warga_negara'],$_POST['alamat'],$_POST['email'],$_POST['no_hp'],$_POST['asal_smp'],$_POST['nama_ayah'],$_POST['nama_ibu'],$_POST['penghasilan'],$_POST['id']);
	header('location:tampildata.php');
}elseif($action=="delete")
{
	$id = $_GET['id'];
	$koneksi->delete_data($id);
	header('location:tampildata.php');
}
?>
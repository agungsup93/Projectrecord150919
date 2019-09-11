<?php
include '../../koneksi.php';
$nik		= $_POST['nik'];
$nama		= $_POST['nama'];
$pjg		= $_POST['pjg'];
$jabatan	= $_POST['jabatan'];
$password	= md5($_POST['password']);
$pass		= $_POST['pass'];
$level		= $_POST['level'];

if (isset($_POST['save'])){
	
$query = mysqli_query($koneksi, "insert into user (nik, nama, pjg, jabatan, password, pass, level)
values ('".$nik."','".$nama."','".$pjg."','".$jabatan."','".$password."','".$pass."','".$level."')");
}
echo "<script language='javascript'> alert('Laporan Barang Keluar Telah Berhasil'); window.location='../user.php'</script> ";
?>
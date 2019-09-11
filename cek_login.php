<?php 
session_start();
include 'koneksi.php';
$nik = $_POST['nik'];
$password = md5 ($_POST['password']);
$login = mysqli_query($koneksi,"select * from user where nik='$nik' and password='$password'");
$cek = mysqli_num_rows($login);
if($cek > 0){

	$data = mysqli_fetch_assoc($login);
	if($data['level']=="2"){
		$_SESSION['nik'] = $nik;
		$_SESSION['level'] = "2";
		header("location:admin/home-admin.php");
	}	
}else{
	header("location:index.php?pesan=gagal");
}

?>
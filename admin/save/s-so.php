<?php
include '../../koneksi.php';

$pro			=	$_POST['pro'];
$tgl			=	$_POST['tgl'];
$cus			=	$_POST['cus'];
$nm				=	$_POST['nm'];
$site			=	$_POST['site'];
$ket			=	$_POST['ket'];
$status			=	$_POST['status'];

if (isset($_POST['save'])){
	
$query = mysqli_query($koneksi, "insert into so (pro, tgl, cus, nm, site, ket, status)
values ('".$pro."','".$tgl."','".$cus."','".$nm."','".$site."','".$ket."','".$status."')");
}
echo "<script language = 'javascript'> alert ('Data Berhasil ditambahkan'); window.location='../so.php'</script> ";
mysqli_query($query);

?>
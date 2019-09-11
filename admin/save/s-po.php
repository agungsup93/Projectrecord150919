<?php
include '../../koneksi.php';

$pro_no			=	$_POST['pro_no'];
$ponum			=	$_POST['ponum'];
$tgl			=	$_POST['tgl'];
$cust			=	$_POST['cust'];
$nm_pro			=	$_POST['nm_pro'];
$site			=	$_POST['site'];
$ket			=	$_POST['ket'];
$stat			=	$_POST['stat'];

if (isset($_POST['save'])){
	
$query = mysqli_query($koneksi, "insert into po (pro_no, ponum, tgl, cust, nm_pro, site, ket, stat)
values ('".$pro_no."','".$ponum."','".$tgl."','".$cust."','".$nm_pro."','".$site."','".$ket."','".$stat."')");
}
echo "<script language = 'javascript'> alert ('Data Berhasil ditambahkan'); window.location='../po.php'</script> ";
mysqli_query($query);

?>
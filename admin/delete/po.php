<?php
include "../../koneksi.php";
mysqli_query($koneksi, "DELETE from po WHERE pro_no='$_GET[pro_no]'");
echo "<script language='javascript'> alert ('Data Berhasil Dihapus'); window.location = '../po.php'</script>";
?>
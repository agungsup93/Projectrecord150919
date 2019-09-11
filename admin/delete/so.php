<?php
include "../../koneksi.php";
mysqli_query($koneksi, "DELETE from so WHERE pro='$_GET[pro]'");
echo "<script language='javascript'> alert ('Data Berhasil Dihapus'); window.location = '../so.php'</script>";
?>
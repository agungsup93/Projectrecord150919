<?php
include "../../koneksi.php";
mysqli_query($koneksi, "DELETE from user WHERE nik='$_GET[nik]'");
echo "<script language='javascript'> alert ('Data User Telah Dihapus'); window.location = '../user.php'</script>";
?>
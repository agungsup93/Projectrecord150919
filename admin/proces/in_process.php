<?php
include "../../koneksi.php";
$in_brg = mysqli_fetch_array(mysqli_query($koneksi, "select * from stok where part_no='$_GET[part_no]'"));
$data_in_brg = array  ('material'   	=>  $in_brg['material'],
						'satuan'	  	=>  $in_brg['satuan'],
						'lokasi'	  	=>  $in_brg['lokasi'],);
 echo json_encode($data_in_brg);
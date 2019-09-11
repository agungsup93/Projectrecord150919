<?php include '_base/head.php';?>
<body class="hold-transition skin-red sidebar-mini">
<div class="wrapper">
<?php include '_base/menu.php'; ?>
  <div class="content-wrapper">
    <section class="content-header">
      <h1>
        Edit Data G Number <br>
        <small>PT. Globalnine Indonesia</small>
      </h1>
      <ol class="breadcrumb">
        
      </ol>
    </section>
	
	    <section class="content">
      <div class="row">
        <div class="col-xs-12">
          <div class="box">
            <div class="box-body"><br>
					<?php
					include '../koneksi.php';
					$data = mysqli_fetch_array(mysqli_query($koneksi, "SELECT * FROM po WHERE pro_no = '$_GET[pro_no]'"));
					?>
					<?php
					echo"
					<form method='POST' action='' class='form-horizontal'> 
						<div class='form-group'>
							<label class='control-label col-sm-2'>No</label>
							<div class='col-sm-3'>
								<input	type='text'	name='pro_no'	class='form-control'value='$data[pro_no]' disabled>
							</div>
						</div>
						<div class='form-group'>
							<label class='control-label col-sm-2'>PO</label>
							<div class='col-sm-3'>
								<input	type='text'	name='ponum'	class='form-control'value='$data[ponum]' required autocomplete='off'>
							</div>
						</div>
						<div class='form-group'>
							<label class='control-label col-sm-2'>Tanggal</label>
							<div class='col-sm-3'>
								<input	type='date'	name='tgl'	class='form-control'value='$data[tgl]' required autocomplete='off'>
							</div>
						</div>
						<div class='form-group'>
							<label class='control-label col-sm-2'>Customer</label>
							<div class='col-sm-3'>
								<input	type='text'	name='cust'	class='form-control'value='$data[cust]' required autocomplete='off'>
							</div>
						</div>
						<div class='form-group'>
							<label class='control-label col-sm-2'>Project</label>
							<div class='col-sm-3'>
								<input	type='text'	name='nm_pro'	class='form-control'value='$data[nm_pro]' required autocomplete='off'>
							</div>
						</div>
						<div class='form-group'>
							<label class='control-label col-sm-2'>Site</label>
							<div class='col-sm-3'>
								<input	type='text'	name='site'	class='form-control'value='$data[site]' required autocomplete='off'>
							</div>
						</div>
						<div class='form-group'>
							<label class='control-label col-sm-2'>Remarks</label>
							<div class='col-sm-3'>
								<input	type='text'	name='ket'	class='form-control'value='$data[ket]' required autocomplete='off'>
							</div>
						</div>
						<div class='form-group'>
							<label class='control-label col-sm-2'>Status</label>
							<div class='col-sm-3'>
								<input	type='text'	name='stat'	class='form-control'value='$data[stat]' required autocomplete='off'>
							</div>
						</div>
						<div class='form-group'>
						<label class='col-sm-3 control-label'></label>
							<div class='col-sm-8'>
							<button type='reset' class='btn btn-default pull-left'>
							<a href='po.php'>
								<span class='fa fa-reply-all'></span> Kembali</button></a> &nbsp;&nbsp;
							<button type='submit' name='save' class='btn btn-success'>
								<span class='fa fa-floppy-o'></span> Simpan</button>
							</div>
						</div>
					</form>";
					?>
            </div>
          </div>
        </div>
      </div>
    </section>

  </div>
  <?php include '_base/footer-nama.php'; ?>
</div>
<?php include '_base/footer.php' ;?>


<?php
include '../koneksi.php';
	$pro_no		= $_GET['pro_no'];
if(isset($_POST['save'])){
	$ponum		= $_POST['ponum'];
	$tgl 		= $_POST['tgl'];
	$cust		= $_POST['cust'];
	$nm_pro		= $_POST['nm_pro'];
	$site		= $_POST['site'];
	$ket		= $_POST['ket'];
	$stat		= $_POST['stat'];
	
$update = mysqli_query($koneksi, "UPDATE po SET 
ponum		=	'$ponum', 
tgl			=	'$tgl', 
cust		=	'$cust',
nm_pro		=	'$nm_pro',
site		=	'$site',
ket			=	'$ket',
stat		=	'$stat' WHERE pro_no='$pro_no'") or die(mysqli_error());
echo "<script>alert ('Ubah Data G Number Berhasil'); document.location='po.php' </script>";}
?>


<?php include '_base/head.php';?>
<body class="hold-transition skin-red sidebar-mini">
<div class="wrapper">
<?php include '_base/menu.php'; ?>
  <div class="content-wrapper">
    <section class="content-header">
      <h1>
        Edit Data SO Number <br>
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
					$data = mysqli_fetch_array(mysqli_query($koneksi, "SELECT * FROM so WHERE pro = '$_GET[pro]'"));
					?>
					<?php
					echo"
					<form method='POST' action='' class='form-horizontal'> 
						<div class='form-group'>
							<label class='control-label col-sm-2'>No</label>
							<div class='col-sm-3'>
								<input	type='text'	name='pro'	class='form-control'value='$data[pro]' disabled>
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
								<input	type='text'	name='cus'	class='form-control'value='$data[cus]' required autocomplete='off'>
							</div>
						</div>
						<div class='form-group'>
							<label class='control-label col-sm-2'>Project</label>
							<div class='col-sm-3'>
								<input	type='text'	name='nm'	class='form-control'value='$data[nm]' required autocomplete='off'>
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
								<input	type='text'	name='status'	class='form-control'value='$data[status]' required autocomplete='off'>
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
	$pro		= $_GET['pro'];
if(isset($_POST['save'])){
	$tgl 		= $_POST['tgl'];
	$cus		= $_POST['cus'];
	$nm			= $_POST['nm'];
	$site		= $_POST['site'];
	$ket		= $_POST['ket'];
	$status		= $_POST['status'];
	
$update = mysqli_query($koneksi, "UPDATE so SET 
tgl			=	'$tgl', 
cus			=	'$cus',
nm			=	'$nm',
site		=	'$site',
ket			=	'$ket',
status		=	'$status' WHERE pro='$pro'") or die(mysqli_error());
echo "<script>alert ('Ubah Data SO Number Berhasil'); document.location='so.php' </script>";}
?>


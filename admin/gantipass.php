<?php include '_base/head.php';?>
<body class="hold-transition skin-red sidebar-mini">
<div class="wrapper">
<?php include '_base/menu.php'; ?>
  <div class="content-wrapper">
    <section class="content-header">
       <h1>
        Ganti Password <br>
        <small>
			<?php
				include '../koneksi.php';
				$data = mysqli_fetch_array(mysqli_query($koneksi, "SELECT * FROM user WHERE nik ='$_SESSION[nik]'"));
				echo "Hiii... <b> $data[nama] $data[pjg] </b>";
			?>
		</small>
      </h1>
     <ol class="breadcrumb">
        
      </ol>
    </section>

    <section class="content">
      <div class="row">
        <div class="col-xs-12">
          <div class="box">
            <div class="box-body">
				<?php
					include '../koneksi.php';
					$data = mysqli_fetch_array(mysqli_query($koneksi, "SELECT * FROM user WHERE nik = '$_GET[nik]'"));
					?>
					<?php
					echo"
					<form method='POST' action='' class='form-horizontal'> 
						<div class='form-group'>
							<label class='control-label col-sm-2'>NIK</label>
							<div class='col-sm-3'>
								<input	type='text'	name='nik'	class='form-control'value='$data[nik]' disabled>
							</div>
						</div>
						<div class='form-group'>
							<label class='control-label col-sm-2'>Password</label>
							<div class='col-sm-3'>
								<input	type='password'	name='password'	class='form-control' value='$data[password]' requred>
							</div>
						</div>
						<div class='form-group'>
							<label class='control-label col-sm-2'>Konfirmasi Password</label>
							<div class='col-sm-3'>
								<input	type='text'	name='pass'	class='form-control' value='$data[pass]' requred>
							</div>
						</div>
						<div class='form-group'>
						<label class='col-sm-3 control-label'></label>
							<div class='col-sm-8'>
							<button type='reset' class='btn btn-default pull-left'>
								<a href='home-admin.php'>
									<span class='fa fa-reply-all'></span> Kembali</button>
								</a> &nbsp;&nbsp;
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
	$nik		= $_GET['nik'];
if(isset($_POST['save'])){
	$password	= md5($_POST['password']);
	$pass		= $_POST['pass'];
	
$update = mysqli_query($koneksi, "UPDATE user SET 
password	=	'$password', 
pass		=	'$pass'  WHERE nik='$nik'") or die(mysqli_error());
echo "<script>alert ('Selamat... Password telah berhasil di ubah'); document.location='home-admin.php' </script>";}
?>
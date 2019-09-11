<?php include '_base/head.php';?>
<body class="hold-transition skin-red sidebar-mini">
<div class="wrapper">
<?php include '_base/menu.php'; ?>
  <div class="content-wrapper">
    <section class="content-header">
      <h1>
        SO Number <br>
        <small>PT. Globalnine Indonesia</small>
      </h1>
      <ol class="breadcrumb">
        <li>
			<a href="#" class="small-box-footer">
				<button type="button" class="btn btn-info" data-toggle="modal" data-target="#modal1-default">
				<span class="fa fa-plus-square-o"></span> Tambah Data SO Number</button>
			</a>	
		</li>
      </ol>
    </section>

    <section class="content">
      <div class="row">
        <div class="col-xs-12">
          <div class="box">	
            <!-- /.box-header -->
            <div class="box-body">
              <table id="example1" class="table table-bordered table-striped">
                <thead>
					<tr>
					  <th>No</th>
					  <th>Tanggal</th>
					  <th>Project</th>
					  <th>Site</th>
					  <th>Action</th>
					</tr>
				</thead>
				<?php
					include '../koneksi.php';
					$no=0;
					$query=mysqli_query($koneksi, "select * from so order by pro ASC");
					while($data=mysqli_fetch_array($query)){
					$no++;
					echo"		 
					<tr>
					<td>$data[pro]</td>
					<td>$data[tgl]</td>
					<td>$data[nm]</td>
					<td>$data[site]</td>
					<td>
						<center>
							<a href='show-so.php?pro=$data[pro]' class='btn btn-success btn-xs' title='Lihat Data'>
								<span class='fa fa-search-plus'></span></a>
							<a href='delete/so.php?pro=$data[pro]' class='btn btn-danger btn-xs' onClick='return hapus()'title='Hapus Data'>
								<span class='fa fa-trash-o'></span></a>
							<a href='e-so.php?pro=$data[pro]' class='btn btn-warning btn-xs' title='Edit Data'>
								<span class='fa fa-pencil-square-o'></span></a>
						</center>
					</td>
					</tr>
                ";
					?>
					<?php
					}
             	echo "</tbody></table>";
					?>
              </table>
            </div>
          </div>
        </div>
      </div>
    </section>
  </div>
  <?php include '_base/footer-nama.php'; ?>
</div>
<?php include '_base/footer.php' ;?>


		<div class="modal fade" id="modal1-default">
          <div class="modal-dialog">
            <div class="modal-content">
              <div class="modal-header bg-green">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                  <span aria-hidden="true"></span></button>
                <h4 class="modal-title">Tambah Data G Number</h4>
              </div>
              <div class="modal-body">
					<form name='input' method='POST' action='save/s-so.php' class='form-horizontal'>
					<div class="form-group">
						<label class="col-sm-3 control-label">No</label>
							<div class="col-sm-5">
						<input type='text' name='pro' placeholder='No' class='form-control' autocomplete='off' required maxlength='50'>
					</div>
					</div>
					<div class="form-group">
						<label class="col-sm-3 control-label">Tanggal</label>
							<div class="col-sm-5">
						<input type='date' name='tgl' placeholder='' class='form-control' autocomplete='off' required maxlength='50'>
					</div>
					</div>
					<div class="form-group">
						<label class="col-sm-3 control-label">Customer</label>
							<div class="col-sm-5">
						<input type='text' name='cus' placeholder='Customer' class='form-control' autocomplete='off' required maxlength='50'>
					</div>
					</div>
					<div class="form-group">
						<label class="col-sm-3 control-label">Project</label>
							<div class="col-sm-5">
						<input type='text' name='nm' placeholder='Project' class='form-control' autocomplete='off' required maxlength='50'>
					</div>
					</div>
					<div class="form-group">
						<label class="col-sm-3 control-label">Site</label>
							<div class="col-sm-5">
						<input type='text' name='site' placeholder='Site' class='form-control' autocomplete='off' required maxlength='50'>
					</div>
					</div>
					<div class="form-group">
						<label class="col-sm-3 control-label">Remarks</label>
							<div class="col-sm-5">
						<input type='text' name='ket' placeholder='Remarks' class='form-control' autocomplete='off' required maxlength='50'>
					</div>
					</div>
					<div class="form-group">
						<label class="col-sm-3 control-label">Status</label>
							<div class="col-sm-5">
						<input type='text' name='status' placeholder='Status' class='form-control' autocomplete='off' required maxlength='50'>
					</div>
					</div>
              </div>
              <div class="modal-footer">
                <button type="button" class="btn btn-danger pull-left" data-dismiss="modal">
					<span class="fa fa-sign-out"></span> Cancel</button>
                <button type="submit" name='save' class="btn btn-primary">
					<span class="fa fa-floppy-o"></span> Simpan</button>
              </div>
			  </form>
            </div>
          </div>
        </div>
		
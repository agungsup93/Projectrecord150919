<?php include '_user/head.php';?>
<body class="hold-transition skin-blue layout-top-nav">
<div class="wrapper">
<?php include '_user/head-2.php';?>
  <div class="content-wrapper">
    <div class="container">
      <section class="content-header">
        <h1>
         SO Number
        </h1>
		<ol class="breadcrumb">
        <li>
			<a href="index.php" class="small-box-footer">
			<button type="button" class="btn btn-danger">
				<span class="fa fa-mail-reply-all"></span> Kembali</button>
			</a>	
		</li>
      </ol><br>
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
					include 'koneksi.php';
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
							</a>&nbsp;&nbsp;&nbsp;&nbsp;
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
  </div>
  <?php include '_user/footer-nama.php';?>
</div>
<?php include '_user/footer.php';?>
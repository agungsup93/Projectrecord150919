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
      </section>
	
	
	<section class="content">
      <div class="row">
        <div class="col-xs-12">
          <div class="box">	
            <!-- /.box-header -->
            <div class="box-body">
					<?php
					include 'koneksi.php';
					$no=0;
					$pro= $_GET['pro'];
					$data = mysqli_fetch_array(mysqli_query($koneksi, "SELECT *	FROM so where pro = '$_GET[pro]'"));
					$no++;
					echo"
					<div class='panel-heading'>
              <h3 class='panel-title'>$data[pro]</h3>
            </div>
            <div class='panel-body'>
              <div class='row'>
                <div class=' col-md-9 col-lg-9 '>
                  <table class='table table-user-information'>
                    <tbody>
                      <tr>
                        <td>No</td>
                        <td>: $data[pro]</td>
                      </tr>
					  <tr>
                        <td>Tanggal</td>
                        <td>: $data[tgl]</td>
                      </tr>
                      <tr>
                        <td>Customer</td>
                        <td>: $data[cus]</td>
                      </tr>
                      <tr>
                        <td>Project</td>
                        <td>: $data[nm]</td>
                      </tr>
					  <tr>
                        <td>Site</td>
                        <td>: $data[site]</td>
                      </tr>
					  <tr>
                        <td>Remarks</td>
                        <td>: $data[ket]</td>
                      </tr>
					  <tr>
                        <td>Status</td>
                        <td>: $data[status]</td>
                      </tr>
					  <tr>
                        <td></td>
                        <td><a href='so.php' class='btn btn-primary' title='Kembali'><span class='fa fa-mail-reply-all'></span> Kembali</a></td>
                      </tr>
                    </tbody>
					
					";
					?>
					<?php
					
             	echo "</tbody></table>";
					?>
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
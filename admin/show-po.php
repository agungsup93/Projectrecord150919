<?php include '_base/head.php';?>
<body class="hold-transition skin-red sidebar-mini">
<div class="wrapper">
<?php include '_base/menu.php'; ?>
  <div class="content-wrapper">
    <section class="content-header">
      <h1>
        <?php
			include '../koneksi.php';
			$no=0;
			$pro_no= $_GET['pro_no'];
			$data = mysqli_fetch_array(mysqli_query($koneksi, "SELECT *	FROM po where pro_no = '$_GET[pro_no]'"));
			$no++;
			echo" $data[pro_no]"
			?><br>
        <small>PT. Globalnine Indonesia</small><br>
		
      </h1>
    </section>

    <section class="content">
      <div class="row">
		<div class="container">
        <div class="col-xs-8">
          <div class="box">
            <div class="box-body">
              <?php
					include '../koneksi.php';
					$no=0;
					$pro_no= $_GET['pro_no'];
					$data = mysqli_fetch_array(mysqli_query($koneksi, "SELECT *	FROM po where pro_no = '$_GET[pro_no]'"));
					$no++;
					echo"
					<div class='panel-heading'>
              <h1 class='panel-title'><p style='background-color:yellow'>Project No : $data[pro_no]</p></h1>
            </div>
            <div class='panel-body'>
              <div class='row'>
                <div class=' col-md-9 col-lg-9 '>
                  <table class='table table-user-information'>
                    <tbody>
                      <tr>
                        <td>No</td>
                        <td>: $data[pro_no]</td>
                      </tr>
					  <tr>
                        <td>Po</td>
                        <td>: $data[ponum]</td>
                      </tr>
                      <tr>
                        <td>Tanggal</td>
                        <td>: $data[tgl]</td>
                      </tr>
                      <tr>
                        <td>Customer</td>
                        <td>: $data[cust]</td>
                      </tr>
					  <tr>
                        <td>Project</td>
                        <td>: $data[nm_pro]</td>
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
                        <td>: $data[stat]</td>
                      </tr>
					  <tr>
                        <td></td>
                        <td><a href='po.php' class='btn btn-primary' title='Kembali'><span class='fa fa-mail-reply-all'></span> Kembali</a></td>
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
  <?php include '_base/footer-nama.php'; ?>
</div>
</div>
<?php include '_base/footer.php' ;?>
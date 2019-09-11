<script src="../_controller/bower_components/jquery/dist/jquery.min.js"></script>
<script src="../_controller/bower_components/bootstrap/dist/js/bootstrap.min.js"></script>
<script src="../_controller/bower_components/datatables.net/js/jquery.dataTables.min.js"></script>
<script src="../_controller/bower_components/datatables.net-bs/js/dataTables.bootstrap.min.js"></script>
<script src="../_controller/bower_components/jquery-slimscroll/jquery.slimscroll.min.js"></script>
<script src="../_controller/bower_components/fastclick/lib/fastclick.js"></script>
<script src="../_controller/dist/js/adminlte.min.js"></script>
<script src="../_controller/dist/js/demo.js"></script>
<script>
  $(function () {
    $('#example1').DataTable()
    $('#example2').DataTable({
      'paging'      : true,
      'lengthChange': false,
      'searching'   : false,
      'ordering'    : true,
      'info'        : true,
      'autoWidth'   : false
    })
  })
</script>
<script>
function hapus(pesan){
	var pesan;
	pesan = 'Apakah Anda ingin menghapus data ini? Jika yakin tekan OK, jika tidak tekan Cancel';
	
	if(confirm(pesan)){
		return true;
	}
	else{
		return false;
	}
}
</script>
</body>
</html>

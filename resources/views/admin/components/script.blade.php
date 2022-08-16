  <!-- jQuery -->
  <script src="/admin-lte/plugins/jquery/jquery.min.js"></script>
  <!-- Bootstrap 4 -->
  <script src="/admin-lte/plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
  <!-- Select2 -->
  <script src="/admin-lte/plugins/select2/js/select2.full.min.js"></script>
  {{-- FITUR SEE PASSWORD --}}
  <script src="/bootstrap-show-password/bootstrap-show-password.js"></script>
  <!-- DataTables  & Plugins -->
  <script src="/admin-lte/plugins/datatables/jquery.dataTables.min.js"></script>
  <script src="/admin-lte/plugins/datatables-bs4/js/dataTables.bootstrap4.min.js"></script>
  <script src="/admin-lte/plugins/datatables-responsive/js/dataTables.responsive.min.js"></script>
  <script src="/admin-lte/plugins/datatables-responsive/js/responsive.bootstrap4.min.js"></script>
  <script src="/admin-lte/plugins/datatables-buttons/js/dataTables.buttons.min.js"></script>
  <script src="/admin-lte/plugins/datatables-buttons/js/buttons.bootstrap4.min.js"></script>
  <script src="/admin-lte/plugins/jszip/jszip.min.js"></script>
  <script src="/admin-lte/plugins/pdfmake/pdfmake.min.js"></script>
  <script src="/admin-lte/plugins/pdfmake/vfs_fonts.js"></script>
  <script src="/admin-lte/plugins/datatables-buttons/js/buttons.html5.min.js"></script>
  <script src="/admin-lte/plugins/datatables-buttons/js/buttons.print.min.js"></script>
  <script src="/admin-lte/plugins/datatables-buttons/js/buttons.colVis.min.js"></script>
  
  {{-- Sweet Alert JS --}}
  {{-- <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script> --}}

  <!-- AdminLTE App -->
  <script src="/admin-lte/dist/js/adminlte.min.js"></script>
  <!-- AdminLTE for demo purposes -->
  <script src="/admin-lte/dist/js/demo.js"></script>
  <!-- Page specific script -->
  <script>
    $(function() {
      $('#datatables').DataTable({
        "paging": true,
        "lengthChange": false,
        "searching": true,
        "ordering": true,
        "info": true,
        "autoWidth": false,
        "responsive": true,
      });

      //Initialize Select2 Elements
      $('.select2').select2()

      //Initialize Select2 Elements
      $('.select2bs4').select2({
        theme: 'bootstrap4'
      })

      $(document).ready(function() {
        $('#example').DataTable();
      });
    });
  </script>

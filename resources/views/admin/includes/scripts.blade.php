    <!-- jQuery -->
    <script src="{{ env('APP_URL') }}/{{asset('admin_files')}}/vendors/jquery/dist/jquery.min.js"></script>
    <!-- Bootstrap -->
    <script src="{{ env('APP_URL') }}/{{asset('admin_files')}}/vendors/bootstrap/dist/js/bootstrap.bundle.min.js"></script>
    <!-- FastClick -->
    <script src="{{ env('APP_URL') }}/{{asset('admin_files')}}/vendors/fastclick/lib/fastclick.js"></script>
    <!-- Datatables -->
    <script src="{{ env('APP_URL') }}/{{asset('admin_files')}}/vendors/datatables.net/js/jquery.dataTables.min.js"></script>
    <script src="{{ env('APP_URL') }}/{{asset('admin_files')}}/vendors/datatables.net-bs/js/dataTables.bootstrap.min.js"></script>
    <script src="{{ env('APP_URL') }}/{{asset('admin_files')}}/vendors/datatables.net-buttons/js/dataTables.buttons.min.js"></script>
    <script src="{{ env('APP_URL') }}/{{asset('admin_files')}}/vendors/datatables.net-buttons-bs/js/buttons.bootstrap.min.js"></script>
    <script src="{{ env('APP_URL') }}/{{asset('admin_files')}}/vendors/datatables.net-buttons/js/buttons.flash.min.js"></script>
    <script src="{{ env('APP_URL') }}/{{asset('admin_files')}}/vendors/datatables.net-buttons/js/buttons.html5.min.js"></script>
    <script src="{{ env('APP_URL') }}/{{asset('admin_files')}}/vendors/datatables.net-buttons/js/buttons.print.min.js"></script>
    <script src="{{ env('APP_URL') }}/{{asset('admin_files')}}/vendors/datatables.net-fixedheader/js/dataTables.fixedHeader.min.js"></script>
    <script src="{{ env('APP_URL') }}/{{asset('admin_files')}}/vendors/datatables.net-keytable/js/dataTables.keyTable.min.js"></script>
    <script src="{{ env('APP_URL') }}/{{asset('admin_files')}}/vendors/datatables.net-responsive/js/dataTables.responsive.min.js"></script>
    <script src="{{ env('APP_URL') }}/{{asset('admin_files')}}/vendors/datatables.net-responsive-bs/js/responsive.bootstrap.js"></script>
    <script src="{{ env('APP_URL') }}/{{asset('admin_files')}}/vendors/datatables.net-scroller/js/dataTables.scroller.min.js"></script>
    <script src="{{ env('APP_URL') }}/{{asset('admin_files')}}/vendors/jszip/dist/jszip.min.js"></script>
    <script src="{{ env('APP_URL') }}/{{asset('admin_files')}}/vendors/pdfmake/build/pdfmake.min.js"></script>
    <script src="{{ env('APP_URL') }}/{{asset('admin_files')}}/vendors/pdfmake/build/vfs_fonts.js"></script>

    <!-- Custom Theme Scripts -->
    @stack('scripts')
    <script src="{{ env('APP_URL') }}/{{asset('admin_files')}}/build/js/custom.min.js"></script>

  </body>
</html>

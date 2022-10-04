 <!-- Bootstrap core JavaScript-->
 <script src="{{asset('template_sb_admin/assets/vendor/jquery/jquery.min.js')}}"></script>
 <script src="{{asset('template_sb_admin/assets/vendor/bootstrap/js/bootstrap.bundle.min.js')}}"></script>

 <!-- Core plugin JavaScript-->
 <script src="{{asset('template_sb_admin/assets/vendor/jquery-easing/jquery.easing.min.js')}}"></script>

 <!-- Custom scripts for all pages-->
 <script src="{{asset('template_sb_admin/assets/js/sb-admin-2.min.js')}}"></script>

 <!-- Page level plugins -->
 <script src="{{asset('template_sb_admin/assets/vendor/datatables/jquery.dataTables.min.js')}}"></script>
 <script src="{{asset('template_sb_admin/assets/vendor/datatables/dataTables.bootstrap4.min.js')}}"></script>

 <!-- Page level custom scripts -->
 <script src="{{asset('template_sb_admin/assets/js/demo/datatables-demo.js')}}"></script>

  <!-- Page level plugins -->
  <script src="{{asset('template_sb_admin/assets/vendor/chart.js/Chart.min.js')}}"></script>

  <!-- Page level custom scripts -->
  <script src="{{asset('template_sb_admin/assets/js/demo/chart-area-demo.js')}}"></script>
  <script src="{{asset('template_sb_admin/assets/js/demo/chart-pie-demo.js')}}"></script>

  <script src="https://cdn.jsdelivr.net/npm/sweetalert2@9.17.2/dist/sweetalert2.min.js"></script>

  <script>
    $(function(){

        @if(Session::has('success'))
            Swal.fire({
            // position: 'top-end',
            icon: 'success',
            title: '{{ Session::get("success") }}',
            showConfirmButton: false,
            timer: 1500
        })
        @endif
    });
    </script>

<script>
    $(function(){

        @if(Session::has('error'))
        Swal.fire({
            icon: 'error',
            title: '{{ Session::get("error") }}',
            showConfirmButton: false,
            timer: 1500
        })
        @endif
    });
    </script>

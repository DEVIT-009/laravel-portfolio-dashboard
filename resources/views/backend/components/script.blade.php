<!-- jQuery -->
<script src="{{ asset('backend_assets/plugins/jquery/jquery.min.js') }}"></script>
<!-- Bootstrap -->
<script src="{{ asset('backend_assets/plugins/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
<!-- AdminLTE -->
<script src="{{ asset('backend_assets/dist/js/adminlte.js') }}"></script>

<!-- OPTIONAL SCRIPTS -->
<script src="{{ asset('backend_assets/plugins/chart.js/Chart.min.js') }}"></script>
<!-- AdminLTE for demo purposes -->
<script src="{{ asset('backend_assets/dist/js/demo.js') }}"></script>
<!-- AdminLTE dashboard demo (This is only for demo purposes) -->
<script src="{{ asset('backend_assets/dist/js/pages/dashboard3.js') }}"></script>
<!-- SweetAlert2 -->
<script src="{{ asset('backend_assets/plugins/sweetalert2/sweetalert2.min.js') }}"></script>
<!-- Toastr -->
<script src="{{ asset('backend_assets/plugins/toastr/toastr.min.js') }}"></script>

<script>
    toastr.options = {
        closeButton: true,
        progressBar: true,
        positionClass: "toast-top-right",
        timeOut: 3000
    };
</script>

@if(session('success'))
    <script>
        toastr.success(@json(session('success')));
    </script>
@endif

@if(session('error'))
    <script>
        toastr.error(@json(session('error')));
    </script>
@endif

@if ($errors->any())
    <script>
        toastr.error("Oops! there something went wrong!");
    </script>
@endif

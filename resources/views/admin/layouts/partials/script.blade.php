<script src="{{ asset('assets/libs/jquery/dist/jquery.min.js') }}"></script>
<!-- Bootstrap tether Core JavaScript -->
<script src="{{ asset('assets/libs/bootstrap/dist/js/bootstrap.bundle.min.js') }}"></script>
<!-- slimscrollbar scrollbar JavaScript -->
<script src="{{ asset('assets/libs/perfect-scrollbar/dist/perfect-scrollbar.jquery.min.js') }}"></script>
<script src="{{ asset('assets/extra-libs/sparkline/sparkline.js') }}"></script>
<!--Wave Effects -->
<script src="{{ asset('assets/dist/js/waves.js') }}"></script>
<!--Menu sidebar -->
<script src="{{ asset('assets/dist/js/sidebarmenu.js') }}"></script>
<!--Custom JavaScript -->
<script src="{{ asset('assets/dist/js/custom.min.js?v=' . config('custom.CACHE_VERSION')) }}"></script>
<!-- this page js -->
<script src="{{ asset('assets/extra-libs/multicheck/datatable-checkbox-init.js') }}"></script>
<script src="{{ asset('assets/extra-libs/multicheck/jquery.multicheck.js') }}"></script>
<script src="{{ asset('assets/extra-libs/DataTables/datatables.min.js') }}"></script>
<script src="{{ asset('assets/custom/admin-common.js?v=' . config('custom.CACHE_VERSION')) }}"></script>
<script src="{{ asset('assets/dist/js/typeahead.js') }}"></script>
<script src="{{ asset('assets/dist/js/jquery-confirm.js') }}"></script>
<script src="{{ asset('assets/ck_editor2/build/ckeditor.js') }}" type="text/javascript"></script>
{{-- <link rel="stylesheet" href="{{ asset('assets/dist/js/jquery-confirm.js') }}"> --}}
<script>
    /****************************************
     *       Basic Table                   *
     ****************************************/
    $("#zero_config").DataTable();
</script>
@stack('scripts')

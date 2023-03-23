<script src="{{ asset('assetsAdmin/src/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
<script src="{{ asset('assetsAdmin/src/plugins/src/perfect-scrollbar/perfect-scrollbar.min.js') }}"></script>
<script src="{{ asset('assetsAdmin/src/plugins/src/mousetrap/mousetrap.min.js') }}"></script>
<script src="{{ asset('assetsAdmin/src/plugins/src/waves/waves.min.js') }}"></script>
<script src="{{ asset('assetsAdmin/layouts/horizontal-light-menu/app.js') }}"></script>
<!-- END GLOBAL MANDATORY SCRIPTS -->

<!-- BEGIN PAGE LEVEL PLUGINS/CUSTOM SCRIPTS -->
<script src="{{ asset('assetsAdmin/src/plugins/src/apex/apexcharts.min.js') }}"></script>
<script src="{{ asset('assetsAdmin/src/assets/js/dashboard/dash_1.js') }}"></script>
<script src=" {{asset("src/plugins/src/global/vendors.min.js")}} "></script>
<script src=" {{asset("src/bootstrap/js/bootstrap.bundle.min.js")}} "></script>
<script src=" {{asset("src/plugins/src/perfect-scrollbar/perfect-scrollbar.min.js")}} "></script>
<script src=" {{asset("src/plugins/src/mousetrap/mousetrap.min.js")}} "></script>
<script src=" {{asset("src/plugins/src/waves/waves.min.js")}} "></script>
<script src=" {{asset("layouts/horizontal-dark-menu/app.js")}} "></script>
<script src=" {{asset("src/assets/js/custom.js")}} "></script>
<!-- END GLOBAL MANDATORY SCRIPTS -->

<!-- BEGIN PAGE LEVEL SCRIPTS -->
<script src="../src/plugins/src/table/datatable/datatables.js"></script>
@include('sweetalert::alert')
@stack('js')

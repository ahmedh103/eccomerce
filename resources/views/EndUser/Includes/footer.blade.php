<script src="{{ asset('assetsEndUser/js/vendor/jquery-1.12.4.min.js') }}"></script>
<script src="{{ asset('assetsEndUser/js/vendor/popper.min.js') }}"></script>
<script src="{{ asset('assetsEndUser/js/vendor/bootstrap.min.js') }}"></script>
<script src="{{ asset('assetsEndUser/js/vendor/slick.min.js') }}"></script>

<!-- CUSTOM -->
<script src="{{ asset('assetsEndUser/js/custom/slick.js') }}"></script>
<script src="{{ asset('assetsEndUser/js/custom/main.js') }}"></script>
@include('sweetalert::alert')
@stack('js')
